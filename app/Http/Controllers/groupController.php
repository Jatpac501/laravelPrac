<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupController extends Controller
{
    public function index()
    {
        return view('group');
    }
    public function create()
    {
        return view('group__create');
    }
    public function store(Request $request)
    {
        return view('group');
    }
    public function show(string $id)
    {
        return view('group__show');
    }
    public function edit(string $id)
    {
        return view('group__create');
    }
    public function update(Request $request, string $id)
    {
        return view('group');
    }
    public function destroy(string $id)
    {
        //
    }
}
