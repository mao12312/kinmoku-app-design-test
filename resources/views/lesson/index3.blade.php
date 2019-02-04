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
    {{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}

    {{--<!-- javascript -->--}}
    {{--<script type="text/javascript" src="{{asset('/js/footerFixed.js')}}"></script>--}}
{{--</head>--}}
@include('partials.head-lesson')

<body>


<!-- header -->
@include('partials.nav-lesson')
<!-- header -->


<!-- main -->
<main>
    <div class="container">

        <!-- products_show -->
        <div class="product-show">
            <div class="row align-items-center product_row">
                <div class="product-img col-lg-6"></div>
                <div class="product-info col-lg-6">
                    <div class="product-text">
                        <h4>シンプルなWeb Page</h4>
                        <h6>Landing page</h6>
                        <p>このプロジェクトではシンプルなwebページを作成する上で必要なデザインの考え方、 基本的なディレクトリ構造などを学ぶことができます。
                            このサンプルページをポートフォリオにして自分だけのwebページを作ってみましょう。</p>
                    </div>
                    <div class="product-time">
                        <p>学習時間 <span>5:00</span> 時間</p>
                    </div>
                </div>
            </div>
            <!-- <div style="clear:both;"></div> -->
            <div class="progressbar_show">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        {{--<div class="progress progress_item">--}}
                            {{--<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%"--}}
                                 {{--aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--</div>--}}
                    </div>

                    <div class="col-md-5 btn-demo">
                        <a class="btn cont_btn_mas_dets" href="sample">最終版を見る</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- products_show -->


        <!-- title -->
        <div class="title-text">
            <h2>Products</h2>
            <p>
                <!-- 今後Productsが増えたらテキストを入れます。 -->
            </p>
        </div>
        <!-- title -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>0. </span>プログラミング×デザイン「設計を観察してみよう」</div>
                <a href="teach-materlials/0/1" class="list-group-item list-group-item-action list-item active">どんなweb pageか</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>1. </span>初期構築をしてみよう</div>
                <a href="teach-materlials/1/1" class="list-group-item list-group-item-action list-item">フォルダ</a>
                <a href="teach-materlials/1/2" class="list-group-item list-group-item-action list-item">Bootstrap</a>
                <a href="teach-materlials/1/3" class="list-group-item list-group-item-action list-item">Font awesome</a>
                <a href="teach-materlials/1/4" class="list-group-item list-group-item-action list-item">画像素材</a>
                <a href="teach-materlials/1/5" class="list-group-item list-group-item-action list-item">フォント</a>
                <a href="teach-materlials/1/6" class="list-group-item list-group-item-action list-item">色</a>
                <a href="teach-materlials/1/7" class="list-group-item list-group-item-action list-item">CSS</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>2. </span>ヘッダーを作ってみよう</div>
                <a href="teach-materlials/2/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/2/2" class="list-group-item list-group-item-action list-item">container</a>
                <a href="teach-materlials/2/3" class="list-group-item list-group-item-action list-item">Row</a>
                <a href="teach-materlials/2/4" class="list-group-item list-group-item-action list-item">ロゴ名</a>
                <a href="teach-materlials/2/5" class="list-group-item list-group-item-action list-item">ナビゲーションバー</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>3. </span>ファーストビューセクションを作ってみよう</div>
                <a href="teach-materlials/3/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/3/2" class="list-group-item list-group-item-action list-item">左カラム</a>
                <a href="teach-materlials/3/3" class="list-group-item list-group-item-action list-item">右カラム</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>4. </span>Activitiesページを作ってみよう</div>
                <a href="teach-materlials/4/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/4/2" class="list-group-item list-group-item-action list-item">グリッド</a>
                <a href="teach-materlials/4/3" class="list-group-item list-group-item-action list-item">ホバーアクション</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>5. </span>About usセクションを作ってみよう</div>
                <a href="teach-materlials/5/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/5/2" class="list-group-item list-group-item-action list-item">コラム</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>6. </span>ナンバーコラムを作る</div>
                <a href="teach-materlials/6/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/6/2" class="list-group-item list-group-item-action list-item">魅せ方</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>7. </span>綺麗に整列したグリッドを作ってみよう</div>
                <a href="teach-materlials/7/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/7/2" class="list-group-item list-group-item-action list-item">グリッド</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>8. </span>おもしろいホバーアクションを作ってみよう</div>
                <a href="teach-materlials/8/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/8/2" class="list-group-item list-group-item-action list-item">カラム内容</a>
                <a href="teach-materlials/8/3" class="list-group-item list-group-item-action list-item">ホバーアクション</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>10. </span>フッターを作ってみよう</div>
                <a href="teach-materlials/9/1" class="list-group-item list-group-item-action list-item">構成</a>
                <a href="teach-materlials/9/2" class="list-group-item list-group-item-action list-item">左カラム</a>
                <a href="teach-materlials/9/3" class="list-group-item list-group-item-action list-item">右カラム</a>
            </div>
        </div>
        <!-- material-list -->


        <!-- material-list -->
        <div class="row align-items-center material-list">
            <div class="list-group col-lg-9">
                <div class="list-group-item list-group-item-action list-title"><span>11. </span>これで最後</div>
                <a href="teach-materlials/10/1" class="list-group-item list-group-item-action list-item">次に向けて</a>
            </div>
        </div>
        <!-- material-list -->
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