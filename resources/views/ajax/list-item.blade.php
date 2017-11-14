@forelse ($races as $race)
    <li data-action="check" data-id="{{ $race->id }}" data-time="{{ Carbon\Carbon::parse($race->race_start_time)->format('h:i:s') }}">
        <h4>
            <a href="{{ route('race', $race->id) }}">R{{ $race->race_no }} / {{ $race->meeting->location->name }}</a>
        </h4>
        <p>Race Type: {{ $race->meeting->type->name }}</p>
        <p class="text-muted">Race Starts: {{ Carbon\Carbon::parse($race->race_start_time)->format('h:i:s') }}</p>
        <p class="text-muted">Bets Close: {{ Carbon\Carbon::parse($race->bet_closing_time)->format('h:i:s') }}</p>
    </li>
@empty
    <li data-action="refresh" data-id="-">
        <h4>
            No Race Data Available:
        </h4>
        <p>Data last checked: {{ Carbon\Carbon::now()->format('h:i:s') }}</p>    
    </li>
@endforelse
