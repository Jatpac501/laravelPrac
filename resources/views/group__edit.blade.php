@extends('layout')
@section('btn')
<a class="btn btn-back" href="{{route('group.index')}}">Назад</a>
@endsection
@section('main')
<div class="main">
    <form method="POST" action="{{ route('group.update', [$group->id]) }}" class="card" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="card__title">Добавление группы</div>
        <input class="card__input" placeholder="Название группы" type="text" name="name" value="{{ $group->name }}" maxlength="10">
        <input class="card__input" placeholder="Номер курса" type="number" name="course" value="{{ $group->course }}" maxlength="6">
        <input class="card__input" placeholder="Факультет" type="text" name="faculty" value="{{ $group->faculty }}" maxlength="1024">
        <button class="btn btn-add" type="submit">Изменить</button>
    </form>
    <form method="POST" action="{{ route('group.destroy', [$group->id]) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-delete" type="submit">Удалить</button>
    </form>
</div>
@endsection
@section('scripts')
<script src='{{ asset("js/groupCreate.js") }}'></script>
@endsection
