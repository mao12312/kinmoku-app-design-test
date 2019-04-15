

<?php echo $__env->make('partials.head-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>


<!-- header -->
<?php echo $__env->make('partials.nav-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- header -->


<!-- main -->
<main>
    <div class="container">

        <!-- title -->
        <div class="title-text">
            <h2>About</h2>
            <p>
                まだ見ぬCreativityを誰もが作り出す世界の創造
            </p>
        </div>
        <!-- title -->

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
</body>

</html>