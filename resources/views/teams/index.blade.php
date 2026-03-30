<h1>Teams</h1>

@foreach($teams as $team)
    <h2>{{ $team->name }} ({{ $team->city }})</h2>

    @foreach($team->players as $player)
        <p>
            - {{ $player->name }} ({{ $player->position }})

            <a href="/players/{{ $player->id }}/edit">Edit</a>

            <form action="/players/{{ $player->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
    @endforeach

@endforeach