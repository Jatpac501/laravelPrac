@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('groups.update', [$group->id]) }}" class="mb-3" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <h2 class="mb-3">Добавление группы</h2>
                    <input class="form-control form-control-lg mb-3" placeholder="Название группы" type="text" name="name" value="{{ $group->name }}" maxlength="10">
                    <input class="form-control mb-3" placeholder="Номер курса" type="number" name="course" value="{{ $group->course }}" maxlength="6">
                    <input class="form-control mb-3" placeholder="Факультет" type="text" name="faculty" value="{{ $group->faculty }}" maxlength="1024">
                    <button class="btn btn-success" type="submit">Изменить</button>
                </form>
                <form method="POST" action="{{ route('groups.destroy', [$group->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Удалить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
