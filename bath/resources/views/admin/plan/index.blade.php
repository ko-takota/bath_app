<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>プラン一覧</title>
</head>
<body>
    <h1>プラン一覧</h1>
    <p><a href="/admin/plan/create">プラン作成</a></p>
    <form method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
        @foreach($plans as $plan)
                <p><a href="/admin/plan/{{$plan->id}}">プラン名：{{$plan->name}}：{{$plan->price}}円</a><br/>
                <input type="submit" value="削除" formaction="/admin/plan/{{$plan->id}}"></p>
        @endforeach
    </form>
</body>
</html>
