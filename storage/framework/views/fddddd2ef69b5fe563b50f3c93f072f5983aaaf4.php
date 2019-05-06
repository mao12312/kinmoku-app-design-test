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
                    <h2>Adobe XDにパーツを整理する</h2>
                    <p>今回は <span>iPhone8</span> でのUIデザインを作りましょう。そしてアートボードをはじめ、アイコンやロゴなどを管理して <span>UIデザインを作りやすい環境</span>
                        を作りましょう。</p>
                    <img src="<?php echo e(asset('/img1/3-img1.png')); ?>" alt="AdobeXDにパーツを整理する" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑必要な時に必要なパーツが揃っており、ページ移動を最小限に抑えるものです。</a>
                    </div>

                    <h4 id="2">1つのファイルに必要なパーツをまとめる</h4>
                    <p>まずAdobe XDで新しいファイルを作成し、iPone6/78のアートボードを作成します。</p>
                    <img src="<?php echo e(asset('/img1/3-img2.png')); ?>" alt="AdobeXDにパーツを整理する" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑ipone6/78のアートボードを作成します。
                    </div>

                    <p>次にダウンロードしたアイコンを読み込みましょう。読み込むファイルは <span>aiファイル</span> です。上部から「ファイル」→「読み込み」でファイルを読み込みましょう。読み込んだら <span>グループ化とロックを解除</span> して1つ1つのパーツを使えるようにしましょう。</p>

                    <p>最後に <span>iOSのUIキット</span> を開きます。まず「 <span>UI Elements + Desgin Templates + Guides</span> 」のフォルダを開きます。「 <span>UIElements+DesignTemplates+Guides-iPhone8</span> 」ファイルを開きましょう。</p>
                    <img src="<?php echo e(asset('/img1/3-img3.png')); ?>" alt="AdobeXDにパーツを整理する" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑UIElements+DesignTemplates+Guides-iPhone8</div>

                    <p>今回は必要なパーツだけ用いましょう。 <span>「ステータスバー」「ナビゲーションバー」「タブバー」×2</span> を用いましょう(なぜタブバーが２つ必要かは後ほど説明します)。</p>
                    <img src="<?php echo e(asset('/img1/3-img4.png')); ?>" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑「ステータスバー」「ナビゲーションバー」「タブバー」×2</a>
                    </div>

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
                                <a href="#2">2：必要なパーツをまとめる</a>
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
                                <img src="<?php echo e(asset('/img1/success.svg')); ?>" alt="404の成功したよってアイコン" class="img-fluid box-shadow-blue">
                                <h4>Good job!!!</h4>
                                <h6>これで必要な準備は完了です。早速コンポーネントの活用を学ん営きましょう！</h6>
                            </div>
                        </div>
                        <!-- modal body content -->

                        <!-- modal footer content -->
                        <div class="modal-footer">
                            <div class="primary_btn box-shadow-blue align-item">
                                <a href="../1/1.html">
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