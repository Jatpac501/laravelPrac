@extends('layout');
@section('btn')
<a class="btn btn-back" href="/group">Назад</a>
@endsection
@section('main')
<div class="main">
    <div class="card">
        <div class="card__title">{{ $data->name }}</div>
        <a class="btn btn-neutral" href="./edit">Изменить</a>
    </div>
</div>
@endsection
