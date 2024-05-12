<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($memos as $memo)
        <p>ID:{{ $memo['id'] }} {{ $memo['memo'] }}</p>
    @endforeach

    <form action="/" method="post">
        @csrf
        <p>メモを入力<input type="text" name="content"></p>
        <p><input type="submit" value="送信"></p>
    </form>

    <form action="/destroy" method="post">
        @csrf
        <p>削除するIDを入力<input type="id" name="id"></p>
        <p><input type="submit" value="送信"></p>
    </form>
</body>
</html>
