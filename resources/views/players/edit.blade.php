<!DOCTYPE html>
<html>
<head>
    <title>Edit Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-dark bg-black p-3">
    <div class="container">
        <a class="navbar-brand" href="/teams">Home</a>
    </div>
</nav>

<div class="container mt-5">

    <h2 class="text-center mb-4">Edit Player</h2>

    <div class="card bg-secondary p-4">
        <form method="POST" action="/players/{{ $player->id }}">
            @csrf
            @method('PUT')

            <input name="name" class="form-control mb-3" value="{{ $player->name }}">

            <input name="age" type="number" class="form-control mb-3" value="{{ $player->age }}">

            <input name="position" class="form-control mb-3" value="{{ $player->position }}">

            <select name="team_id" class="form-control mb-3">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $player->team_id == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-warning w-100">Update Player</button>
        </form>
    </div>

</div>

</body>
</html>