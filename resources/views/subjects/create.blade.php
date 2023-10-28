@extends('layout')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('subjects.store')}}" autocomplete="off">
                @csrf
                <input class="form-control form-control-lg mb-3" placeholder="Название предмета" type="text" name="name" required >
                <select class="form-select mb-3" placeholder="Предподаватель" name="teacher_id">
                    <option value="" selected>Преподаватель</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->surname}} {{$teacher->name}}</option>
                    @endforeach
                </select>
                <button class="btn btn-success" type="submit">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection
