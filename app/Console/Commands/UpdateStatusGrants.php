<?php

namespace App\Console\Commands;

use App\Models\ProjectCommentLike;
use Illuminate\Console\Command;

class UpdateStatusGrants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grants:update_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command updates the statuses of grants at the beginning of a new day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ProjectCommentLike::first()->delete();
    }
}
