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

    {{--<title>近もく会 | Products</title>--}}
    {{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}

    {{--<!-- javascript -->--}}
    {{--<script type="text/javascript" src="{{asset('js/footerFixed.js')}}"></script>--}}
{{--</head>--}}
@include('partials.head-lesson')

<body>


<!-- header -->
@include('partials.nav-lesson')
<!-- header -->


<!-- main -->
<main>
    <div class="container">

        <!-- title -->
        <div class="title-text">
            <h2>Products</h2>
            <p>
                <!-- 今後Productsが増えたらテキストを入れます。 -->
            </p>
        </div>
        <!-- title -->


        <!-- products-card -->
        <div class="cont_modal">
            <div class="cont_photo">
                <a href="index3">
                    <div class="cont_img_back">
                        <img src="{{asset('/images/products-thumnail1.png')}}" alt="" />
                    </div>
                </a>
                <a href="index3">
                    <div class="cont_detalles">
                        <h3>シンプルなWeb Page</h3>
                    </div>
                </a>
            </div>
            <div class="cont_text_ingredients">
                <div class="cont_over_hidden">
                    <div class="cont_tabs">
                        <ul>
                            <li>
                                <a href="#">
                                    <h4>landing page</h4>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="cont_text_det_preparation">
                        <div class="cont_title_preparation">
                            <p>必要なスキル</p>
                        </div>
                        <div class="cont_info_preparation">
                            <p>HTML, CSS</p>
                        </div>
                        <div class="cont_text_det_preparation">

                            <div class="cont_title_preparation">
                                <p>学べるスキル</p>
                            </div>
                            <div class="cont_info_preparation">
                                <p>
                                    このプロジェクトではシンプルなwebページを作成する上で必要なデザインの考え方、
                                    基本的なディレクトリ構造などを学ぶことができます。
                                    このサンプルページをポートフォリオにして自分だけのwebページを作ってみましょう。
                                </p>
                            </div>

                        </div>
                    </div>
                    <a class="cont_btn_mas_dets" href="index3">
                        もっと詳しく
                    </a>
                </div>
            </div>
        </div>
        <!-- products-card -->
        <div style="clear:both;"></div>
    </div>
</main>
<!-- main -->



<!-- footer -->
<footer id="footer">

    <div class="footer-right">

        <a href="#">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="#">
            <i class="fa fa-twitter"></i>
        </a>

    </div>

    <div class="footer-left">

        <div class="footer-links">
            <a href="#">近もく会</a>
            <p>異なる"言語"で、共に作る"空想"</p>
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
</body>

</html>