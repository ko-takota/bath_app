@auth
<form action="{{ route('admin.bath.select.save') }}" method="post">
    @csrf
    <label for="bath">施設を選択:</label>
    <select name="bath_id" id="bath">
        @foreach(Auth::user()->baths as $bath)
            <option value="{{ $bath->id }}">{{ $bath->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="bg-yellow-400 rounded-lg">選択する</button>
</form>
@endauth

