<h1>Edit Player</h1>

<form method="POST" action="/players/{{ $player->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $player->name }}"><br>
    <input type="number" name="age" value="{{ $player->age }}"><br>
    <input type="text" name="position" value="{{ $player->position }}"><br>

    <select name="team_id">
        @foreach($teams as $team)
            <option value="{{ $team->id }}" 
                {{ $team->id == $player->team_id ? 'selected' : '' }}>
                {{ $team->name }}
            </option>
        @endforeach
    </select><br>

    <button type="submit">Update Player</button>
</form>