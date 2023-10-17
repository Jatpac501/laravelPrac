@extends('layout');
@section('btn')
<a class="btn btn-back" href="/group">Назад</a>
@endsection
@section('main')
<div class="main">
    <div class="card">
        <div class="card__title">ИСдо-##</div>
        <div class="card__list">
            <div class="card__educator">Препод. 1</div>
            <div class="card__educator">Препод. 2</div>
            <div class="card__educator">Препод. 3</div>
        </div>
        <a class="btn btn-neutral" href="./edit">Изменить</a>
    </div>
</div>
@endsection
