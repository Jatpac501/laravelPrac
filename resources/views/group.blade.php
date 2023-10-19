@extends('layout')
@section('btn')
    <a class="btn btn-add" href="/group/create">Добавить группу</a>
@endsection
@section('main')
<div class="main">
    @foreach ($courses as $course => $groups)
    <div class="card">
        <div class="card__title">{{$course}} курс</div>
        <div class="card__links">
            @foreach ($groups as $group)
                <a href="/group/{{ $group->name }}/" class="card__link">{{ $group->name }}</a>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection
