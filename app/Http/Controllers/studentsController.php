<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Students;
use App\Http\Requests\StoreStudentRequest;

class studentsController extends Controller
{
    public function index()
    {
        return redirect('/groups');
    }

    public function create()
    {
        return view('students/create',[
            'groups' => Groups::orderBy('name')->orderBy('course')->get()
            ]);
    }

    public function store(StoreStudentRequest $request)
    {
        Students::create($request->validated());
        return redirect('/groups');
    }

    public function show(int $id)
    {
        return view('students/show',[
            'student' => Students::find($id),
            'group' => Groups::where('id', Students::find($id)->group_id)->first()
            ]);
    }

    public function edit(string $id)
    {
        return view('students/edit',[
            'student' => Students::find($id),
            'groups' => Groups::orderBy('course')->orderBy('name')->get()
        ]);
    }


    public function update(StoreStudentRequest $request, string $id)
    {
        Students::findOrFail($id)->update($request->validated());
        return view('students/show',[
            'student' => Students::find($id),
            'group' => Groups::where('id', Students::find($id)->group_id)->first()
            ]);
    }


    public function destroy(string $id)
    {
        Students::findOrFail($id)->delete();
        return redirect('/groups');
    }
}
