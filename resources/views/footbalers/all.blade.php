@extends('layouts.index')

@section('content')
    @if($page == 'list')
        <h2>Список футболистов</h2>
        <a href="{{ route('footbalers.create') }}">Добавить нового футболиста</a>

        <table>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Пол</th>
                    <th>Команда</th>
                    <th>Страна</th>
                    <th>Дата рождения</th>
                </tr>
            </thead>
            <tbody>
                @foreach($footbalers as $footbaler)
                    <tr>
                        <td>{{ $footbaler->first_name }}</td>
                        <td>{{ $footbaler->last_name }}</td>
                        <td>{{ $footbaler->gender}}</td>
                        <td>{{ $footbaler->team->name }}</td>
                        <td>{{ $footbaler->country }}</td>
                        <td>{{ \Carbon\Carbon::parse($footbaler->birth_date)->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('footbalers.edit', $footbaler->id) }}">Отредактировать</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @elseif($page == 'create' || $page == 'edit')
        <h2>{{ $page == 'create' ? 'Добавить нового футболиста' : 'Отредактировать' }}</h2>
        @include('footbalers._form', ['teams' => $teams, 'footbaler' => $footbaler ?? null])
    @endif
@endsection
