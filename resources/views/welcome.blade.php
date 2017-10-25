<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>技能节报名</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link rel="stylesheet" href="{{ url('/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ url('/fonts/font-awesome-4.2.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/demo.css') }}">
        <link rel="stylesheet" href="{{ url('/css/sweetalert.css') }}">
        <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="van-notice-bar van-notice-bar--withicon" onclick="window.location.href='/rule';"><div class="van-notice-bar__content-wrap"><div class="van-notice-bar__content" style="transform: translate3d(0px, 0px, 0px); transition-delay: 1s; transition-duration: 0s; transition-property: all;">
                        "铱王星杯"分布式微服务开发竞赛规则查看
                    </div></div><i class="van-notice-bar__icon van-icon van-icon-arrow"></i></div>
            <header>
                <p class="header-title">"铱王星杯"竞赛报名</p>
                <p class="CreateBy">极客工作室</p>
            </header>
            <example></example>
        </div>
    </body>

    <script src="{{ mix('/js/app.js') }}"></script>
</html>
