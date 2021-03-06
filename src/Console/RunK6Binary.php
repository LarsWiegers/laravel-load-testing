<?php

namespace Larswiegers\LoadTesting\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RunK6Binary extends Command
{
    protected $signature = 'loadtest:run {url=127.0.0.1}';

    protected $description = 'Run the specified script';

    public function handle()
    {
        $process = new Process(['k6', 'run', 'tests/test-scripts/basic-test.js']);

        $process->start();

        $process->wait();

        $this->line(str_replace('\\n', '', $process->getOutput()));
    }
}
