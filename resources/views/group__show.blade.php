@extends('layout')
@section('btn')
<a class="btn btn-back" href="{{route('group.index')}}">Назад</a>
@endsection
@section('main')
<div class="main">
    <div class="card">
        <div class="card__title">{{ $group->name }}</div>
        @foreach ($students as $student)
            <div class="card__student">{{ $student->surname }} {{ $student->name }}
            @if ($student->headOfGroup)
            <span class="card__student--headOfGroup">(Староста)</span>
            @endif
            </div>
        @endforeach
        <a class="btn btn-neutral" href="{{ route('group.edit', [$group->id])}}">Изменить</a>
    </div>
</div>
@endsection

