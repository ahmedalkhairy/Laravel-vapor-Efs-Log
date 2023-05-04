<?php

namespace Ahmedalkhairy\LaravelVaporEfsLog\Commands;

use Illuminate\Console\Command;

class LaravelVaporEfsLogCommand extends Command
{
    public $signature = 'laravel-vapor-efs-log';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
