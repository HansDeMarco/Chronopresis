<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-assets-path="<?php echo e(asset('assets/')); ?>"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title', 'Chronopresis'); ?></title>
    <link rel="icon" href="<?php echo e(asset('pictures/favicon.png')); ?>" type="image/x-icon">

    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/core.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/iconify-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datatable-custom.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom-sidebar.css')); ?>">
    

    
    <link rel="stylesheet" href="<?php echo e(asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('sb-admin-2/css/sb-admin-2.min.css')); ?>">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    
    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body id="page-top" class="font-sans antialiased">
    <div id="wrapper">
        
        <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        
        <div id="content-wrapper" class="d-flex flex-column">

            
            <div id="content" class="flex-grow-1">
                
                <?php echo $__env->make('layouts.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                
                <div class="container-fluid">
                    <?php if(isset($slot)): ?>
                        <?php echo e($slot); ?>

                    <?php else: ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    <?php endif; ?>
                </div>
            </div>
            
            
            <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
    </div>


    
    <script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    
    
    <script src="<?php echo e(asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb-admin-2/js/sb-admin-2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb-admin-2/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb-admin-2/js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('sb-admin-2/js/demo/chart-pie-demo.js')); ?>"></script>

    
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\absen\Chronopresis\resources\views/layouts/app.blade.php ENDPATH**/ ?>