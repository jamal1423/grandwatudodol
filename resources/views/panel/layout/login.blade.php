<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app_name', 'Dashboard GWD') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('panel/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="auth-layout-wrap" style="background-image: url(images/photo-wide-4.jpg)">
        @yield('content')
    </div>
</body>
</html>