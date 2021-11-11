<?php

use Larswiegers\LoadTesting\Http\Controllers\TestController;

Route::get('/test-url', function() {
    sleep(2000);
    return response()->json(['message' => 'test url works']);
})->name('load-test.test-url');

Route::get('/test', [TestController::class, 'test'])->name('load-test.test');
