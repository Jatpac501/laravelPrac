@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('students.update', [$student->id]) }}" class="mb-3" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <input class="form-control form-control-lg mb-3" placeholder="Имя" type="text" name="name" required value="{{ $student->name }}">
                    <input class="form-control mb-3" placeholder="Фамилия" type="text" name="surname" required value="{{ $student->surname }}">
                    <input class="form-control mb-3" placeholder="Телефон" type="tel" name="phone" pattern="\+7\d{10}" required value="{{ $student->phone }}">
                    <select class="form-select mb-3" placeholder="Группа" name="group_id">
                        <option>Группа</option>
                        @foreach ($groups as $group)
                            <option value="{{$group->id}}" @if ($group->id == $student->group_id) selected @endif>{{$group->name}}</option>
                        @endforeach
                    </select>
                    <div class="form-check mb-3">
                        <input type="hidden" name="headOfGroup" id="headOfGroup" value="{{$student->headOfGroup}}">
                        <input class="form-check-input" type="checkbox" id="headOfGroupToggle"  @if ($student->headOfGroup) checked @endif>
                        <label class="form-check-label">Староста?</label>
                    </div>
                    <button class="btn btn-success" type="submit">Изменить</button>
                </form>
                <form method="POST" action="{{ route('students.destroy', [$student->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Удалить</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('#headOfGroupToggle').addEventListener('click', () => {
            if (document.querySelector('#headOfGroupToggle').checked) {
                document.querySelector('#headOfGroup').value = 1;
            } else {
                document.querySelector('#headOfGroup').value = 0;
            }
        });
    </script>
@endsection
