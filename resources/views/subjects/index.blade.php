@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Группы</h1>
                @foreach ($courses as $course => $groups)
                    <div class="card mb-3 p-2">
                        <h3 class="">{{$course}} курс</h3>
                        <div class="">
                            @foreach ($groups as $group)
                                <a href="{{route('groups.show', $group->id)}}" class="btn btn-outline-info btn-lg m-1">{{ $group->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
