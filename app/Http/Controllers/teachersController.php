<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Teachers;
use App\Http\Requests\StoreTeacherRequest;
class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teachers/index',[
            'teachers' => Teachers::orderBy('name')->get()
            ]);
    }

    public function create()
    {
        return view('teachers/create',[
            'groups' => Groups::orderBy('course')->orderBy('name')->get()
            ]);
    }

    public function store(StoreTeacherRequest $request)
    {
        Teachers::create($request->validated());
        return view('teachers/index',[
            'teachers' => Teachers::orderBy('name')->get()
            ]);
    }

    public function show(string $id)
    {
        return view('teachers/show',[
            'teacher' => Teachers::find($id),
            'group' => Groups::where('id', Teachers::find($id)->group_id)->first()
            ]);
    }

    public function edit(string $id)
    {
        return view('teachers/edit',[
            'teacher' => Teachers::find($id),
            'groups' => Groups::orderBy('course')->orderBy('name')->get()
        ]);
    }

    public function update(StoreTeacherRequest $request, string $id)
    {
        Teachers::findOrFail($id)->update($request->validated());
        return view('teachers/show',[
            'teacher' => Teachers::find($id),
            'group' => Groups::where('id', Teachers::find($id)->group_id)->first()
            ]);
    }

    public function destroy(string $id)
    {
        Teachers::findOrFail($id)->delete();
        return redirect('/groups');
    }
}
