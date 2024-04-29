<h1>List of Security</h1>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Color Indicator</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guards as $guard)
            <tr>
                <td>
                    <a href="{{ route('schedule-show', $guard['id']) }}">{{ $guard['name'] }}</a>
                </td>
                <td>{{ $guard['email']}}</td>
                <td style="background-color: {{ $guard['color_indicator'] }}"></td>
            </tr>
        @endforeach
    </tbody>
</table>
