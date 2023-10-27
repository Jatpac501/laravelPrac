@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="">{{ $group->name }}</h2>
                    <div class="d-flex flex-column">
                        @foreach ($students as $student)
                            <a class="m-1 btn btn-outline-info" href="{{ route('students.show', [$student->id])}}" class="btn btn-outline-secondary btn-sm">
                                {{ $student->surname }} {{ $student->name }}
                                @if ($student->headOfGroup)
                                <span class="text-warning-emphasis">(Староста)</span>
                                @endif
                            </a>
                        @endforeach
                    </div>
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('groups.edit', [$group->id])}}">Изменить</a>
            </div>
        </div>
    </div>
@endsection
