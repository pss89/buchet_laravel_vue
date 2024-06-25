<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    //
    public function test(){
        $data = [
            'a' => '12',
            'b' => '2'
        ];

        return Inertia::render('Test/Test', ['data' => $data]);
    }
}
