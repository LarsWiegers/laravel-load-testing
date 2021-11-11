<?php

namespace Larswiegers\LoadTesting\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Process\Process;

class RunK6Binary extends Command
{
    protected $signature = 'loadtest:run';

    protected $description = 'Run the specified script';

    public function handle()
    {
        $process = new Process(['k6', 'run', 'tests/test-scripts/basic-test.js']);

        $process->start();

        $process->wait();

        $this->line(Str::replace('\\n', '', $process->getOutput()));
    }
}
