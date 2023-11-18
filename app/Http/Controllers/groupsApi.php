<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class groupsApi extends Controller
{
    public function index()
    {
        $groups = Groups::all();
        return response()->json($groups);
    }
}
