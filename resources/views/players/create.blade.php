<h1>Add Player</h1>

<form id="playerForm">
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

<p id="message"></p>

<script>
document.getElementById('playerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('/players', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').innerText = "Player added successfully!";
    })
    .catch(error => {
        console.error(error);
    });
});
</script>