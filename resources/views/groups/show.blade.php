@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="">{{ $group->name }}</h2>
                    @component('groups.assets.schedule')
                        @slot('schedule')
                            {{ $schedule }}
                        @endslot
                    @endcomponent

                    <div class="d-flex flex-column">
                        @if ($teacher != null)
                            <a class="m-1 btn btn-outline-warning" href="{{ route('teachers.show', [$teacher->id])}}" class="btn btn-outline-secondary btn-sm">
                                {{ $teacher->surname }} {{ $teacher->name }} (Куратор)
                            </a>
                        @endif
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
