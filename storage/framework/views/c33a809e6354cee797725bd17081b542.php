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
</head>

<body>
    <?php echo $__env->make('user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Tiến Đạt Hotel</h1>
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
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Chi tiết đơn hàng</h2>
                    </div>
                </div>
            </div>
            <table class="table" style="border: 1px solid #cdcdcd; box-shadow: #2b3e50">
                <p>Thông tin đã được gửi về email của bạn</p>
                <thead>
                <tr>
                    <th scope="col">Tên người đặt</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mã phòng</th>
                    <th scope="col">Số ngày thuê</th>
                    <th scope="col">Số tiền phải trả</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Thanh toán ngay</th>
                    <th scope="col">Back</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo e($hoadon->user); ?></td>
                    <td><?php echo e($hoadon->email); ?></td>
                    <td><?php echo e($hoadon->room_id); ?></td>
                    <td><?php echo e($hoadon->date_rent); ?></td>
                    <td><?php echo e($hoadon->money); ?></td>
                    <td><?php echo e($hoadon->phone); ?></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('hoadon.vnPay')); ?>"><?php echo csrf_field(); ?>
                            <button name="redirect" class="btn btn-success" type="submit">Thanh toán ngay</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="http://127.0.0.1:8000">Quay lại</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    
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








<?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/hoadon/detail.blade.php ENDPATH**/ ?>