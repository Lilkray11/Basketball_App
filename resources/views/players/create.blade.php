<h1>Add Player</h1>

<form method="POST" action="/players">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    <input type="number" name="age" placeholder="Age"><br>
    <input type="text" name="position" placeholder="Position"><br>

    <select name="team_id">
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
    </select><br>

    <button type="submit">Add Player</button>
</form>