<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GrantsAndProjectsForProfileResource;
use App\Models\Project;
use App\Repositories\GrantsAndProjectsForProfileRepository;
use App\Repositories\AllProjectsPageRepository;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectDeleteRequest;
use App\Services\ImageService;
use App\Services\ProjectService;
use App\Services\HashTagService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\GetAllProjectsRequest;
use Throwable;
use App\Http\Resources\AllProjectsPageResource;

class ProjectController extends Controller
{
    protected $grantsAndProjectsForProfileRepository;
    protected $projectService;
    protected $imageService;
    protected $hashTagService;
    protected $allProjectsPageRepository;

    public function __construct(
        GrantsAndProjectsForProfileRepository $grantsAndProjectsForProfileRepository,
        ProjectService $projectService,
        ImageService $imageService,
        HashTagService $hashTagService,
        AllProjectsPageRepository $allProjectsPageRepository    )
    {
        $this->grantsAndProjectsForProfileRepository = $grantsAndProjectsForProfileRepository;
        $this->projectService = $projectService;
        $this->imageService = $imageService;
        $this->hashTagService = $hashTagService;
        $this->allProjectsPageRepository = $allProjectsPageRepository;
    }

    public function getProjectsForProfile()
    {
        return response()->json(GrantsAndProjectsForProfileResource::collection($this->grantsAndProjectsForProfileRepository->getGrantsAndProjectsForProfile()));
    }

    public function storeProject(ProjectStoreRequest $request)
    {
        try {
            $project = null;
            DB::transaction(function() use ($request, &$project){
                $this->imageService->storeImagesForProject($request);
                $project = $this->projectService->store($request);
                $this->hashTagService->attachHashtagsToProject($request->hashtags, $project);
            });
            $response = $project->id;
            $message = 'Project saved successfully.';
        } catch (Throwable $exception) {
            $response = null;
            $message = 'There was an error while saving the project.';
            report($exception);
        }

        return response()->json(['message' => $message, 'response' => $response]);
    }

    public function deleteProject(ProjectDeleteRequest $request) {
        $project = Project::find($request->project_id);
        $this->hashTagService->detachHashtagsFromProject($project);
        $this->projectService->delete($project->id);

        return response()->json(['message' => 'Project deleted successfully']);
    }

    public function getAllProjects(GetAllProjectsRequest $request)
    {
        return new AllProjectsPageResource($this->allProjectsPageRepository->getDataAllProjectsPage($request));
    }
}
