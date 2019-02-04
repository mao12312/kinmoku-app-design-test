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
                                                左カラム
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                Colクラスは <span>col-lg-6</span> にし、構成もこのようにします。ファーストビューは <span>強弱</span>
                                                が重要で、文字の大きさだけでなく、色もこだわりましょう。Bodyタグのcolorが[#777]なのでh1タグを[#222]にしています。[#000]まで黒くしすぎないことも重要です。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド90.PNG" alt="" class="img-fluid slides-item1">
                                                    <div id="slides-modal1" class="iziModal" data-izimodal-title="左カラム"
                                                        data-izimodal-subtitle="ファーストビューは強弱が重要で、文字の大きさだけでなく、色もこだわりましょう。">
                                                        <img src="/img/スライド90.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド91.PNG" alt="" class="img-fluid slides-item2">
                                                    <div id="slides-modal2" class="iziModal" data-izimodal-title="左カラム"
                                                        data-izimodal-subtitle="[#000]まで黒くしすぎないことも重要です。">
                                                        <img src="/img/スライド91.PNG" alt="" class="img-fluid">
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
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド90.PNG" alt="" class="img-fluid slides-item1">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド91.PNG" alt="" class="img-fluid slides-item2">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                            role="button" data-slide="next">
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
                                <!-- -------1------- -->


                                <!-- -------2------- -->
                                <div>
                                    <div class="row">
                                        <div class="col-md-5 slides-title">
                                            <h2>
                                                色について
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                [#000]や[#fff]は　<span>強調色</span>　なので、そこまで暗くしてしまうと見た目がきつくなってしまうので[#222]程度までにしましょう。さらに
                                                <span>letter-spacing</span> を7pxにすることで他の文との差別が図ることができ、より目立たせることができます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド92.PNG" alt="" class="img-fluid slides-item3">
                                                    <div id="slides-modal3" class="iziModal" data-izimodal-title="色について"
                                                        data-izimodal-subtitle="[#000]や[#fff]は強調色なので、そこまで暗くしてしまうと見た目がきつくなってしまうので[#222]程度までにしましょう。">
                                                        <img src="/img/スライド92.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド92.PNG" alt="" class="img-fluid slides-item3">
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
                                                ボタンのデザインCSS
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                続いてボタンのデザインですが基本的にページを移動するだけやリンク移動のみならば <span>aタグ</span>
                                                で作った方がデザインは楽です。そしてpaddingもしっかり付け、ボタンの内側に <span>十分な余白</span> をつけましょう。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド93.PNG" alt="" class="img-fluid slides-item4">
                                                    <div id="slides-modal4" class="iziModal" data-izimodal-title="ボタンのデザイン"
                                                        data-izimodal-subtitle="基本的にページを移動するだけやリンク移動のみならばaタグで作った方がデザイン">
                                                        <img src="/img/スライド93.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド94.PNG" alt="" class="img-fluid slides-item5">
                                                    <div id="slides-modal5" class="iziModal" data-izimodal-title="ボタンのデザインCSS"
                                                        data-izimodal-subtitle="ボタンの内側に十分な余白をつけましょう。">
                                                        <img src="/img/スライド94.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド93.PNG" alt="" class="img-fluid slides-item4">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド94.PNG" alt="" class="img-fluid slides-item5">
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
                                <!-- -------3------- -->


                                <!-- -------4------- -->
                                <div>
                                    <div class="row">
                                        <div class="col-md-5 slides-title">
                                            <h2>
                                                英語のボタン
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                場合にもよりますがボタンの文字が英語の場合すべて大文字の方が好まれます。一個一個設定していく手間を省くためaタグのクラスに[ <span>text-uppercase</span>
                                                ]クラスをつけます。これで自動でaタグの中の英語が大文字になります。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド95.PNG" alt="" class="img-fluid slides-item6">
                                                    <div id="slides-modal6" class="iziModal" data-izimodal-title="英語のボタン"
                                                        data-izimodal-subtitle="場合にもよりますがボタンの文字が英語の場合すべて大文字の方が好まれます。">
                                                        <img src="/img/スライド95.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド96.PNG" alt="" class="img-fluid slides-item7">
                                                    <div id="slides-modal7" class="iziModal" data-izimodal-title="text-uppercase"
                                                        data-izimodal-subtitle="これで自動でaタグの中の英語が大文字になります。">
                                                        <img src="/img/スライド96.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド95.PNG" alt="" class="img-fluid slides-item6">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド96.PNG" alt="" class="img-fluid slides-item7">
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
                                <!-- -------4------- -->


                                <!-- -------5------- -->
                                <div>
                                    <div class="row">
                                        <div class="col-md-5 slides-title">
                                            <h2>
                                                ホバーアクション
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                そしてボタンを作成したときはセットで <span>ホバーアクション</span>
                                                のcssも書きましょう。これが何かにリンクしているものだと示す重要なパーツです。今回はホバーしたときに文字色と <span>box-shadow</span>
                                                を変えます。ホバーアクションを加えるときはアクション時間が長くなりすぎないよう、過剰に多いアクションにしないことを心がけましょう。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド97.PNG" alt="" class="img-fluid slides-item8">
                                                    <div id="slides-modal8" class="iziModal" data-izimodal-title="ホバーアクション"
                                                        data-izimodal-subtitle="ボタンを作成したときはホバーアクションのcssも書きましょう。">
                                                        <img src="/img/スライド97.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド98.PNG" alt="" class="img-fluid slides-item9">
                                                    <div id="slides-modal9" class="iziModal" data-izimodal-title="ホバーアクション"
                                                        data-izimodal-subtitle="過剰に多いアクションにしないことを心がけましょう。">
                                                        <img src="/img/スライド98.PNG" alt="" class="img-fluid">
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
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド97.PNG" alt="" class="img-fluid slides-item8">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド98.PNG" alt="" class="img-fluid slides-item9">
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
                                <!-- -------5------- -->


                                <!-- -------6------- -->
                                <div>
                                    <h3>どんどんいきましょう！</h3>
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
                        <h5 class="modal-title" id="basicExampleModal">ファーストビュー</h5>
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
                                左カラムは簡単に、シンプルにして画像のインパクトを大きくしましょう！
                            </p>
                        </div>
                        <img src="{{asset('/img/popup4.jpeg')}}" class="img-fluid" alt="">
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                        <a href="../3/3" class="btn cont_btn_mas_dets_second">次に進む</a>
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