<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php if(trim($__env->yieldContent('template_title'))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(config('app.name', Lang::get('titles.app'))); ?></title>
    <meta name="description" content="">
    <meta name="author" content="Jeremy Kenedy">
    <link rel="shortcut icon" href="/favicon.ico">

    
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <?php echo $__env->yieldContent('template_linked_fonts'); ?>

    
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('template_linked_css'); ?>

    
        

            
                
            
            
        
        

    

    
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
    </script>

    
        
    

    <?php echo $__env->yieldContent('head'); ?>

</head>
<body>
<div id="app">

    <?php echo $__env->make('partials.nav-lesson', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <main class="py-4">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo $__env->make('partials.form-status', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

</div>


<script src="<?php echo e(mix('/js/app.js')); ?>"></script>

<?php if(config('settings.googleMapsAPIStatus')): ?>
    <?php echo HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')); ?>

<?php endif; ?>

<?php echo $__env->yieldContent('footer_scripts'); ?>

</body>
</html>
