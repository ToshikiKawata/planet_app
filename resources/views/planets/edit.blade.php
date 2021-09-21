<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>w惑星情報編集</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name', $planet->name) }}">
        </p>
        <p>
            <label for="english">名前(英語)</label>
            <input type="text" name="english" value="{{ old('english', $planet->english) }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="text" name="weight" value="{{ old('value', $planet->weight) }}">
        </p>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>