<!DOCTYPE html>
<html>
<head>
    <title>NBA Teams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-4">
    <h1 class="text-center mb-4">NBA Teams</h1>

    <div class="row">
        @foreach($teams as $team)
            <div class="col-md-4 mb-3">
                <div class="card bg-secondary text-white p-3">
                    <h4>{{ $team->name }}</h4>
                    <p>{{ $team->city }}</p>

                    @foreach($team->players as $player)
                        <p>
                            {{ $player->name }} ({{ $player->position }})
                            <a href="/players/{{ $player->id }}/edit" class="btn btn-sm btn-warning">Edit</a>

                            <form action="/players/{{ $player->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </p>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>