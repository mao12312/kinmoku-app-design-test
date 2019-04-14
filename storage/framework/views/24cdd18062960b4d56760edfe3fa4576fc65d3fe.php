<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="logomark" href="#">
        <img src="<?php echo e(asset('/images/kinmoku-logo.svg')); ?>" alt="" class="logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-ellipsis-h"></i>
    </button>

    <div class="collapse navbar-collapse nav-list" id="navbarNav">
        <ul class="navbar-nav">
            <?php if(auth()->guard()->guest()): ?>
                <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(trans('titles.login')); ?></a></li>
                <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(trans('titles.register')); ?></a></li>
            <?php else: ?>
            <li class="nav-item text-uppercase">
                <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Home</a>
            </li>
            <li class="nav-item text-uppercase active">
                <a class="nav-link" href="<?php echo e(route('lesson-index2')); ?>">products</a>
            </li>
            
                
                    
                        
                    
                        
                    
                
            

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
                            <img src="<?php echo e(Auth::user()->profile->avatar); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="user-avatar-nav">
                        <?php else: ?>
                            
                            <i class="fas fa-user"></i>
                        <?php endif; ?>
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/profile/'.Auth::user()->name)); ?>">
                            <?php echo trans('titles.profile'); ?>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

