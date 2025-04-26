<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footballers List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Footballers List</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Team</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($footbalers as $footbaler)
                <tr>
                    <td>{{ $footbaler->first_name }}</td>
                    <td>{{ $footbaler->last_name }}</td>
                    <td>{{ $footbaler->gender }}</td>
                    <td>{{ $footbaler->birth_date }}</td>
                    <td>{{ $footbaler->team->name }}</td>
                    <td>{{ $footbaler->country }}</td>
                    <td>
                        <a href="{{ route('footbalers.edit', $footbaler->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('footbalers.create') }}">Add New Footballer</a>
</body>
</html>
