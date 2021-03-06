@include('partials.head-teach-material')
@include('partials.nav-lesson')
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
                    <h2>Instagramに必要な要素</h2>
                    <p>このUIデザインを作成するのに限らず <span>アイコン</span> や <span>ロゴ</span> など必要な要素があります。今回はそれらを2つご紹介します。</p>

                    <h4 id="2">1.Instagramのアイコン</h4>
                    <p>UIに用いられるアイコンは公式[https://en.instagram-brand.com/]からは出されていません。そのため、自作するか他のものをダウンロードする必要があります。</p>
                    <img src="{{asset('/img1/2-img2.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑<a href="https://en.instagram-brand.com/" target="_blank">Instagram公式ブランドページ</a>
                    </div>

                    <p>今回は世界的に有名なベクター画像素材サイト「<a href="https://www.freepik.com/">freepik</a>」[ <a
                            href="https://www.freepik.com/">https://www.freepik.com/</a> ]を使いましょう。高品質なベクターやグラフィックの
                        <span>検索サイト</span> で、キーワードで欲しいアイコンやベクター画像を検索し無料で使用できます。注意点として「 <span>freepik</span> 」にある素材の
                        <span>利用規約やライセンス</span> はそれぞれの素材によって異なるので注意が必要です。もしも使用する際はリンクを掲載する必要があります。</p>
                    <img src="{{asset('/img1/2-img3.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑freepikのtopページ。</div>

                    <p>まずfreepikのリンクを開き検索タブで「 <a
                            href="https://jp.freepik.com/search?dates=any&format=search&page=1&query=Instagram%20icons&sort=popular">Instagram
                            icons</a> 」と調べます。海外サイトなので日本語ではなく英語で調べましょう。その際に検索結果に出てくる<a
                            href="https://www.freepik.com/free-vector/flat-instagram-icons-notifications-set_2400505.htm">ページ</a>を開きましょう。
                    </p>
                    <img src="{{asset('/img1/2-img4.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑ <a href="https://www.freepik.com/free-vector/flat-instagram-icons-notifications-set_2400505.htm"
                            target="_blank">https://www.freepik.com/free-vector/flat-instagram-icons-notifications-set_2400505.htm</a>
                    </div>

                    <p>画面右側にある「Download」をクリックし、 <span>Free Download</span>
                        を選択します。これでダウンロードできました。ですがもしもあなたがUIを作成した時にwebもしくはアプリなどに掲載する場合は表示されている <span>link</span>
                        をしっかり掲載しましょう。</p>

                    <img src="{{asset('/img1/2-img5.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑もしもアイコンをwebやアプリに掲載する際は絶対にリンクを載せましょう。</div>

                    <p><a href=“https://www.freepik.com/free-photos-vectors/design”>Design vector created by freepik -
                            www.freepik.com</a> <br>↑これです。
                    </p>

                    <h4 id="3">2.iOSアプリケーションのコンポーネント</h4>
                    <p>iOSのアプリケーションを作る際は <span>コンポーネント</span> が用意されており、ガイドラインもいくつか提供されています。[ <a
                            href="https://ivomynttinen.com/blog/ios-design-guidelines"
                            target="_blank">https://ivomynttinen.com/blog/ios-design-guidelines</a> ] <br>
                        そのためアイコンの大きさやレイアウトを無理に変えてしまうと開発側との亀裂が生まれます。
                    </p>

                    <img src="{{asset('/img1/2-img6.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑ <a href="https://ivomynttinen.com/blog/ios-design-guidelines" target="_blank">The iOS Design
                            Guidelines - Ivo Mynttinen / User Interface Designer</a> </div>

                    <p>今回は <span>Adobe XD</span> で提供されている <span>Apple iOSのUIキット</span>
                        を使用しましょう。これはApple社が提供しているリソースの１つでSketchやKeynoteなどのファイルもあります。</p>
                    <img src="{{asset('/img1/2-img7.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑ <a href="https://developer.apple.com/design/resources/" target="_blank">Apple Design Resources
                            - Apple Developer</a></div>

                    <p>まずApple社が提供している<a href="https://developer.apple.com/design/resources/" target="_blank">Human
                            Interface GuidelinesのiOSのUIキット</a>をダウンロードします。「<a
                            href="https://developer.apple.com/design/downloads/iOS-12-AdobeXD.dmg"
                            target="_blank">Download for Adobe XD</a>」と書かれているものをダウンロードしましょう。</p>
                    <img src="{{asset('/img1/2-img8.png')}}" alt="Instagramに必要な要素" class="img-fluid box-shadow-blue">
                    <div class="img_text">
                        ↑ もしも他のファイルが欲しい場合はそのファイルでも構いません。柔軟に使用していきましょう。</div>

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
                                <a href="#2">2：Instagramのアイコン</a>
                            </li>
                        </ul>
                        <ul>
                            <li class="chapter-show-list scroll">
                                <a class="chapter_circle"></a>
                                <a href="#3">3：iOSアプリのコンポーネント</a>
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
                                <h6>これで必要な要素は揃いました。次は1つのページに管理しましょう。</h6>
                            </div>
                        </div>
                        <!-- modal body content -->

                        <!-- modal footer content -->
                        <div class="modal-footer">
                            <div class="primary_btn box-shadow-blue align-item">
                                <a href="3">
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
@include('partials.footer')
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