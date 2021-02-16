<?php

namespace App\Http\Resources;

use App\Helpers\GrantStageHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\GrantStageProcessingService;

class GrantPageResource extends JsonResource
{
    protected $grant;
    protected $grantStages;
    protected $projects;
    protected $news;

    public function __construct($grantPageData)
    {
        $this->grant = $grantPageData['grant'];
        $this->grantStageHelper = new GrantStageHelper();
        $this->grantStages = GrantStageProcessingService::getProcessedGrantStage($grantPageData['grant'], $grantPageData['grantStages'], $this->grantStageHelper);
        $this->projects = $grantPageData['projects'];
        $this->news = $grantPageData['news'];
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $grant = null;
        if($this->grant) {
            $grant = [
                'id' =>  $this->grant->id,
                'title' => $this->grant->title,
            ];
        }

        return [
            'grant' => $grant,
            'grantStages' => $this->grantStages,
            'news' => NewsResource::collection($this->news),
            'projects' => ProjectResource::collection($this->projects),
        ];
    }
}
