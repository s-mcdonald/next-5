@extends('layout.app')

@section('content')
    <div class="container">
      @component('components.banner')
      @endcomponent
      <div id="page" style='display:hidden' data-value="race"></div>
      <div class="row">
      </div>
      <div id="race-div" class="row" data-time="{{ Carbon\Carbon::parse($race->race_start_time)->format('h:i:s') }}">
        <div class="col-lg-12">
            {!!$message!!}
        </div>
        <div class="col-lg-6">
            <h4>
              R{{ $race->race_no }} / {{ $race->meeting->location->name }}
            </h4>
            <p>Race Type: {{ $race->meeting->type->name }}</p>
            <p class="text-muted">Race Starts: {{ Carbon\Carbon::parse($race->race_start_time)->format('h:i:s A') }}</p>
            <p class="text-muted">Bets Close: {{ Carbon\Carbon::parse($race->bet_closing_time)->format('h:i:s A') }}</p>
        </div>
        <div class="col-lg-6">
            <h4>
              Competitors (P)
            </h4>
            @foreach ($race->competitors->sortBy('name') as $competitor)
              <p><a href="#">{{ $competitor->name }} ({{ $competitor->pivot->position }})</a></p>
            @endforeach
        </div>
      </div>
      @component('components.page-footer')
      @endcomponent
    </div>
@endsection

@section('page-scripts')
@endsection
