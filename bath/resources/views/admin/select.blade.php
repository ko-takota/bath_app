<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>施設選択</title>
</head>
<body>
    <h1>施設選択</h1>
    <form action="{{ route('admin.bath.select.save') }}" method="post">
        @csrf
        <label for="bath">施設を選択:</label>
        <select name="bath_id" id="bath">
            @foreach($baths as $bath)
                <option value="{{ $bath->id }}">{{ $bath->name }}</option>
            @endforeach
        </select>
        <button type="submit">選択</button>
    </form>
</body>
</html>
