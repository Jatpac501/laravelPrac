<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function test(int $id): View
    {
        return view('welcome', ['id' => $id]);
    }
}
