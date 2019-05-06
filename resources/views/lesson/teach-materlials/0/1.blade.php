@include('partials.head-teach-material')


@include('partials.nav-lesson')


<!--content_head ---------------------------------- -->

<div class="content_head thum1" id="1">
    <div class="overlay align-items-center">
        <h1>ユーザーを考えよう！</h1>
    </div>
</div>

<!--content_head ---------------------------------- -->

<!-- main -->
<main>
    <div class="container" data-sticky_parent>
        <div class="row">
            <div class=" col-lg-7 material_article">
                <h2>ペルソナを設定する</h2>
                <p>デザイン業界で最近、頻繁に耳にするようになった <span>「ペルソナ」</span> という言葉があります。<br>
                    「 ペルソナ」とは、 <span>企業や商品の仮想のユーザーとして定められた顧客像のこと</span> です。
                    ペルソナは「ターゲット」と違い、氏名や職業、年齢 、価値観、外見、ライフスタイルなど、より <span>具体的な人物像</span> に焦点を当てます。</p>

                <div class="p_box">
                    ・ターゲット <br>
                    20代〜30代男性、デザインに興味がある男性
                    <br><br>
                    ・ペルソナ<br>
                    20歳、男性、プログラマー、地方在住、大学生、休日はスタバでMac、Instagramのフォロワーが多い、おしゃれ、デザインに興味がある
                </div>
                <div class="p_box_text">
                    ↑ターゲットとペルソナの違い
                </div>
                <p>
                    最近ではマーケティングで「デザインシンキング」
                    として用いられたり、IT企業などのソフトウェア開
                    発の際にもそれを利用するユーザー像を明確にする
                    など「ペルソナ」に焦点を当てることが重要視され
                    ています。
                    <br><br>
                    「 ペルソナ」によって <span>ユーザーを分析</span> ができるの
                    で、企業や商品のユーザー像をチーム全員で共有し
                    することで方向性を統一できたり、商品やサービス
                    の開発や改善をする際のUXの設計をしやするとい
                    うメリットがあります。
                </p>
                <img src="{{asset('/img/img1.png')}}" alt="" class="img-fluid box-shadow-blue">
                <div class="img_text">
                    ↑マイクロソフト、アマゾンなどの大企業でも重要とされている
                </div>
                <h4 id="2">今回のペルソナを設定する</h4>
                <p>今回はデザイナーのポートフォリオサイトを作成します。
                    このポートフォリオを見てもらう人の想定は「あなたに仕事を依頼したい人」です。その上でペルソナを設定していきましょう。</p>
                <div class="p_box">
                    ・ペルソナ<br>
                    30歳、男性、マネージャー、元エンジニア、会社でデザイナーを募集している、UXを重要視している、見た目より若く見える、シンプルなものが好き。
                </div>
                <div class="p_box_text">
                    ↑自由にペルソナを設定しても構いません。
                </div>
                <p>どんなデザインでも制作に入る前に設計や想定はとても重要です。この工程を忘れないようにしましょう。
                </p>
                <div class="primary_btn box-shadow-blue align-item">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        次に進む
                    </a>
                </div>
            </div>

            <div class="material_chapter col-lg-5">
                <div class="material_items" data-sticky_column>
                    <ul>
                        <li class="chapter-show-list scroll">
                            <a class="chapter_circle"></a>
                            <a href="#1">1：TOP</a>
                        </li>
                    </ul>
                    <ul>
                        <li class="chapter-show-list scroll">
                            <a class="chapter_circle"></a>
                            <a href="#2">2：今回のペルソナを設定する</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- material-list -->

        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
             aria-labelledby="basicExampleModal" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content box-shadow-blue">

                    <!-- modal body content -->
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="{{asset('/images/success.svg')}}" alt="" class="img-fluid box-shadow-blue">
                            <h4>Good job!!!</h4>
                            <h6>ペルソナとUXの関係はどんなデザインをするにも重要です。これを機にしっかり身につけましょう！</h6>
                        </div>
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <div class="primary_btn box-shadow-blue align-item">
                            <a href="../1/1">
                                次に進む
                            </a>
                        </div>
                        <div class="primary_btn second box-shadow-blue align-item">
                            <a href="../../index3">
                                教材を確認する
                            </a>
                        </div>
                    </div>
                    <!-- modal footer content -->
                </div>
            </div>
        </div>
    </div>
</main>
        <!-- Modal -->

    <!-- footer -->
@include('partials.footer')
<!-- footer -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <script src="{{asset('/js/sticky-kit.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                return $("[data-sticky_column]").stick_in_parent({
                    parent: "[data-sticky_parent]"
                });
            });
        </script>
