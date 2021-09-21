<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>惑星情報登録</title>
</head>
<body>
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
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
        @csrf
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label for="description">名前(英語)</label>
            <input type="text" name="english" value="{{ old('english') }}">
        </p>
        <p>
            <label for="price">半径</label>
            <input type="number" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="seller">重量</label>
            <input type="text" name="weight" value="{{ old('ewight') }}">
        </p>

        <input type="submit" value="登録">
    </body>
</body>
</html>