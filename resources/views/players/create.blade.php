<!DOCTYPE html>
<html>
<head>
    <title>Add Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-dark bg-black p-3">
    <div class="container">
        <a class="navbar-brand" href="/teams">Home</a>
    </div>
</nav>

<div class="container mt-5">

    <h2 class="text-center mb-4">Add Player</h2>

    <div class="card bg-secondary p-4">
        <form method="POST" action="/players">
            @csrf

            <input name="name" class="form-control mb-3" placeholder="Player Name">

            <input name="age" type="number" class="form-control mb-3" placeholder="Age">

            <input name="position" class="form-control mb-3" placeholder="Position (e.g. PG, SG)">

            <select name="team_id" class="form-control mb-3">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>

            <button class="btn btn-success w-100">Add Player</button>
        </form>
    </div>

</div>

</body>
</html>