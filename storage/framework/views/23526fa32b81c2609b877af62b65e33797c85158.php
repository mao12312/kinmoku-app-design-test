<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <!-- goole fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Noto+Sans+JP" rel="stylesheet">

    <!-- Font awesome -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>近もく会 | Products | Show</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/iziModal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    


    <!-- jquery -->
    <script src="<?php echo e(asset('/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- javascript -->
    <script type="text/javascript" src="<?php echo e(asset('/js/footerFixed.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/iziModal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/slick.min.js')); ?>"></script>

    
        
    

    <style type="text/css">
        <?php echo $__env->yieldContent('template_fastload_css'); ?>

            <?php if(Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0)): ?>
                .user-avatar-nav {
            background: url(<?php echo e(Gravatar::get(Auth::user()->email)); ?>) 50% 50% no-repeat;
            background-size: auto 100%;
        }
        <?php endif; ?>

    </style>

</head>