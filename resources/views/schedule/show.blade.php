@extends ('layout.main')
@section ('content')
<h1>Security Guard Schedules</h1>
<h3>{{ $guardName }}</h3>
@if (count($guardSchedules))
    <div class="" style="overflow-x: scroll; min-height: 100px">
        @foreach ($guardSchedules as $guardSchedule)
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th colspan="{{ count($dailyTimeFrames) }}">
                            {{ $guardSchedule['day'] }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($dailyTimeFrames as $timeFrame)
                            <td>{{ $timeFrame }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($guardSchedule['schedules'] as $schedule)
                            {{-- Color the time frame if it is between the guard schedule --}}
                            <td @if ($schedule === true) style="background-color: {{ $colorIndicator }}; height: 35px" @endif>
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
    <h4>Stationed at: {{$location->name}}</h4>
@else
    <a class="text-danger">No Schedule Available!</a>
@endif
@endsection
