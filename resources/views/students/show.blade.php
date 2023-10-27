@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="">{{ $group->name }}</h2>
                @foreach ($students as $student)
                    <div class="">{{ $student->surname }} {{ $student->name }}
                    @if ($student->headOfGroup)
                    <span class="">(Староста)</span>
                    @endif
                    </div>
                @endforeach
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('groups.edit', [$group->id])}}">Изменить</a>
            </div>
        </div>
    </div>
@endsection
