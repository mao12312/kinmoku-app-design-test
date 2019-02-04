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
                                                面白いホバーアクション
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                今まで作ってきたホバーアクションはaタグのため、つまり何かへの直接のリンクのためのモノでしたが今回はページの <span>アクセント</span>
                                                として作成していこうと思います。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド145.PNG" alt="" class="img-fluid slides-item1">
                                                    <div id="slides-modal1" class="iziModal" data-izimodal-title="面白いホバーアクション">
                                                        <img src="/img/スライド145.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド145.PNG" alt="" class="img-fluid slides-item1">
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
                                                この要素について
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                本来この使用用途は何かのプランを比較したり、ECサイトでの販売項目として使われます。ですが今回はサポーターの並列的要素として使います。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド146.PNG" alt="" class="img-fluid slides-item2">
                                                    <div id="slides-modal2" class="iziModal" data-izimodal-title="この要素について"
                                                        data-izimodal-subtitle="本来この使用用途は何かのプランを比較したり、ECサイトでの販売項目として使われます。">
                                                        <img src="/img/スライド146.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド146.PNG" alt="" class="img-fluid slides-item2">
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
                                                ホバーアクション
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                ホバーしたら背景色が付き、要素が少し大きくなり、文字色が白くなる普通のものにしました。そしてすべてが同じ量、幅になるようにしましょう。いままでのものもそうですが同じリピートのものは幅や高さがそろっていることが美しいです。
                                            </p>
                                        </div>
                                    </div>

                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド147.PNG" alt="" class="img-fluid slides-item3">
                                                    <div id="slides-modal3" class="iziModal" data-izimodal-title="ホバーアクション"
                                                        data-izimodal-subtitle="同じリピートのものは幅や高さがそろっていることが美しいです。">
                                                        <img src="/img/スライド147.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド147.PNG" alt="" class="img-fluid slides-item3">
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
                                                構成
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                今までと同じように <span>supporters</span> クラスのタグの中に構成を作ります。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド148.PNG" alt="" class="img-fluid slides-item4">
                                                    <div id="slides-modal4" class="iziModal" data-izimodal-title="supportersクラスのhtml">
                                                        <img src="/img/スライド148.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド149.PNG" alt="" class="img-fluid slides-item5">
                                                    <div id="slides-modal5" class="iziModal" data-izimodal-title="supportersクラスのCSS">
                                                        <img src="/img/スライド149.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド148.PNG" alt="" class="img-fluid slides-item4">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド149.PNG" alt="" class="img-fluid slides-item5">
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
                                                brタグ
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                ところで今回のsupporters-titleクラスのpタグの文章が長いです。その為途中で <span>brタグ</span> をいれて改行させましょう。改行させることで横に伸びたのっぺりとした印象をなくします。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド150.PNG" alt="" class="img-fluid slides-item6">
                                                    <div id="slides-modal6" class="iziModal" data-izimodal-title="brタグ"
                                                        data-izimodal-subtitle="brタグをいれて改行させましょう。">
                                                        <img src="/img/スライド150.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド151.PNG" alt="" class="img-fluid slides-item7">
                                                    <div id="slides-modal7" class="iziModal" data-izimodal-title="brタグ"
                                                        data-izimodal-subtitle="改行させることで横に伸びたのっぺりとした印象をなくします。">
                                                        <img src="/img/スライド151.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド150.PNG" alt="" class="img-fluid slides-item6">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド151.PNG" alt="" class="img-fluid slides-item7">
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
                                    <h3>どんどん行きましょう！</h3>
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
                        <h5 class="modal-title" id="basicExampleModal">面白いホバーアクション</h5>
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
                                このホバーアクションは簡単とは言いませんが、アクセントとしてとても面白いです。頑張って覚えてみましょう。
                            </p>
                        </div>
                        <img src="{{asset('/img/popup9.jpeg')}}" class="img-fluid" alt="">
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                        <a href="../8/2" class="btn cont_btn_mas_dets_second">次に進む</a>
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