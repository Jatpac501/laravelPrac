@extends('layout')
@section('btn')
    <a class="btn btn-add" href="/group/create">Добавить группу</a>
@endsection
@section('main')
<div class="main">
    <div class="card">
        <div class="card__title">1 курс</div>
        <div class="card__links">
            <a href="/group/ИСдо-11/" class="card__link">ИСдо-11</a>
            <a href="/group/ИСдо-12/" class="card__link">ИСдо-12</a>
            <a href="/group/ИСдо-13/" class="card__link">ИСдо-13</a>
            <a href="/group/ИСдо-14/" class="card__link">ИСдо-14</a>
            <a href="/group/ИСдо-15/" class="card__link">ИСдо-15</a>
            <a href="/group/ИСдо-16/" class="card__link">ИСдо-16</a>
            <a href="/group/ИСдо-17/" class="card__link">ИСдо-17</a>
            <a href="/group/ИСдо-18/" class="card__link">ИСдо-18</a>
        </div>
    </div>
    <div class="card">
        <div class="card__title">2 курс</div>
        <div class="card__links">
            <a href="/group/ИСдо-21/" class="card__link">ИСдо-21</a>
            <a href="/group/ИСдо-22/" class="card__link">ИСдо-22</a>
            <a href="/group/ИСдо-23/" class="card__link">ИСдо-23</a>
            <a href="/group/ИСдо-24/" class="card__link">ИСдо-24</a>
            <a href="/group/ИСдо-25/" class="card__link">ИСдо-25</a>
        </div>
    </div>
    <div class="card">
        <div class="card__title">3 курс</div>
        <div class="card__links">
            @foreach ($data as $group)
            <a href="/group/{{ $group->name }}/" class="card__link">{{ $group->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="card__title">4 курс</div>
        <div class="card__links">
            <a href="/group/ИСдо-41/" class="card__link">ИСдо-41</a>
            <a href="/group/ИСдо-42/" class="card__link">ИСдо-42</a>
            <a href="/group/ИСдо-43/" class="card__link">ИСдо-43</a>
        </div>
    </div>
    <div class="card">
        <div class="card__title">5 курс</div>
        <div class="card__links">
        </div>
    </div>
</div>
@endsection
