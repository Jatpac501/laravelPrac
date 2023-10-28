@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Предподаватели</h1>
                <div class="d-flex flex-column">
                    @foreach ($teachers as $teacher)
                        <a href="{{route('teachers.show', $teacher->id)}}" class="btn btn-outline-info btn-lg m-1">{{ $teacher->surname }} {{ $teacher->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
