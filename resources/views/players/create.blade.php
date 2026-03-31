<!DOCTYPE html>
<html>
<head>
    <title>Basketball App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-4">

<h2>Add Player</h2>

<form method="POST" action="/players">
    @csrf

    <input name="name" class="form-control mb-2" placeholder="Name">
    <input name="age" type="number" class="form-control mb-2" placeholder="Age">
    <input name="position" class="form-control mb-2" placeholder="Position">

    <select name="team_id" class="form-control mb-2">
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
    </select>

    <button class="btn btn-success">Add Player</button>
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

</div>
</body>
</html>