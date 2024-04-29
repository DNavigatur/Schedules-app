<h1>List of Locations</h1>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @if(count($locations) < 1)
            <tr><td>No Locations yet</td></tr>
        @else
            @foreach ($locations as $location)
                <tr>
                    <td>
                    {{ $location['name'] }}
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
