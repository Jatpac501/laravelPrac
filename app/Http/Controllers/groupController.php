<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class groupController extends Controller
{
    public function index()
    {
        $courses = Groups::orderBy('course')->orderBy('name')->get()->groupBy('course');
        return view('group', ['courses' => $courses]);
    }
    public function create()
    {
        return view('group__create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|string|max:30',
            'course'=>'required|integer|max:5',
            'faculty'=>'required|string|max:1024',
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
        $data = Groups::where('name', $id)->first();
        return view('group__show', ['data' => $data]);
    }
    public function edit(string $id)
    {
        $data = Groups::where('name', $id)->first();
        return view('group__edit', ['data' => $data]);
    }
    public function update(Request $request, string $id)
    {
        $group = Groups::find($id);
        $group->update([
            'name' => $request->input('name'),
            'course' => $request->input('course'),
            'faculty' => $request->input('faculty'),
        ]);
        return redirect('/group');
    }
    public function destroy(string $id)
    {
        //
    }
}
