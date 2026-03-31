<h1>NBA Teams (API)</h1>

@foreach($teams as $team)
    <p>
        <strong>{{ $team['strTeam'] }}</strong><br>
        Stadium: {{ $team['strStadium'] ?? 'N/A' }}<br>
        Location: {{ $team['strLocation'] ?? 'N/A' }}
    </p>
@endforeach