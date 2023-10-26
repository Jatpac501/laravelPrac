@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('groups.store')}}" autocomplete="off">
                    @csrf
                    <input class="form-control form-control-lg mb-3" placeholder="Название группы" type="text" name="name" id="groupName">
                    <input class="form-control mb-3" placeholder="Номер курса" type="number" name="course" id="groupName">
                    <input class="form-control mb-3" placeholder="Факультет" type="text" name="faculty" id="groupName">
                    <button class="btn btn-success" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
