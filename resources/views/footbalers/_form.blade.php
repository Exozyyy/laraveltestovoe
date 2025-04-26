
<form action="{{ isset($footbaler) ? route('footbalers.update', $footbaler->id) : route('footbalers.store') }}" method="POST">
    @csrf
    @if(isset($footbaler)) 
        @method('PUT') 
    @endif

    <label for="first_name">Имя</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $footbaler->first_name ?? '') }}" required>
    <br>

    <label for="last_name">Фамилия</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $footbaler->last_name ?? '') }}" required>
    <br>

    <label for="gender">Пол</label>
    <select name="gender" id="gender" required>
        <option value="Мужской" {{ old('gender', $footbaler->gender ?? '') == 'Мужской' ? 'selected' : '' }}>Мужской</option>
        <option value="Женский" {{ old('gender', $footbaler->gender ?? '') == 'Женский' ? 'selected' : '' }}>Женский</option>
    </select>
    <br>

    <label for="birth_date">Дата рождения</label>
    <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date', $footbaler->birth_date ?? '') }}" required>
    <br>

    <label for="team_id">Команда:</label>
    <select name="team_id" id="team_id">
        <option value="">Выбрать команду</option>
        @foreach($teams as $team)
            <option value="{{ $team->id }}" {{ old('team_id', $footbaler->team_id ?? '') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
        @endforeach
    </select>

    <br>
    <label for="new_team">Добавить новую команду</label>
    <input type="text" name="new_team" id="new_team" value="{{ old('new_team') }}" placeholder="название новой команды">
    <br>

    <label for="country">Страна</label>
    <select name="country" id="country" required>
        <option value="Россия" {{ old('country', $footbaler->country ?? '') == 'Россия' ? 'selected' : '' }}>Россия</option>
        <option value="США" {{ old('country', $footbaler->country ?? '') == 'США' ? 'selected' : '' }}>США</option>
        <option value="Италия" {{ old('country', $footbaler->country ?? '') == 'Италия' ? 'selected' : '' }}>Италия</option>
    </select>
    <br>

    <button type="submit">{{ isset($footbaler) ? 'Save Changes' : 'Добавить' }}</button>
</form>
