@extends('layout')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('students.store')}}" autocomplete="off">
                @csrf
                <input class="form-control form-control-lg mb-3" placeholder="Имя" type="text" name="name" required value='test'>
                <input class="form-control mb-3" placeholder="Фамилия" type="text" name="surname" required value='test'>
                <input class="form-control mb-3" placeholder="Телефон" type="tel" name="phone" pattern="\+7\d{10}" required value='+79991234567'>
                <select class="form-select mb-3" placeholder="Группа" name="group_id">
                        <option selected>Группа</option>
                        @foreach ($groups as $group)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                        @endforeach
                    </select>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="headOfGroup" value="1">
                    <label class="form-check-label">Староста?</label>
                </div>
                <button class="btn btn-success" type="submit">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection
