@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3">{{ $student->surname }} {{ $student->name }} @if ($student->headOfGroup)<span class="text-warning-emphasis">(Староста)</span>@endif <a href="{{ route('groups.show', [$group->id])}}" class="btn">{{$group->name}}</a></h2>
                <a href="tel:{{$student->phone}}" class="btn btn-outline-info mb-3">{{ $student->phone }}</a>
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('students.edit', [$student->id])}}">Изменить</a>
            </div>
        </div>
    </div>
@endsection
