<?php

namespace App\Console\Commands;

use App\Helpers\GrantStageHelper;
use Illuminate\Console\Command;
use App\Services\GrantStageProcessingService;

class UpdateStatusGrants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grants:update_status';

    protected $grantStageProcessingService;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates the statuses of grants at the beginning of a new day';

    /**
     * Create a new command instance.
     *
     * @param GrantStageProcessingService $grantStageProcessingService
     */
    public function __construct(GrantStageProcessingService $grantStageProcessingService)
    {
        parent::__construct();
        $this->grantStageProcessingService = $grantStageProcessingService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->grantStageProcessingService->changeGrantsStages(new GrantStageHelper);
    }
}
