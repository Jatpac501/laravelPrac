@extends('layout')
@section('btn')
<a class="btn btn-back" href="/group">Назад</a>
@endsection
@section('main')
<div class="main">
    <form method="POST" action="/group" class="card" autocomplete="off">
        @csrf
        <div class="card__title">Добавление группы</div>
        <input class="card__input" placeholder="Название группы" type="text" name="name" id="groupName">
        <input class="card__input" placeholder="Номер курса" type="number" name="course" id="groupName">
        <input class="card__input" placeholder="Факультет" type="text" name="faculty" id="groupName">
        <button class="btn btn-add" type="submit">Добавить</button>
    </form>
</div>
@endsection
@section('scripts')
<script src='{{ asset("js/groupCreate.js") }}'></script>
@endsection
