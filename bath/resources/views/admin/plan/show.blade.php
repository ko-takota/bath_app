<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プラン詳細</title>
</head>
<body>
    <h1>プラン詳細</h1>
    <p>プラン名：{{$plan->name}}</p>
    <p>月額料金：{{$plan->price}}</p>
    <p>プラン詳細：{{$plan->contents}}</p>
    <a href="/admin/plan/{{$plan->id}}/edit">編集</a>
    <a href="/admin/plan">戻る</a>
</body>
</html>
