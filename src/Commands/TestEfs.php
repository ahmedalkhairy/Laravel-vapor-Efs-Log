<?php

namespace Ahmedalkhairy\LaravelVaporEfsLog\Commands;

use Illuminate\Console\Command;
use Log;

class TestEfs extends Command
{
    public $signature = 'test_efs_logs';
    public $description = 'My command';

    public function handle(): int
    {
        Log::info('testing efs');

        return Command::SUCCESS;
    }
}
