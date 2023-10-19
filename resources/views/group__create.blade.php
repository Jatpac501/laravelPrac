@extends('layout')
@section('btn')
<a class="btn btn-secondary btn-lg" href="{{route('group.index')}}">Назад</a>
@endsection
@section('main')
<div class="main">
    <form method="POST" action="{{route('group.store')}}" class="" autocomplete="off">
        @csrf
        <h2 class="mb-3">Добавление группы</h2>
        <input class="form-control form-control-lg mb-3" placeholder="Название группы" type="text" name="name" id="groupName">
        <input class="form-control mb-3" placeholder="Номер курса" type="number" name="course" id="groupName">
        <input class="form-control mb-3" placeholder="Факультет" type="text" name="faculty" id="groupName">
        <button class="btn btn-success" type="submit">Добавить</button>
    </form>
</div>
@endsection
@section('scripts')
<script src='{{ asset("js/groupCreate.js") }}'></script>
@endsection
