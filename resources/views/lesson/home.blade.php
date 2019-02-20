<!doctype html>
<html lang="en">

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

    {{--<title>近もく会 | Home</title>--}}
    {{--<link rel="stylesheet" href="{{asset('/css/style.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('/css/app.css')}}">--}}

    {{--<!-- javascript -->--}}
    {{--<script type="text/javascript" src="{{asset('/js/footerFixed.js')}}"></script>--}}


    {{--追加--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--<script>--}}
        {{--window.Laravel = {!! json_encode([--}}
                {{--'csrfToken' => csrf_token(),--}}
            {{--]) !!};--}}
    {{--</script>--}}

    {{--@if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')--}}
        {{--<link rel="stylesheet" type="text/css" href="{{ $theme->link }}">--}}
    {{--@endif--}}

    {{--@yield('head')--}}
{{--</head>--}}
@include('partials.head-lesson')

{{--追加--}}
@section('template_fastload_css')
@endsection

<body>


<!-- header -->
@include('partials.nav-lesson')
{{--@include('partials.nav')--}}
<!-- header -->

<!-- main-content -->
<main>
    <div class="container">

        <!-- title -->
        <div class="title-text">
            <h1>Hello, design world.</h1>
                <p>
                    <!-- 今後Productsが増えたらテキストを入れます。 -->
                </p>
        </div>
        <!-- title -->

        <!-- article -->

        <article>
            <!-- article thumnail -->
            <div class="article-thum"></div>
            <!-- article thumnail -->

            <!-- article day -->
            <p class="article-day">2019年1月21日</p>
            <!-- article day -->

            <!-- article-contents -->
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <section>
                        <h3>まずはじめに</h3>
                        <p>私たちは「 <a href="http://kinmoku.tech/" target="_blank">近もく会</a>
                            」という近畿大学内で発足したもくもく会で、サーバーサイドからデザインまで幅広く勉強しています。その近もく会の中から最初にローンチされたのが「 <span>kinmoku
                                    design
                                    app</span>
                            」です。このサービスは「プログラミングを勉強しており、デザインを勉強したい人」、「デザインを勉強しており、プログラミングを勉強したい人」のためのサービスです。</p>
                        <p>「 <span>デザイン</span>
                            」と一概に言っても色々ありますが、このサービスではwebデザインをはじめとしたUI/UXの勉強、adobe製品を使ったグラフィックデザインなど色とりどりのデザインが学べるようなものにしたいと思っています。初心者プログラマー、初心者デザイナーにwebデザインの楽しさ、コードを書く面白さを知っていただき、あなたの創る
                            <span>空想</span> の1番のサポーターになることを目指しています。</p>
                    </section>

                    <section>
                        <h3>kinmoku design app</h3>
                        <p>様々なデザインをオンラインで学ぶことができます。</p>
                        <h4>1. 自分のPCでデザインを作成</h4>
                        <p>あなたのPCに開発するための環境を構築し、エディターでコーディングをし(推奨エディターはBracketsです。自分のPCにエディターがインストールされていないひとは <a
                                    href="http://brackets.io/">こちらから</a>
                            )、ブラウザで確認し(推奨ブラウザは <span>google chrome</span> です。自分のPCにgoogle chromeがインストールされていない人は <a
                                    href="https://www.google.co.jp/chrome/?brand=CHBD&gclid=Cj0KCQiAm5viBRD4ARIsADGUT27qXrWanYMQ45Zza17aWrLyeGxuNOkRKYiQJs3KjqS8mKP7GDiKbroaAkkUEALw_wcB&gclsrc=aw.ds">こちらから</a>
                            )、フォルダを作成します。1度作成すれば2つ目からは
                            とても簡単に感じます。</p>
                    </section>

                    <section>
                        <h4>2. スライドとイラストで学べる</h4>
                        <p>現在のプログラミングの勉強教材は色々なものがあります。私たちは勉強の <span>ペース</span> を大事にしています。自分の <span>ペース</span>
                            をしっかりと考え、楽しく学んでいくためにもスライド形式でテキストと画像で学び、いつでも復習することができます。</p>
                        <div class="article-img-contents">
                            <div class="article-img">
                                <img src="{{asset('/images/article-img1.png')}}" alt="" class="img-fluid">
                            </div>
                            <p>参照: <a href="index3" target="_blank">シンプルなweb page</a></p>
                        </div>
                    </section>

                    <section>
                        <h4>3. アレンジができる</h4>
                        <p>このサービスでは教材をもとに <span>あなたの</span>
                            ポートフォリオを作っていきます。いわゆる写経的な勉強ではいくら勉強してもデザイン性は上がらず、創る意欲の向上にはつながりません。色を変えたり、テキストを変えたり、画像を変えたり、
                            <span>あなただけ</span>
                            のプロダクトを作りましょう。</p>
                        <div class="article-img-contents">
                            <div class="article-img">
                                <img src="{{asset('/images/article-img2.png')}}" alt="" class="img-fluid">
                            </div>
                            <p>参照: <a href="index3" target="_blank">シンプルなweb page</a></p>
                        </div>
                    </section>

                    <section>
                        <h3>このサービスの使い方 for windows</h3>
                        <p>私たちがオススメしている勉強方法です。この方法でなくてもこのサービスは利用できます</p>
                        <h4>左半分にブラウザ、右半分にエディター、前面にプレビュー画面</h4>
                        <p> まず「kinmoku design app」を開き、 <span>winキー + ←もしくは→</span> で画面の半分にし、エディターを同様に <span>winキー +
                                    →もしくは←</span> で画面の半分にします。そしてプレビュー画面を全画面で開きます。それぞれのウィンドウを <span>alt +
                                    tab</span>
                            キーで移動します。流れは「アプリで勉強」、「コーディング」、「プレビュー」…の繰り返しです。わからないプロパティや動かない時はすぐに<a href="https://www.google.co.jp/">google</a>先生に助けてもらいましょう。一番の先生は<a
                                    href="https://www.google.co.jp/">google</a>です。
                        </p>
                    </section>

                    <section>
                        <h3>このサービスの使い方 for macbook</h3>
                        <h4>ブラウザ、エディター、プレビューの3つの画面移動</h4>
                        <p>
                            まず「kinmoku design app」を開き、 <span>⌘ + control + Fキー</span>
                            (JIS配列)で最大化し、エディターとプレビュー画面も同様に最大化します。そしてそれぞれのウィンドウを <span>⌘ + tabキー</span>
                            で移動します。流れは「アプリで勉強」、「コーディング」、「プレビュー」…の繰り返しです。わからないプロパティや動かない時はすぐに <a href="https://www.google.co.jp/">google</a>
                            先生に助けてもらいましょう。一番の先生は<a href="https://www.google.co.jp/">google</a>です。
                        </p>
                    </section>

                    <section>
                        <h3>最後に</h3>
                        <p>
                            私たちのサービスではデザインを勉強する上で重要なことを伝えていくつもりです。ですがプロのデザイナーやプログラマーでも半分の時間はみなさんと同じように、「分からない、動かない」と試行錯誤しながらたくさん調べ、たくさん間違えながら作業をしています。私たちのサービスを使いながら多くの言葉や新たなスキルを調べ、コーディングをし、覚えるのに役立ててください。デザイナーやプログラマーは作った作品の数だけ成長します。どんどんたくさんのあなただけの空想を作って、世の中を面白くしてください。
                        </p>
                        <b>Create “fantasy” with us.</b>
                        <div class="article-img-contents">
                            <div class="article-img">
                                <img src="{{asset('/images/article-img3.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <p>参照: <a href="lesson/index3" target="_blank">シンプルなweb page</a></p>
                        </div>
                    </section>

                </div>
            </div>
            <!-- article-contents -->

        </article>

        <!-- article -->

    </div>
</main>
<!-- main-content -->


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
{{--</body>--}}

{{--</html>--}}
{{--@endsection--}}
