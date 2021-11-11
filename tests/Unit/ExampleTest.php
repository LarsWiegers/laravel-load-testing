<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;
use Tests\TestCase;

final class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testBasicTest()
    {
        $output = new BufferedOutput;

        Artisan::call('loadtest:run', [], $output);
        $lines = explode("\n", $output->fetch());
        dd($lines);
    }
}
