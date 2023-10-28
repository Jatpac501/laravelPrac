@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3">{{ $teacher->surname }} {{ $teacher->name }} @if ($group!=null)
                    <a href="{{ route('groups.show', [$group->id])}}" class="btn">{{$group->name}}</a>
                @endif</h2>
                <a href="tel:{{$teacher->phone}}" class="btn btn-outline-info mb-3">{{ $teacher->phone }}</a>
                <a href="mail:{{$teacher->email}}" class="btn btn-outline-info mb-3">{{ $teacher->email }}</a>
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('teachers.edit', [$teacher->id])}}">Изменить</a>
            </div>
        </div>
    </div>
@endsection
