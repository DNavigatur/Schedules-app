<h1>UNN Security Guard Schedules</h1>
<div style="overflow-x: scroll; min-height: 100px">
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th></th>
                @foreach ($dates as $key => $day)
                    <th colspan="{{ $dailyTimeFrameCount }}" class="text-center align-top">
                        {{ $day }}
                        {{-- Display an alert text if there is no guard scheduled --}}
                        @if (!$dateSecurityChecker[$key])
                            <p class="text-danger">UNN is Unsecured! Please assign a security guard!</p>
                        @endif
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                @foreach ($totalTimeFrames as $timeFrame)
                    <td>{{ $timeFrame }}</td>
                @endforeach
            </tr>
            @foreach ($guardSchedules as $guardSchedule)
                <tr>
                    <td style="white-space: nowrap">
                        <a href="{{ route('schedule-show', $guardSchedule['email']) }}">{{ $guardSchedule['name'] }}</a>
                    </td>
                    @foreach ($guardSchedule['schedules'] as $schedule)
                        {{-- Color the time frame if it is between the guard schedule --}}
                        <td @if ($schedule === true) style="background-color: {{ $guardSchedule['color_indicator'] }}" @endif></td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br>
<h1>Secured Locations</h1>
<table class="table table-bordered">
    <thead class="thead-light">
    <tr>
        <th>Guard Name</th>
        <th>Guard Location</th>
    </tr>
    </thead>
    <tbody>
@foreach ($onDutyGuards as [$guarded, $located])
    <tr>
        @if ($guarded)
            <td>Guard Name: {{ $guarded->name }}</td>
        @else
            <td>Guard not found.</td>
        @endif

        @if ($located)
            <td>Location Address: {{ $located->name }}</td>
        @else
            <td>Location not found.</td>
        @endif
</tr>
@endforeach
</tbody>

</table>