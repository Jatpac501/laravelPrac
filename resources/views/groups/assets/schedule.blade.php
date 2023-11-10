<div class="">
    <table class="container table table-striped">
        <thead>
            <tr>
                <th>Пары</th><th>1-я</th><th>2-я</th><th>3-я</th><th>4-я</th><th>5-я</th><th>6-я</th><th>7-я</th><th>8-я</th>
            </tr>
            <tr>
                <th>Время</th><th>08:30-09:50</th><th>10:00-11:20</th><th>11:30-12:50</th><th>13:30-14:50</th><th>15:00-16:20</th><th>16:30-17:50</th><th>18:00-19:20</th><th>19:30-20:50</th>
            </tr>
        </thead>
        <tbody>
            @foreach([1, 2, 3, 4, 5, 6, 7, 8] as $day)
                <tr>
                    <td>{{ $day }}</td>
                    @foreach([1, 2, 3, 4, 5, 6, 7, 8] as $couple)
                        @php
                            $schedule = App\Models\Schedule::where('dayWeek', $day)->where('couple', $couple)->first();
                        @endphp
                        <td>
                            @if ($schedule)
                                <div class="fw-bold">{{ $schedule->subject->name }}</div>
                                <div class="small">{{ $schedule->subject->teacher->surname }} {{ $schedule->subject->teacher->name }}</div>
                                <div class="">{{ $schedule->room->building }}-{{ $schedule->room->classroom }}</div>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
        </table>
    <table>
</div>
