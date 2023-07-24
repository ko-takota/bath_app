<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集</title>
</head>
<body>
    <h1>プラン編集</h1>
    <form action="/admin/plan/{{$plan->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <p>プラン名：<input type="text" name="name" value="{{$plan->name}}" cols="40"></p>
        <p>月額料金：<input type="integer" name="price" value="{{$plan->price}}" rows="4" cols="40"></p>
        <p><input type="submit" value="更新"></p>
    </form>
    <a href="/admin/plan/{{$plan->id}}">戻る</a>
</body>
</html>
