@extends('layout')
@section('btn')
<a class="btn btn-secondary btn-lg" href="{{route('group.index')}}">Назад</a>
@endsection
@section('main')
<div class="">
    <div class="mb-3">
        <h2 class="">{{ $group->name }}</h2>
        @foreach ($students as $student)
            <div class="">{{ $student->surname }} {{ $student->name }}
            @if ($student->headOfGroup)
            <span class="">(Староста)</span>
            @endif
            </div>
        @endforeach
    </div>
    <a class="btn btn-outline-secondary" href="{{ route('group.edit', [$group->id])}}">Изменить</a>
</div>
@endsection

