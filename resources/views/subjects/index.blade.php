@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Предметы</h1>
                <div class="d-flex flex-column">
                    @foreach ($subjects as $subject)
                        @foreach ($teachers as $teacher)
                            @if ($subject->teacher_id == $teacher->id)
                                <a href="{{route('teachers.show', $teacher->id)}}" class="btn btn-outline-info btn-lg m-1">
                                    {{ $subject->name }}
                                    ({{ $teacher->surname }} {{ $teacher->name }})
                                </a>
                            @else
                            <a class="btn btn-outline-info btn-lg m-1">
                                {{ $subject->name }}
                            </a>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
