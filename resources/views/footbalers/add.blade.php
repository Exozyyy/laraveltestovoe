<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Footballer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Add New Footballer</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('footbalers.store') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Мужской">Мужской</option>
            <option value="Женский">Женский</option>
        </select>
        <br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" name="birth_date" id="birth_date" required>
        <br>

        <label for="team_id">Team:</label>
        <select name="team_id" id="team_id">
            <option value="">Select Team</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <br>

        <!-- Добавление новой команды, если не выбрана существующая -->
        <label for="new_team">Or add new team:</label>
        <input type="text" name="new_team" id="new_team" placeholder="Enter new team name">
        <br>

        <label for="country">Country:</label>
        <select name="country" id="country" required>
            <option value="Россия">Россия</option>
            <option value="США">США</option>
            <option value="Италия">Италия</option>
        </select>
        <br>

        <button type="submit">Add Footballer</button>
    </form>

    <a href="{{ route('footbalers.index') }}">Back to Footballers List</a>
</body>
</html>
