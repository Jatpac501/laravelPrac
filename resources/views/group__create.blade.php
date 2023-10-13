@extends('layout')
@section('btn')
<a class="btn btn-back" href="/group">Назад</a>
@endsection
@section('main')
<div class="main">
    <form method="POST" action="/group" class="card" autocomplete="off">
        @csrf
        <div class="card__title">Добавление группы</div>
        <input class="card__input" placeholder="Название группы" type="text" name="Название группы" id="groupName">
        <div id="addEducatorBtn" class="btn btn-neutral">Добавить предподавателя</div>
        <div class="card__list"></div>
        <button class="btn btn-add" type="submit">Добавить</button>
    </form>
</div>
@endsection
@section('scripts')
<script src='{{ asset("js/groupCreate.js") }}'></script>
@endsection
