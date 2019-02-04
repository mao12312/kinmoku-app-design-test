<!DOCTYPE html>
<html>

{{--<head>--}}
    {{--<!-- Required meta tags -->--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

    {{--<!-- Bootstrap CSS -->--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"--}}
          {{--integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"--}}
          {{--crossorigin="anonymous">--}}

    {{--<!-- goole fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Sans+JP" rel="stylesheet">--}}

    {{--<!-- Font awesome -->--}}
    {{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">--}}

    {{--<title>近もく会 | Products | Show</title>--}}

    {{--<!-- css -->--}}
    {{--<link rel="stylesheet" href="{{asset('/css/iziModal.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('/css/slick.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}

    {{--<!-- jquery -->--}}
    {{--<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>--}}

    {{--<!-- javascript -->--}}
    {{--<script type="text/javascript" src="{{asset('/js/footerFixed.js')}}"></script>--}}
    {{--<script src="{{asset('/js/iziModal.min.js')}}"></script>--}}
    {{--<script src="{{asset('/js/slick.min.js')}}"></script>--}}

{{--</head>--}}

@include('partials.head-lesson')


<body>


<!-- header -->
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top">--}}
    {{--<a class="logomark" href="#">--}}
        {{--<img src="{{asset('/images/kinmoku-logo.svg')}}" alt="" class="logo">--}}
    {{--</a>--}}

    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"--}}
            {{--aria-controls="navbarNav"--}}
            {{--aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<i class="fa fa-ellipsis-h"></i>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse nav-list" id="navbarNav">--}}
        {{--<ul class="navbar-nav">--}}
            {{--<li class="nav-item text-uppercase">--}}
                {{--<a class="nav-link" href="index">Home</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item text-uppercase active">--}}
                {{--<a class="nav-link" href="index2">products</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item text-uppercase">--}}
                {{--<a class="nav-link" href="user">--}}
                    {{--<img src="{{asset('/images/sample-icon.jpg')}}" alt="">--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
@include('partials.nav-lesson')
<!-- header -->


<!-- main -->
<main>


    <!-- slides -->
    <div class="slides">
        <div class="slides-container">
            <div class="slides-bg">
                <div class="slides-content">
                    <section>

                        <div class="slider">

                            <!-- -------1------- -->
                            <div>
                                <div class="row">
                                    <div class="col-md-5 slides-title">
                                        <h2>
                                            どんなweb pageか
                                        </h2>
                                    </div>
                                    <div class="col-md-7 slides-text">
                                        <p>
                                            これからあなたのwebページを作っていきましょう！今回のサンプルウェブサイトは<span>近もく会</span>というコミュニティーサイトです。レイアウトはとても基本的でいろいろなページで使われているデザインになっています。まずデザイン制作にあたって「<span>誰のための</span>」、「<span>どんな</span>」、「<span>なぜこんな</span>」デザインかを考えることから始めましょう。
                                        </p>
                                    </div>
                                </div>


                                <!-- slide-materials -->
                                <div class="slide-materials">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-sm-6">
                                                <img src="{{asset('/img/スライド1.PNG')}}" alt=""
                                                     class="img-fluid slides-item1">
                                                <div id="slides-modal1" class="iziModal"
                                                     data-izimodal-title="どんなweb pageか"
                                                     data-izimodal-subtitle="この構成はとても基本的なレイアウトです。">
                                                    <img src="{{asset('/img/スライド1.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{asset('/img/スライド2.PNG')}}" alt=""
                                                     class="img-fluid slides-item2">
                                                <div id="slides-modal2" class="iziModal"
                                                     data-izimodal-title="まずデザイン制作にあたって"
                                                     data-izimodal-subtitle="誰のための、どんな、なぜこんなデザインかを考えることが重要なポイントです">
                                                    <img src="{{asset('/img/スライド2.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials -->


                                <!-- slide-materials-carousel -->
                                <div class="slide-materials-carousel">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                     data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carouselExampleIndicators"
                                                            data-slide-to="1"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('/img/スライド1.PNG')}}" alt=""
                                                                 class="img-fluid slides-item1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('/img/スライド2.PNG')}}" alt=""
                                                                 class="img-fluid slides-item2">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                       role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                       role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials-carousel -->

                            </div>
                            <!-- -------1------- -->


                            <!-- -------2------- -->
                            <div>
                                <div class="row">
                                    <div class="col-md-5 slides-title">
                                        <h2>
                                            「誰のための」デザインか
                                        </h2>
                                    </div>
                                    <div class="col-md-7 slides-text">
                                        <p>
                                            ユーザーを想定することはとても重要です。大人向けや女性向けといったようにユーザーによってページの印象は大きく変わります。このLPのターゲットは
                                            <span>プログラミング</span> と <span>デザイン</span> にも興味のある <span>男子大学生</span>
                                            や若者向けです。こういったユーザーを想定することからwebページ制作は始まります。
                                        </p>
                                    </div>
                                </div>


                                <!-- slide-materials -->
                                <div class="slide-materials">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <img src="{{asset('/img/スライド3.PNG')}}" alt=""
                                                     class="img-fluid slides-item3">
                                                <div id="slides-modal3" class="iziModal"
                                                     data-izimodal-title="「誰のための」デザインか"
                                                     data-izimodal-subtitle="ユーザーを想定することはとても重要です。">
                                                    <img src="{{asset('/img/スライド3.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials -->


                                <!-- slide-materials-carousel -->
                                <div class="slide-materials-carousel">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                     data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('/img/スライド3.PNG')}}" alt=""
                                                                 class="img-fluid slides-item3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials-carousel -->
                            </div>
                            <!-- -------2------- -->


                            <!-- -------3------- -->
                            <div>
                                <div class="row">
                                    <div class="col-md-5 slides-title">
                                        <h2>
                                            「どんな」デザインか
                                        </h2>
                                    </div>
                                    <div class="col-md-7 slides-text">
                                        <p>
                                            このLPは全体的にオレンジ系でフォントは少し <span>SFチック</span>
                                            。ライオンの画像と途中の沢山の画像は少し遊び心があり、タイトルなどのフォントも太く、 <span>ポップ</span>
                                            さのあるものです。興味の湧くような画像をたくさん使うことも重要です。
                                        </p>
                                    </div>
                                </div>


                                <!-- slide-materials -->
                                <div class="slide-materials">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-sm-6">
                                                <img src="{{asset('/img/スライド4.PNG')}}" alt=""
                                                     class="img-fluid slides-item4">
                                                <div id="slides-modal4" class="iziModal"
                                                     data-izimodal-title="「どんな」デザインか"
                                                     data-izimodal-subtitle="どう印象付けるかも大事です。">
                                                    <img src="{{asset('/img/スライド4.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{asset('/img/スライド5.PNG')}}" alt=""
                                                     class="img-fluid slides-item5">
                                                <div id="slides-modal5" class="iziModal"
                                                     data-izimodal-title="「どんな」デザインか"
                                                     data-izimodal-subtitle="ライオンの画像と途中の沢山の画像は少し遊び心">
                                                    <img src="{{asset('/img/スライド5.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials -->


                                <!-- slide-materials-carousel -->
                                <div class="slide-materials-carousel">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#carousel-example" data-slide-to="1"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('/img/スライド4.PNG')}}" alt=""
                                                                 class="img-fluid slides-item4">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{asset('/img/スライド5.PNG')}}" alt=""
                                                                 class="img-fluid slides-item5">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carousel-example"
                                                       role="button"
                                                       data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carousel-example"
                                                       role="button"
                                                       data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                              aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials-carousel -->
                            </div>
                            <!-- -------3------- -->


                            <!-- -------4------- -->
                            <div>
                                <div class="row">
                                    <div class="col-md-5 slides-title">
                                        <h2>
                                            「なぜこんな」デザインか
                                        </h2>
                                    </div>
                                    <div class="col-md-7 slides-text">
                                        <p>
                                            フォーマルなLPでなくターゲットを考えた少し <span>子供心</span>
                                            が含まれているデザインです。その為少し子供っぽさも残しつつ、読みやすさを保つために <span>余白</span> を広くとりました。
                                        </p>
                                    </div>
                                </div>


                                <!-- slide-materials -->
                                <div class="slide-materials">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <img src="{{asset('/img/スライド6.PNG')}}" alt=""
                                                     class="img-fluid slides-item6">
                                                <div id="slides-modal6" class="iziModal"
                                                     data-izimodal-title="「なぜこんな」デザインか"
                                                     data-izimodal-subtitle="フォーマルなLPでなくターゲットを考えた少し子供心が含まれているデザインです。">
                                                    <img src="{{asset('/img/スライド6.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials -->


                                <!-- slide-materials-carousel -->
                                <div class="slide-materials-carousel">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                     data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('/img/スライド6.PNG')}}" alt=""
                                                                 class="img-fluid slides-item6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials-carousel -->
                            </div>
                            <!-- -------4------- -->


                            <!-- -------5------- -->
                            <div>
                                <div class="row">
                                    <div class="col-md-5 slides-title">
                                        <h2>
                                            アクセント
                                        </h2>
                                    </div>
                                    <div class="col-md-7 slides-text">
                                        <p>
                                            そしてページの内部にもホバーアクションのような　<span>アクセント</span>　を入れることが必要です。それから今回はpc画面のみのデザインです(レスポンシブにはなっていないのでご了承ください)。
                                        </p>
                                    </div>
                                </div>


                                <!-- slide-materials -->
                                <div class="slide-materials">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <img src="{{asset('/img/スライド7.PNG')}}" alt=""
                                                     class="img-fluid slides-item7">
                                                <div id="slides-modal7" class="iziModal" data-izimodal-title="アクセント"
                                                     data-izimodal-subtitle="ページの内部にもホバーアクションのようなアクセントを入れることが必要です">
                                                    <img src="{{asset('/img/スライド7.PNG')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials -->


                                <!-- slide-materials-carousel -->
                                <div class="slide-materials-carousel">
                                    <div class="slides-images">
                                        <div class="row justify-content-md-center">
                                            <div class="col-lg-6">
                                                <div id="carouselExampleIndicators" class="carousel slide"
                                                     data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{asset('/img/スライド7.PNG')}}" alt=""
                                                                 class="img-fluid slides-item7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slide-materials-carousel -->
                            </div>
                            <!-- -------5------- -->


                            <!-- -------6------- -->
                            {{--<div>--}}
                                {{--<h3>早速始めましょう！</h3>--}}
                                {{--<a class="btn cont_btn_mas_dets" href="../1/1">--}}
                                    {{--次にすすむ--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            <div>
                                <h3>早速始めましょう！</h3>
                                <a class="btn cont_btn_mas_dets" data-toggle="modal" data-target="#basicExampleModal">
                                    Let's Go!
                                </a>
                            </div>
                            <!-- -------6------- -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- slides -->

    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="basicExampleModal"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <!-- modal header content -->
                <div class="modal-header">
                    <h5 class="modal-title" id="basicExampleModal">どんなweb pageか</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal header content -->

                <!-- modal body content -->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            デザインを考えることを楽しんで、あなたのwebページを見るユーザーのことをよく考えてあなたのwebページを作っていきましょう！
                        </p>
                    </div>
                    <img src="{{asset('/img/popup1.jpeg')}}" class="img-fluid" alt="">
                </div>
                <!-- modal body content -->

                <!-- modal footer content -->
                <div class="modal-footer">
                    <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                    <a href="../1/1" class="btn cont_btn_mas_dets_second">次に進む</a>
                </div>
                <!-- modal footer content -->
            </div>
        </div>
    </div>
    <!-- Modal -->

</main>
<!-- main -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="{{asset('/js/main.js')}}"></script>

</body>

</html>