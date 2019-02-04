<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <!-- goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Noto+Sans+JP" rel="stylesheet">

    <!-- Font awesome -->
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>近もく会 | Products | Show</title>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/iziModal.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    {{--追加CSS--}}
{{--    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">--}}

    <!-- jquery -->
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>

    <!-- javascript -->
    <script type="text/javascript" src="{{asset('/js/footerFixed.js')}}"></script>
    <script src="{{asset('/js/iziModal.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>

    {{--@if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ $theme->link }}">--}}
    {{--@endif--}}

    <style type="text/css">
        @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
            background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
            background-size: auto 100%;
        }
        @endif

    </style>

</head>