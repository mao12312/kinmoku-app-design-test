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
                                                構成
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                <span>ファーストビュー</span> の画面はそのページに来たユーザーが　この後を読み進めるかどうかを決める重要な画面です。その為<span>ファーストビュー</span>
                                                ですべてが決まるといっても過言ではありません。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="/img/スライド87.PNG" alt="" class="img-fluid slides-item1">
                                                    <div id="slides-modal1" class="iziModal" data-izimodal-title="構成"
                                                        data-izimodal-subtitle="ファーストビューですべてが決まるといっても過言ではありません。">
                                                        <img src="/img/スライド87.PNG" alt="" class="img-fluid">
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
                                                                <img src="/img/スライド87.PNG" alt="" class="img-fluid slides-item1">
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
                                                ファーストビューセクションの構成
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                「 <span>first-view</span>
                                                」クラスのsectionタグを作り、ヘッダーと同じようにcantainerとrowを下に作っていきその中に中身を生んでいきます。cssはこのようにし、背景色を少しオレンジ系統の色にすることでページの印象を温かくします。さらに高さを[
                                                <span>-〇〇-fill-available</span> ]で画面の大きさに依存して高さを変えられるのでこの値に設定します。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド88.PNG" alt="" class="img-fluid slides-item2">
                                                    <div id="slides-modal2" class="iziModal" data-izimodal-title="first-viewクラスのsectionタグの中に書いていきます。">
                                                        <img src="/img/スライド88.PNG" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="/img/スライド89.PNG" alt="" class="img-fluid slides-item3">
                                                    <div id="slides-modal3" class="iziModal" data-izimodal-title="css" data-izimodal-subtitle="-〇〇-fill-availableで画面の大きさに依存して高さを変えられるのでこの値に設定します。">
                                                        <img src="/img/スライド89.PNG" alt="" class="img-fluid">
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
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example1" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example1" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/img/スライド88.PNG" alt="" class="img-fluid slides-item2">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/img/スライド89.PNG" alt="" class="img-fluid slides-item3">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example1" role="button"
                                                            data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example1" role="button"
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
                                <!-- -------2------- -->


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
                                ファーストビューはインパクト重視でいきましょう。基本ユーザーはページに入ってすぐ離脱する率が高いです。そのためgoodなファーストビューを作るように構成しましょう。
                            </p>
                        </div>
                        <img src="{{asset('/img/popup4.jpeg')}}" class="img-fluid" alt="">
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                        <a href="../3/2" class="btn cont_btn_mas_dets_second">次に進む</a>
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

    <script type="text/javascript">
        $(function () {

            $(document).on('click', '.slides-item1', function (event) {
                event.preventDefault();
                $('#slides-modal1').iziModal('open');
            });
            $('#slides-modal1').iziModal();

            $(document).on('click', '.slides-item2', function (event) {
                event.preventDefault();
                $('#slides-modal2').iziModal('open');
            });
            $('#slides-modal2').iziModal();

            $(document).on('click', '.slides-item3', function (event) {
                event.preventDefault();
                $('#slides-modal3').iziModal('open');
            });
            $('#slides-modal3').iziModal();

            $(document).on('click', '.slides-item4', function (event) {
                event.preventDefault();
                $('#slides-modal4').iziModal('open');
            });
            $('#slides-modal4').iziModal();

            $(document).on('click', '.slides-item5', function (event) {
                event.preventDefault();
                $('#slides-modal5').iziModal('open');
            });
            $('#slides-modal5').iziModal();

            $(document).on('click', '.slides-item6', function (event) {
                event.preventDefault();
                $('#slides-modal6').iziModal('open');
            });
            $('#slides-modal6').iziModal();

            $(document).on('click', '.slides-item7', function (event) {
                event.preventDefault();
                $('#slides-modal7').iziModal('open');
            });
            $('#slides-modal7').iziModal();

            $(document).on('click', '.slides-item8', function (event) {
                event.preventDefault();
                $('#slides-modal8').iziModal('open');
            });
            $('#slides-modal8').iziModal();

            $(document).on('click', '.slides-item9', function (event) {
                event.preventDefault();
                $('#slides-modal9').iziModal('open');
            });
            $('#slides-modal9').iziModal();

            $(document).on('click', '.slides-item10', function (event) {
                event.preventDefault();
                $('#slides-modal10').iziModal('open');
            });
            $('#slides-modal10').iziModal();

            $(document).on('click', '.slides-item11', function (event) {
                event.preventDefault();
                $('#slides-modal11').iziModal('open');
            });
            $('#slides-modal11').iziModal();

            $('.slider').slick({
                dots: true
            });

        });
    </script>
</body>

</html>