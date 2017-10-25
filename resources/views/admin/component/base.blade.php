<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>技能节评分</title>
    <link rel="stylesheet" href="{{ url('/css/spectre.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/spectre-exp.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/spectre-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
    <style>
        @media (min-width: 768px){
            .container {
                width: 750px;
            }
        }
        @media (min-width: 992px){
            .container {
                width: 970px;
            }
        }
        @media (min-width: 1200px){
            .container {
                width: 1170px;
            }
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
<div id="adminApp" class="container">
    <header class="navbar" style="margin-top: 30px; margin-bottom: 30px;">
        {{--<section class="navbar-section">--}}
        {{--<a href="#" class="btn btn-link">Twitter</a>--}}
        {{--<a href="#" class="btn btn-link">GitHub</a>--}}
        {{--</section>--}}
        <section class="navbar-section">
            <a href="#" class="btn btn-link">后台管理</a>
            {{--<a href="#" class="btn btn-link">Examples</a>--}}
        </section>
    </header>

    <div class="columns">
        <div class="column col-2 col-xs-12">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ url('/admin/score') }}">项目评分</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/result') }}">评分结果</a>
                </li>
            </ul>
        </div>
        {{--style="background: #f8f9fa;">--}}
        <div class="column col-10 col-xs-12">
            <div class="empty">
                <div class="empty-icon">
                    <i class="icon icon-people"></i>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="{{ url('/js/vue.js') }}"></script>
<script src="{{ url('/js/axios.min.js') }}"></script>
<script>

    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
  ]) !!};

    axios.defaults.headers.common = {
        'X-CSRF-TOKEN': window.Laravel.csrfToken,
        'X-Requested-With': 'XMLHttpRequest'
    };

    var adminApp = new Vue({
        el: '#adminApp',
        data: {
            design: '',
            layout: '',
            code: '',
            func: '',
            show: '',
        },
        methods: {
            scoring: function (type) {
                axios({
                    method: 'post',
                    url: '/admin/' + type,
                    data: {
                        design: this.design,
                        layout: this.layout,
                        code: this.code,
                        func: this.func,
                        show: this.show,
                    }
                })
                    .then(function (response) {
                        if (response.data.code == 301) {
                            window.location.href = response.data.url
                        }
                        console.log('error --- ' + response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    })
</script>
</body>
</html>
