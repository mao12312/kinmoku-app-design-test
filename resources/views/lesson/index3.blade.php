
{{--</head>--}}
@include('partials.head-lesson')

<body>


<!-- header -->
@include('partials.nav-lesson')
<!-- header -->


<!-- main -->
<main>
    <div class="container" data-sticky_parent>

        <!-- material-text ---------------------------------- -->

        <div class="row">
            <div class="col-lg-7 material_text">
                <p>今回はデザイナーのポートフォリオサイトを作成します。まずデザインを作成する前にユーザー体験(UX)を設計します。ユーザーを想定し、実際にデザイン設計を行なってみましょう！</p>
                <span>
                        <i class="far fa-clock"></i>
                        学習時間 3 時間
                    </span>
            </div>
        </div>

        <!-- material-text ---------------------------------- -->

        <!-- material-list -->
        <div class="row">
            <div class=" col-lg-7 material-list">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action list-title"><span>1.
                            </span>ユーザーを考えよう！</div>
                    <a href="teach-materlials/0/1"
                       class="list-group-item list-group-item-action list-item active">ペルソナを設定する</a>
                </div>

                <div class="list-group">
                    <div class="list-group-item list-group-item-action list-title"><span>2.
                            </span>コンセプトとゴールを決めよう！</div>
                    <a href="teach-materlials/1/1"
                       class="list-group-item list-group-item-action list-item">デザインのイメージを決める</a>
                </div>

                <div class="list-group">
                    <div class="list-group-item list-group-item-action list-title"><span>3.
                            </span>サイトマップを作ろう！</div>
                    <a href="teach-materlials/1/1"
                       class="list-group-item list-group-item-action list-item">サイトの遷移を決める</a>
                    <a href="teach-materlials/1/1"
                       class="list-group-item list-group-item-action list-item">それぞれのページの構成を決める</a>
                </div>
            </div>

            <div class="material_chapter col-lg-5">
                <div class="material_items" data-sticky_column>
                    <ul>
                        <li class="chapter-show-list scroll">
                            <a class="chapter-circle"></a>
                            <a href="#1">1：HTMLに触れてみよう！</a>
                        </li>
                    </ul>
                    <ul>
                        <li class="chapter-show-list scroll">
                            <a class="chapter-circle"></a>
                            <a href="#2">2：CSSに触れてみよう！</a>
                        </li>
                    </ul>
                    <ul>
                        <li class="chapter-show-list scroll">
                            <a class="chapter-circle"></a>
                            <a href="#2">3：レイアウトを作ろう！</a>
                        </li>
                    </ul>
                </div>
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