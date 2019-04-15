<?php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

?>

<div class="card">
    <div class="card-header <?php if (Auth::check() && Auth::user()->hasRole('admin', true)): ?> bg-secondary text-white <?php endif; ?>">

        ようこそ <?php echo e(Auth::user()->name); ?>


        
            
                
            
        
            
                
            
        

    </div>
    <div class="card-body">
        <h2 class="lead">
            <?php echo e(trans('auth.loggedIn')); ?>

        </h2>
        
            
        
        
            
        
        
            
        
        <a href="<?php echo e(route('welcome')); ?>">lessonへ</a>
        
            
                
            
        

        

        
            
                
                    
                       
                    
                    
                       
                    
                
            
        

        

        
            
            
                
            

            
                
            

            
                
            

            
                
            

            
                
            
        

        

            

            
                
                
                    
                        
                    
                

                
                    
                        
                    
                

                
                    
                        
                    
                

                
                    
                        
                    
                

            

        

    </div>
</div>
