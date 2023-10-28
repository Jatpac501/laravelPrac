@extends('layout')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('teachers.store')}}" autocomplete="off">
                @csrf
                <input class="form-control form-control-lg mb-3" placeholder="Имя" type="text" name="name" required>
                <input class="form-control mb-3" placeholder="Фамилия" type="text" name="surname" required>
                <input class="form-control mb-3" placeholder="Почта" type="mail" name="email" required>
                <input class="form-control mb-3" placeholder="Телефон" type="tel" name="phone" pattern="\+7\d{10}" value='+7' required>
                <select class="form-select mb-3" placeholder="Группа" name="group_id">
                    <option value="" selected>Без группы</option>
                    @foreach ($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
                <button class="btn btn-success" type="submit">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection
