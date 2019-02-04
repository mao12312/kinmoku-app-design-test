<!DOCTYPE html>
<html>

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

    {{--<title>近もく会 | Products | Show</title>--}}

    {{--<!-- css -->--}}
    {{--<link rel="stylesheet" href="../../css/iziModal.css">--}}
    {{--<link rel="stylesheet" href="../../css/slick-theme.css">--}}
    {{--<link rel="stylesheet" href="../../css/slick.css">--}}
    {{--<link rel="stylesheet" href="../../css/style.css">--}}

    {{--<!-- jquery -->--}}
    {{--<script src="../../js/jquery-3.3.1.min.js"></script>--}}

    {{--<!-- javascript -->--}}
    {{--<script type="text/javascript" src="../../js/footerFixed.js"></script>--}}
    {{--<script src="../../js/iziModal.min.js"></script>--}}
    {{--<script src="../../js/slick.min.js"></script>--}}

{{--</head>--}}
@include('partials.head-lesson')

<body>


    <!-- header -->
    {{--<nav class="navbar navbar-expand-lg navbar-light fixed-top">--}}
        {{--<a class="logomark" href="#">--}}
            {{--<img src="../../img/kinmoku-logo.svg" alt="" class="logo">--}}
        {{--</a>--}}

        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"--}}
            {{--aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<i class="fa fa-ellipsis-h"></i>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse nav-list" id="navbarNav">--}}
            {{--<ul class="navbar-nav">--}}
                {{--<li class="nav-item text-uppercase">--}}
                    {{--<a class="nav-link" href="../../index.html">Home</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item text-uppercase active">--}}
                    {{--<a class="nav-link" href="../../index2.html">products</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item text-uppercase">--}}
                    {{--<a class="nav-link" href="../../user.html">--}}
                        {{--<img src="../../img/sample-icon.jpg" alt="">--}}
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
                                                フォント
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                <span>フォント</span> もデフォルトなものよりは少し変わったフォントや印象的なフォントを使用することでwebページの <span>印象</span>
                                                も変えることができます。
                                            </p>
                                        </div>
                                    </div>

                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド37.PNG" alt="" class="img-fluid slides-item1">
                                                    <div id="slides-modal1" class="iziModal" data-izimodal-title="フォント"
                                                        data-izimodal-subtitle="印象的なフォントを使用することでwebページの印象も変えることができます。">
                                                        <img src="/img/スライド37.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド37.PNG" alt="" class="img-fluid slides-item1">
                                                            </div>
                                                        </div>
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
                                                google fonts
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                今回は「 <a href="https://fonts.google.com/" target="_blank"><span>google
                                                        fonts</span></a>
                                                」というgoogleが提供している無料のフォントを使用していこうと思います。まずはgoogle fontsのページ[<a href="https://fonts.google.com/"
                                                    target="_blank"><span>https://fonts.google.com/</span></a> ]を開きます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド38.PNG" alt="" class="img-fluid slides-item2">
                                                    <div id="slides-modal2" class="iziModal" data-izimodal-title="google fonts"
                                                        data-izimodal-subtitle="googleが提供している無料のフォント">
                                                        <img src="/img/スライド38.PNG" alt="" class="img-fluid">
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
                                                    <div id="carousel-example1" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド38.PNG" alt="" class="img-fluid slides-item2">
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
                                                google fonts
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                これらの沢山のフォントの中から自由に好きなフォントを使っていきましょう。右上の🔍アイコンからフォントを検索します。今回は[ <a href="https://fonts.google.com/specimen/B612+Mono"
                                                    target="_blank"><span>B612
                                                        Mono</span></a> ]というフォントを利用していこうと思います。好きなフォントを選んでいただいてもかまいません。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド39.PNG" alt="" class="img-fluid slides-item3">
                                                    <div id="slides-modal3" class="iziModal" data-izimodal-title="B612 Mono">
                                                        <img src="/img/スライド39.PNG" alt="" class="img-fluid">
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
                                                    <div id="carousel-example2" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド39.PNG" alt="" class="img-fluid slides-item3">
                                                            </div>
                                                        </div>
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
                                                select this font
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                好きなフォントの詳細ページを開き、右上の[ <span>+ select this font</span> ]をクリックすると下に[
                                                <span>1 families selected</span> ]というモーダルが表示されます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド40.PNG" alt="" class="img-fluid slides-item4">
                                                    <div id="slides-modal4" class="iziModal" data-izimodal-title="select this font">
                                                        <img src="/img/スライド40.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド41.PNG" alt="" class="img-fluid slides-item5">
                                                    <div id="slides-modal5" class="iziModal" data-izimodal-title="families selected">
                                                        <img src="/img/スライド41.PNG" alt="" class="img-fluid">
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
                                                    <div id="carousel-example3" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example3" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example3" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド40.PNG" alt="" class="img-fluid slides-item4">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド41.PNG" alt="" class="img-fluid slides-item5">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example3" role="button"
                                                            data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example3" role="button"
                                                            data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
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
                                                フォントを使う準備
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                それではこのフォントを使う準備をしていきましょう。[ <span>1 families selected</span>
                                                ]をクリックし、[STANDARD]の <span>linkタグ</span> をファイルのheaderタグの中に入れます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド41.PNG" alt="" class="img-fluid slides-item6">
                                                    <div id="slides-modal6" class="iziModal" data-izimodal-title="フォントを使う準備">
                                                        <img src="/img/スライド41.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド42.PNG" alt="" class="img-fluid slides-item7">
                                                    <div id="slides-modal7" class="iziModal" data-izimodal-title="1 families selected"
                                                        data-izimodal-subtitle="[STANDARD]のlinkタグをファイルのheaderタグの中に入れます。">
                                                        <img src="/img/スライド42.PNG" alt="" class="img-fluid">
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
                                                    <div id="carousel-example4" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example4" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example4" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド41.PNG" alt="" class="img-fluid slides-item6">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド42.PNG" alt="" class="img-fluid slides-item7">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example4" role="button"
                                                            data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example4" role="button"
                                                            data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide-materials-carousel -->
                                </div>
                                <!-- -------5------- -->


                                <!-- -------6------- -->
                                <div>
                                    <div class="row">
                                        <div class="col-md-5 slides-title">
                                            <h2>
                                                フォントを使う準備
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                先ほどと同じように <span>font-famiy</span>
                                                プロパティをcssのbodyに書き込みましょう。あなたの選んだフォントに変更されていたら成功です！
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-4">
                                                    <img src="/img/スライド43.PNG" alt="" class="img-fluid slides-item8">
                                                    <div id="slides-modal8" class="iziModal" data-izimodal-title="font-famiy">
                                                        <img src="/img/スライド43.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="/img/スライド44.PNG" alt="" class="img-fluid slides-item9">
                                                    <div id="slides-modal9" class="iziModal" data-izimodal-title="font-famiy">
                                                        <img src="/img/スライド44.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="/img/スライド45.PNG" alt="" class="img-fluid slides-item10">
                                                    <div id="slides-modal10" class="iziModal" data-izimodal-title="font-famiy">
                                                        <img src="/img/スライド45.PNG" alt="" class="img-fluid">
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
                                                    <div id="carousel-example5" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example5" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example5" data-slide-to="1"></li>
                                                            <li data-target="#carousel-example5" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド43.PNG" alt="" class="img-fluid slides-item8">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド44.PNG" alt="" class="img-fluid slides-item9">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド45.PNG" alt="" class="img-fluid slides-item10">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example5" role="button"
                                                            data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example5" role="button"
                                                            data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide-materials-carousel -->
                                </div>
                                <!-- -------6------- -->


                                <!-- -------7------- -->
                                <div>
                                    <h3>どんどんいきましょう！</h3>
                                    <a class="btn cont_btn_mas_dets" data-toggle="modal" data-target="#basicExampleModal">
                                        Let's Go!
                                    </a>
                                </div>
                                <!-- -------7------- -->
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
                        <h5 class="modal-title" id="basicExampleModal">フォント</h5>
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
                                フォントは文字に印象をつけます。あなたのwebページの印象にあった適切なフォントを選びましょう
                            </p>
                        </div>
                        <img src="{{asset('/img/popup2.jpeg')}}" class="img-fluid" alt="">
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                        <a href="../1/6" class="btn cont_btn_mas_dets_second">次に進む</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>