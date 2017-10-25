<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>队名</th>
        <th>负责人</th>
        <th>队员</th>
    </tr>
    </thead>
    <tbody>
        @foreach($enrol as $items)
            <tr>
            <td>{{$items->name}}</td>
            <td><p style="color: red;">姓名:{{json_decode($items->main,true)['name']}}</p>(班级:{{json_decode($items->main,true)['class']}}学号:{{json_decode($items->main,true)['code']}}手机号:{{json_decode($items->main,true)['phone']}}qq:{{json_decode($items->main,true)['qq']}})</td>
            <td>
                @foreach(json_decode($items->user,true) as $item)
                    <p style="color: red;">姓名:{{$item['name']}}</p>
                    班级{{ $item['class'] }}
                    学号{{ $item['code'] }}
                    手机号{{ $item['phone'] }}
                    qq{{ $item['qq'] }}
                @endforeach
            </td>
            @if($items->state == 0)
                <td>当前评分状态：未评分</td>
                    <td>分数：未评分</td>
            @else
                <td>当前评分状态：已评分</td>
                    <td>分数：{{ $items->score }}</td>
            @endif
            </tr>
        @endforeach

    </tbody>
</table>

</body>
</html>