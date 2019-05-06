
<?php echo $__env->make('partials.head-teach-material', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('partials.nav-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--content_head ---------------------------------- -->

    <div class="content_head thum2" id="1">
        <div class="overlay align-items-center">
            <h1>Instagramとは</h1>
        </div>
    </div>

    <!--content_head ---------------------------------- -->

    <!-- main -->
    <main>
        <div class="container" data-sticky_parent>
            <div class="row">
                <div class=" col-lg-7 material_article">
                    <h2>InstagramのUXと機能</h2>
                    <h4>Instagramとは</h4>
                    <p> <span>Instagram（インスタグラム）</span> とは、Facebook（フェイスブック）が提供している無料の写真・動画共有アプリケーションです。[参照： <a
                            href="https://ja.wikipedia.org/wiki/Instagram"
                            target="_blank">https://ja.wikipedia.org/wiki/Instagram</a> ]
                    </p>

                    <img src="<?php echo e(asset('/img1/1-img1.png')); ?>" alt="Instagramとは" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑<a href="https://www.instagram.com/" target="_blank">https://www.instagram.com/</a>
                    </div>

                    <p>また、Instagramは写真・動画共有アプリケーションの機能だけではなく <span>SNS（Social Networking
                            Service＝ソーシャル・ネットワーキング・サービス）</span>
                        として優れていて、2018年の11月には日本国内の月間アクティブユーザーが2,900万人を超えており、海外にも数億人のアクティブユーザーがいるのでInstagramには
                        <span>魅力的な写真・動画</span> が多数投稿され、日々見られています。</p>
                    <img src="<?php echo e(asset('/img1/1-img2.png')); ?>" alt="Instagramとは" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑Instagramは世界で最も使われているSNSアプリの１つだ。</div>

                    <h4 id="2">Instagramのデザイン</h4>
                    <p>今回お話するのは <span>iOSアプリケーション</span> のInstagramのデザインです。</p>
                    <img src="<?php echo e(asset('/img1/1-img3.png')); ?>" alt="Instagramとは" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑Instagramのhome画面。</div>

                    <p>まず他のアプリと比べても一目瞭然なほど「 <span>シンプル</span> 」です。例えばアイコンはInstagram独自の線だけで構成されたものでアクティブになると塗りつぶされるのが特徴的です。
                        <br><br> 「質素」とは違い最低限の必要な情報が美しく整列されています。そのためユーザーが投稿する写真や動画、画像などがとても強調されるような設計になっています。
                    </p>
                    <img src="<?php echo e(asset('/img1/1-img4.png')); ?>" alt="Instagramとは" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑シンプルなUIデザインのアプリの代名詞といえばInstagram。</div>

                    <p>さらに <span>iOSアプリケーションのコンポーネント</span> 通りに作られているため非常に作りやすデザインでもあります。</p>

                    <div class="p_box">
                        代表的なiOSのUIコンポーネントをいくつか紹介
                        <br><br>
                        ・ステータスバー <br>
                        iPhoneでいうと1番上部に表示されている電波状況や時間、バッテリーの残量などを表示しています。
                        <br><br>
                        ・ナビげションバー<br>
                        ステータスバーの下に表示されていて、バックボタンや階層ラベル、ロゴやアイコンなどを表示しています。
                        <br><br>
                        ・タブバー<br>
                        複数の画面を1つのウィンドウで切り替えて使えるようにアイコンをいくつか並べて表示しています。
                    </div>
                    <div class="p_box_text">
                        ↑詳しくは<a href="https://developer.apple.com/design/human-interface-guidelines/ios/overview/themes/#//apple_ref/doc/uid/TP40006556-CH2-SW1">iOSヒューマンインターフェースガイドライン</a>をご覧ください。
                    </div>

                    <img src="<?php echo e(asset('/img1/1-img5.png')); ?>" alt="Instagramとは" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑あとで使用するiOSのUIコンポーネントのビジュアル</div>

                    <p>早速デザインしていきましょう!!</p>
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
                                <a href="#2">2：Instagramのデザイン</a>
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
                                <img src="<?php echo e(asset('/images/success.svg')); ?>" alt="" class="img-fluid box-shadow-blue">
                                <h4>Good job!!!</h4>
                                <h6>これでInstagramのUIデザインを作る基礎知識は十分です！次はUIデザインを作る下準備をしていきましょう！</h6>
                            </div>
                        </div>
                        <!-- modal body content -->

                        <!-- modal footer content -->
                        <div class="modal-footer">
                            <div class="primary_btn box-shadow-blue align-item">
                                <a href="2">
                                    次に進む
                                </a>
                            </div>
                            <div class="primary_btn second box-shadow-blue align-item">
                                <a href="../../index4">
                                    教材を確認する
                                </a>
                            </div>
                        </div>
                        <!-- modal footer content -->
                    </div>
                </div>
            </div>
            <!-- Modal -->

        </div>
    </main>
    <!-- main -->



    <!-- footer -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- footer -->

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
    <script src="../../js/sticky-kit.js"></script>
    <script src="../../js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            return $("[data-sticky_column]").stick_in_parent({
                parent: "[data-sticky_parent]"
            });
        });
    </script>
</body>


</html>