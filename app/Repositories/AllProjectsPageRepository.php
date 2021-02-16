<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\Hashtag;
use Illuminate\Database\Eloquent\Builder;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class AllProjectsPageRepository
{
    private const FOR_PAGE = 12;

    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getDataAllProjectsPage(Request $request): array
    {
        $hashtagId = $request->hashtag_id;
        $searchWord = $request->search_word;
        $searchWord = $searchWord ? '*' . $searchWord . '*' : null;
        $projectStatusId = ($request->filter === 'archive') ? 4 : (($request->filter === 'published') ? 1 : null);
        $page = $request->page ?: 1;
        $countryId = $request->country_id ?: null;

        $allProjects = Project::with('hashtags')->orderBy('publication_date', 'desc')
            ->when($hashtagId, function ($query, $hashtagId) {
                return $query->whereHas('hashtags', function (Builder $q) use ($hashtagId) {
                    $q->where('hashtag_id', $hashtagId);
                });
            })
            ->when($searchWord, function ($query) use ($searchWord) {
                return $query->whereRaw("MATCH(title,description) AGAINST(? IN BOOLEAN MODE)", array($searchWord));
            })
            ->when($countryId, function ($query) use ($countryId) {
                return $query->where('country_id', $countryId);
            })
            ->when($projectStatusId, function ($query) use ($projectStatusId) {
                return $query->where('status_id', $projectStatusId);
            })
            ->whereNotIn('status_id', [2,3])
            ->withCount('projectComments')
            ->get();

        $projectsForPage = [];
        $numberOfPages = 0;

        if (count($allProjects) !== 0) {
            $projectsForPage = $allProjects->forPage($page,self::FOR_PAGE);
            $numberOfPages = ceil(count($allProjects)/self::FOR_PAGE);
        }

        return [
            'projects' => $projectsForPage,
            'numberOfPages' => $numberOfPages,
            'projectHashtags' => Hashtag::withCount('projects')
                ->orderBy('projects_count', 'desc')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get()
        ];
    }
}
