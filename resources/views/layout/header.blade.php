<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="/">Guard Scheduler</a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarColor01"
            aria-controls="navbarColor01"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            @if (request()->route()->named('schedule-show'))
            <li class="nav-item">Your Schedule</li>
            @else
            <li class="nav-item{{ request()->route()->named('schedule-manage') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('schedule-manage') }}">
                    Schedules <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item{{ request()->route()->named('guard-manage') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('guard-manage') }}">Guards</a>
            </li>
            <li class="nav-item{{ request()->route()->named('location-manage') ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('location-manage') }}">Locations</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
