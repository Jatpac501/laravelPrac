<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Students;

class groupsController extends Controller
{
    public function index()
    {
        $courses = Groups::orderBy('course')->orderBy('name')->get()->groupBy('course');
        return view('groups/index', ['courses' => $courses]);
    }
    public function create()
    {
        return view('groups/create');
    }
    public function store(StoreGroupRequest $request)
    {
        $validatedData = $request->validated();
        $group = new Groups($validatedData);
        $group->save();
        return redirect('/groups');
    }
    public function show(string $id)
    {
        $group = Groups::find($id);
        $students = Students::where('group_id', $id)->orderBy('surname')->get();
        return view('groups/show', ['group' => $group, 'students' => $students]);
    }
    public function edit(string $id)
    {
        $group = Groups::find($id);
        return view('groups/edit', ['group' => $group]);
    }
    public function update(StoreGroupRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $group = Groups::findOrFail($id);
        $group->update($validatedData);
        return redirect('/groups');
    }
    public function destroy(string $id)
    {
        $group = Groups::findOrFail($id);
        $group->delete();
        return redirect('/groups');
    }
}
