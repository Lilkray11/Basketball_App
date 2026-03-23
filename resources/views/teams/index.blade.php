<h1>Teams</h1>

@foreach($teams as $team)
    <h2>{{ $team->name }} ({{ $team->city }})</h2>

    @foreach($team->players as $player)
        <p>- {{ $player->name }} ({{ $player->position }})</p>
    @endforeach

@endforeach