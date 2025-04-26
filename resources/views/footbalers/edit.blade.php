<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Footballer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Edit Footballer</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('footbalers.update', $footbaler->id) }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="{{ $footbaler->first_name }}" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="{{ $footbaler->last_name }}" required>
        <br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Мужской" {{ $footbaler->gender == 'Мужской' ? 'selected' : '' }}>Мужской</option>
            <option value="Женский" {{ $footbaler->gender == 'Женский' ? 'selected' : '' }}>Женский</option>
        </select>
        <br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" name="birth_date" id="birth_date" value="{{ $footbaler->birth_date }}" required>
        <br>

        <label for="team_id">Team:</label>
        <select name="team_id" id="team_id" required>
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $footbaler->team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
            @endforeach
        </select>
        <br>

        <label for="new_team">Or add new team:</label>
        <input type="text" name="new_team" id="new_team" placeholder="Enter new team name">
        <br>

        <label for="country">Country:</label>
        <select name="country" id="country" required>
            <option value="Россия" {{ $footbaler->country == 'Россия' ? 'selected' : '' }}>Россия</option>
            <option value="США" {{ $footbaler->country == 'США' ? 'selected' : '' }}>США</option>
            <option value="Италия" {{ $footbaler->country == 'Италия' ? 'selected' : '' }}>Италия</option>
        </select>
        <br>

        <button type="submit">Update Footballer</button>
    </form>

    <a href="{{ route('footbalers.index') }}">Back to Footballers List</a>
</body>
</html>
