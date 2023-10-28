@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('teachers.update', [$teacher->id]) }}" class="mb-3" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <input class="form-control form-control-lg mb-3" placeholder="Имя" type="text" name="name" required value="{{ $teacher->name }}">
                    <input class="form-control mb-3" placeholder="Фамилия" type="text" name="surname" required value="{{ $teacher->surname }}">
                    <input class="form-control mb-3" placeholder="Почта" type="mail" name="email" required value="{{ $teacher->surname }}">
                    <input class="form-control mb-3" placeholder="Телефон" type="tel" name="phone" pattern="\+7\d{10}" required value="{{ $teacher->phone }}">
                    <select class="form-select mb-3" placeholder="Группа" name="group_id">
                        <option value="">Без группы</option>
                        @foreach ($groups as $group)
                            <option value="{{$group->id}}" @if ($group->id == $teacher->group_id) selected @endif>{{$group->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-success" type="submit">Изменить</button>
                </form>
                <form method="POST" action="{{ route('teachers.destroy', [$teacher->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Удалить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
