<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class groupController extends Controller
{
    public function index()
    {
        $data = Groups::all();
        return view('group', ['data' => $data]);
    }
    public function create()
    {
        return view('group__create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' =>'required|string|max:30',
            'course' =>'required|integer|max:5',
            'faculty' =>'required|string|max:255',
        ]);
        $group = new Groups();
        $group->name = $validateData['name'];
        $group->course = $validateData['course'];
        $group->faculty = $validateData['faculty'];
        $group->save();
        return redirect('/group');
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
