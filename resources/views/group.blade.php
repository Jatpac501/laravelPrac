@extends('layout')
@section('btn')
    <a class="btn btn-primary btn-lg" href="{{route('group.create')}}">Добавить группу</a>
@endsection
@section('main')
<div class="main">
    @foreach ($courses as $course => $groups)
    <div class="card mb-3 p-2">
        <h3 class="">{{$course}} курс</h3>
        <div class="">
            @foreach ($groups as $group)
                <a href="{{route('group.show', $group->id)}}" class="btn btn-light btn-lg m-1">{{ $group->name }}</a>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
