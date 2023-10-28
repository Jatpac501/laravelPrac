<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubjectRequest;
use App\Models\Subjects;

class subjectsController extends Controller
{
    public function index()
    {
        return view('subjects/index',[
            'teachers' => Teachers::orderBy('name')->get(),
            'subjects' => Subjects::orderBy('name')->get()
            ]);
    }
    public function create()
    {
        return view('subjects/create', [
            'teachers' => Teachers::all()
        ]);
    }
    public function store(StoreSubjectRequest $request)
    {
        Subjects::create($request->validated());
        return redirect('/groups');
    }
    public function show(string $id)
    {
        return redirect('/subjects');
    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy(string $id)
    {
    }
}
