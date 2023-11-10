<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
//use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Schedule;
use App\Models\Students;
use App\Models\Subjects;
use App\Models\Teachers;
use App\Models\Rooms;

class groupsController extends Controller
{
    public function index()
    {
        return view('groups/index',[
            'courses' => Groups::orderBy('course')->orderBy('name')->get()->groupBy('course')
            ]);
    }
    public function create()
    {
        return view('groups/create');
    }
    public function store(StoreGroupRequest $request)
    {
        Groups::create($request->validated());
        return redirect('/groups');
    }
    public function show(string $id)
    {
        return view('groups/show',[
            'group' => Groups::findOrFail($id),
            'teacher' => Teachers::where('group_id', $id)->first(),
            'students' => Students::where('group_id', $id)->orderBy('surname')->get(),
            'schedule' => Schedule::where('group_id', $id)->get(),
            'subjects' => Subjects::get(),
            'rooms' => Rooms::get()
        ]);
    }
    public function edit(string $id)
    {
        return view('groups/edit', [
            'group' => Groups::find($id)
        ]);
    }
    public function update(StoreGroupRequest $request, string $id)
    {
        Groups::findOrFail($id)->update($request->validated());
        return view('groups/show',[
            'group' => Groups::findOrFail($id),
            'students' => Students::where('group_id', $id)->orderBy('surname')->get()
        ]);
    }
    public function destroy(string $id)
    {
        Groups::findOrFail($id)->delete();
        return redirect('/groups');
    }
}
