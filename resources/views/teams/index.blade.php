<!DOCTYPE html>
<html>
<head>
    <title>NBA Teams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-dark bg-black p-3">
    <div class="container">
        <a class="navbar-brand" href="/teams">Home</a>

        <div>
            <a href="/players/create" class="btn btn-success">Add Player</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <h1 class="text-center mb-3">NBA Teams</h1>

    <!-- ADMIN NOTICE -->
    <p class="text-warning text-center">
        Admin functionality (edit/delete) is enabled for demonstration purposes.
    </p>

    <!-- TEAMS -->
    <div class="row">
        @foreach($teams as $team)
            <div class="col-md-4 mb-3">
                <div class="card bg-secondary text-white p-3">

                    <h4>{{ $team->name }}</h4>
                    <p>{{ $team->city }}</p>

                    <!-- API DATA (ENHANCEMENT, NOT DUPLICATION) -->
                    @php
                        $apiMatch = collect($apiTeams)->firstWhere('strTeam', $team->name);
                    @endphp

                    @if($apiMatch)
                        <small>🏟 {{ $apiMatch['strStadium'] ?? 'N/A' }}</small><br>
                        <small>📍 {{ $apiMatch['strLocation'] ?? 'N/A' }}</small>
                        <hr>
                    @endif

                    <!-- PLAYERS -->
                    @foreach($team->players as $player)
                        <p>
                            {{ $player->name }} ({{ $player->position }})

                            @if(true)
                                <a href="/players/{{ $player->id }}/edit" class="btn btn-sm btn-warning">Edit</a>

                                <form action="/players/{{ $player->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            @endif
                        </p>
                    @endforeach

                </div>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>