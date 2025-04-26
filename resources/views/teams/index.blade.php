<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Teams List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->country }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('teams.store') }}">Add New Team</a>
</body>
</html>
