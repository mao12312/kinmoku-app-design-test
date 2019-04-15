<!DOCTYPE html>
<html>


    
    
    
    

    
    
        

    
    

    
    

    

    
    
    
    
    

    
    

    
    
    
    


<?php echo $__env->make('partials.head-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>


    <!-- header -->
    
        
            
        

        
            
            
        

        
            
                
                    
                
                
                    
                
                
                    
                        
                    
                
            
        
    
    <?php echo $__env->make('partials.nav-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                                フォルダ
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                まずデスクトップにフォルダを作成しましょう。 <span>Kinmoku-sample</span>
                                                というフォルダを作成(すでにあれば他の名前で作成します)。bracketsで「ファイル」から「フォルダを開く」で今作成したフォルダを開きます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="<?php echo e(asset('/img/スライド8.PNG')); ?>" alt="" class="img-fluid slides-item1">
                                                    <div id="slides-modal1" class="iziModal" data-izimodal-title="フォルダ"
                                                        data-izimodal-subtitle="フォルダはあなたの道具箱です。あなたの好きな名前をつける感覚で。">
                                                        <img src="<?php echo e(asset('/img/スライド8.PNG')); ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <img src="<?php echo e(asset('/img/スライド9.PNG')); ?>" alt="" class="img-fluid slides-item2">
                                                    <div id="slides-modal2" class="iziModal" data-izimodal-title="フォルダを開く">
                                                        <img src="<?php echo e(asset('/img/スライド9.PNG')); ?>" alt="" class="img-fluid">
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
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="<?php echo e(asset('/img/スライド8.PNG')); ?>" alt="" class="img-fluid slides-item1">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="<?php echo e(asset('/img/スライド9.PNG')); ?>" alt="" class="img-fluid slides-item2">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                            role="button" data-slide="next">
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
                                <!-- -------1------- -->


                                <!-- -------2------- -->
                                <div>
                                    <div class="row">
                                        <div class="col-md-5 slides-title">
                                            <h2>
                                                2つのフォルダ
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                その中に今回は2つフォルダを作成します。1つ目は「 <span>img</span>
                                                」フォルダ。ここには画像ファイルを入れていきます。それから2つ目は「 <span>css</span>
                                                」フォルダ。ここにはcssに関するファイルを入れていきます。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="<?php echo e(asset('/img/スライド10.PNG')); ?>" alt="" class="img-fluid slides-item3">
                                                    <div id="slides-modal3" class="iziModal" data-izimodal-title="2つのフォルダ"
                                                        data-izimodal-subtitle="どんなwebページでも同じような構造です。雛形として覚えておきましょう。">
                                                        <img src="<?php echo e(asset('/img/スライド10.PNG')); ?>" alt="" class="img-fluid">
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
                                                                <img src="<?php echo e(asset('/img/スライド10.PNG')); ?>" alt="" class="img-fluid slides-item3">
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
                                                自分で作るファイル
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                まず自分で作るファイルが今回2つあり、 <span>html</span> ファイルと <span>css</span>
                                                ファイルです。htmlファイルはkinmoku-sampleフォルダの直下におき、cssファイルはcssフォルダの直下に置きます。名前はそれぞれindex.htmlとmain.cssにしましょう。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="<?php echo e(asset('/img/スライド11.PNG')); ?>" alt="" class="img-fluid slides-item4">
                                                    <div id="slides-modal4" class="iziModal" data-izimodal-title="自分で作るファイル"
                                                        data-izimodal-subtitle="どんなwebページでも作るファイルは似たものです。雛形として覚えておきましょう。">
                                                        <img src="<?php echo e(asset('/img/スライド11.PNG')); ?>" alt="" class="img-fluid">
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
                                                                <img src="<?php echo e(asset('/img/スライド11.PNG')); ?>" alt="" class="img-fluid slides-item4">
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
                                                ファイルの読み込み
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                main.cssをindex.htmlの <span>headタグ</span> で読み込みましょう。パスを間違えないように注意しましょう。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-lg-6">
                                                    <img src="<?php echo e(asset('/img/スライド12.PNG')); ?>" alt="" class="img-fluid slides-item5">
                                                    <div id="slides-modal5" class="iziModal" data-izimodal-title="ファイルの読み込み"
                                                        data-izimodal-subtitle="パスを間違えないように注意しましょう。">
                                                        <img src="<?php echo e(asset('/img/スライド12.PNG')); ?>" alt="" class="img-fluid">
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
                                                                <img src="<?php echo e(asset('/img/スライド12.PNG')); ?>" alt="" class="img-fluid slides-item5">
                                                            </div>
                                                        </div>
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
                                                綺麗なフォルダ・ファイル
                                            </h2>
                                        </div>
                                        <div class="col-md-7 slides-text">
                                            <p>
                                                デザイナーとしてUIだけでなく内部、ファイルの位置やフォルダの階層・命名までこだわることもチーム開発などに活かされていくので綺麗なフォルダ分けを心がけましょう。ファイル名もhogehoge
                                                .htmlや123456.cssなどはやめましょう。 <span>ファイル名も美しく</span> しましょう。
                                            </p>
                                        </div>
                                    </div>


                                    <!-- slide-materials -->
                                    <div class="slide-materials">
                                        <div class="slides-images">
                                            <div class="row justify-content-md-center">
                                                <div class="col-sm-6">
                                                    <img src="<?php echo e(asset('/img/スライド13.PNG')); ?>" alt="" class="img-fluid slides-item6">
                                                    <div id="slides-modal6" class="iziModal" data-izimodal-title="フォルダ"
                                                        data-izimodal-subtitle="フォルダはあなたの道具箱です。あなたの好きな名前をつける感覚で。">
                                                        <img src="<?php echo e(asset('/img/スライド13.PNG')); ?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="<?php echo e(asset('/img/スライド14.PNG')); ?>" alt="" class="img-fluid slides-item7">
                                                    <div id="slides-modal7" class="iziModal" data-izimodal-title="フォルダを開く">
                                                        <img src="<?php echo e(asset('/img/スライド14.PNG')); ?>" alt="" class="img-fluid">
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
                                                    <div id="carousel-example" class="carousel slide"
                                                        data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example" data-slide-to="1"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="<?php echo e(asset('/img/スライド13.PNG')); ?>" alt="" class="img-fluid slides-item6">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="<?php echo e(asset('/img/スライド14.PNG')); ?>" alt="" class="img-fluid slides-item7">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example"
                                                            role="button" data-slide="next">
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
                        <h5 class="modal-title" id="basicExampleModal">フォルダ</h5>
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
                                基礎的な部分はどの場面でも大事です。フォルダもデザインのひとつとして重要だと考えておきましょう。
                            </p>
                        </div>
                        <img src="<?php echo e(asset('/img/popup2.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                    <!-- modal body content -->

                    <!-- modal footer content -->
                    <div class="modal-footer">
                        <a href="../../index3" class="btn cont_btn_mas_dets">教材を確認する</a>
                        <a href="2" class="btn cont_btn_mas_dets_second">次に進む</a>
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

    <script src="<?php echo e(asset('/js/main.js')); ?>"></script>
</body>

</html>