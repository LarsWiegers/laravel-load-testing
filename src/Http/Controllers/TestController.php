<?php

namespace Larswiegers\LoadTesting\Http\Controllers;

class TestController extends Controller
{
    public function test() {
        return response()->json(['message' => 'test url works']);
    }
}
