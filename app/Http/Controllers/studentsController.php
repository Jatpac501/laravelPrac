<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Students;
use App\Http\Requests\StoreStudentRequest;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect('/groups');
    }

    public function create()
    {
        return view('students/create',[
            'groups' => Groups::orderBy('course')->orderBy('name')->get()
            ]);
    }

    public function store(StoreStudentRequest $request)
    {
        return dd(Students::create($request->validated()));
    }

    public function show(string $id)
    {

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
