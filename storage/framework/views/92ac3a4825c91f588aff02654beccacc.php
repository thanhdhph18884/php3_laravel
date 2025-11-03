<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/flaticon.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/magnific-popup.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('sona-master/css/style.css')); ?>" type="text/css">
    <style>
        .aside {
            width: 160px;
            background-color: rgb(230, 210, 210);
        }
    </style>
</head>

<body>
    <?php echo $__env->make('user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Thanhdhph18884 Hotel</h1>
                        <p>Phục vụ tận tình chu đáo với các dịch vụ đẳng cấp, xứng đáng với số tiền
                            mà bạn bỏ ra
                        </p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('sona-master/img/hero/hero-1.jpg')); ?>"></div>
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('sona-master/img/hero/hero-2.jpg')); ?>"></div>
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('sona-master/img/hero/hero-3.jpg')); ?>"></div>
            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hs-item set-bg" data-setbg="<?php echo e(asset($iteam->images)); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Danh mục khách sạn</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            <i class="flaticon-036-parking"></i>
                            <h4><?php echo e($iteam->category_name); ?></h4>
                            <p>
                                <?php echo e($iteam->mota); ?>

                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($categories->links()); ?>

            </div>
        </div>
    </section>
    <?php echo $__env->make('user.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="testimonial-section spad">
        <div class="container">
        </div>
    </section>

    
    <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Js Plugins -->
    <script src="<?php echo e(asset('sona-master/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sona-master/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\php3_laravel\resources\views/user/master.blade.php ENDPATH**/ ?>