{{--<!DOCTYPE html>--}}
{{--<html lang="{{ config('app.locale') }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.title small {--}}
                {{--font-size: 60px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">ログイン</a>--}}
                        {{--<a href="{{ url('/register') }}">登録</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}
            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--{!! trans('titles.app') !!}<br />--}}
                    {{--<small>--}}
                        {{--{{ trans('titles.app2', ['version' => config('settings.app_project_version')]) }}--}}
                    {{--</small>--}}
                {{--</div>--}}
                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}


        <!doctype html>
<html lang="en">

{{--<head>--}}
{{--<!-- Required meta tags -->--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--<!-- Bootstrap CSS -->--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"--}}
{{--crossorigin="anonymous">--}}

{{--<!-- goole fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Sans+JP" rel="stylesheet">--}}

{{--<!-- Font awesome -->--}}
{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">--}}

{{--<title>近もく会 | Home</title>--}}
{{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('/css/app.css')}}">--}}

{{--<!-- javascript -->--}}
{{--<script type="text/javascript" src="{{asset('/js/footerFixed.js')}}"></script>--}}


{{--追加--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--<script>--}}
{{--window.Laravel = {!! json_encode([--}}
{{--'csrfToken' => csrf_token(),--}}
{{--]) !!};--}}
{{--</script>--}}

{{--@if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')--}}
{{--<link rel="stylesheet" type="text/css" href="{{ $theme->link }}">--}}
{{--@endif--}}

{{--@yield('head')--}}
{{--</head>--}}
@include('partials.head-lesson')

{{--追加--}}
{{--@section('template_fastload_css')--}}
{{--@endsection--}}

<body>


<!-- header -->
{{--@include('partials.nav-lesson')--}}
@include('partials.nav-lesson')
<!-- header -->

<!-- main-content -->
<main>
    <div class="container">

        <!-- title -->
        <div class="title-text">
            <h1>Product</h2>
                <p>
                    学べるコンテンツはこちらです
                </p>
        </div>
        <!-- title -->

        <!-- contents----------------------------------- -->

        <div class="product_box box-shadow-blue">
            <div class="row">
                <div class="col-md-4 product_img">
                    <a href="">
                        <span></span>
                    </a>
                </div>
                <div class="col-md-8 product_item">
                    <h4>UXを学ぶ 基礎</h4>
                    <p>今回はデザイナーのポートフォリオサイトを作成します。まずデザインを作成する前にユーザー体験(UX)を設計します。ユーザーを想定し、実際にデザイン設計を行なってみましょう！</p>
                    <span><i class="far fa-clock"></i> 学習時間 3 時間</span>
                    <div class="primary_btn box-shadow-blue align-item">
                        <a href="lesson/teach-materlials/0/1">
                            さっそく始める！
                        </a>
                    </div>
                    <div class="primary_btn second box-shadow-blue align-item">
                        <a href="lesson/index3">
                            教材を確認する
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- contents----------------------------------- -->
    </div>
</main>
<!-- main-content -->


<!-- footer -->
<footer id="footer">

    <div class="footer-right">

        <a href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>

    </div>

    <div class="footer-left">

        <div class="footer-links">
            <a href="#">近もく会</a>
            <p>異なる"言語"で、共に作る"空想"</p>
            <a href="privacypolicy">プライバシーポリシー</a>
            <p class="mt-2">近もく会 &copy; 2018</p>
        </div>

    </div>

</footer>
<!-- footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
{{--</body>--}}

{{--</html>--}}
{{--@endsection--}}
