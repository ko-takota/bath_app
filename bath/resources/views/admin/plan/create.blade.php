<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作成</title>
</head>
<body>
    <h1>プラン作成</h1>
    <form action="{{route('admin.plan.store')}}" method="POST">
        {{ csrf_field() }}
        <p>プラン名： <input type="text" name="name"></p>
        <p>月額料金： <input type="numeric" name="price" rows="4" cols="40">(半角数字)</p>
        <p>プラン詳細： <textarea type="text" name="contents"></textarea></p>
        <p><input type="submit" value="作成"></p>
    </form>
    <a href="/admin/plan">一覧へ戻る</a>
</body>
</html>
