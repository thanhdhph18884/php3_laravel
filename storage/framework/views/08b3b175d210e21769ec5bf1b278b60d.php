<!-- resources/views/child.blade.php -->



<?php $__env->startSection('title'); ?>
    <title>Admin</title>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <h1>Đơn hàng bạn vừa đặt đây</h1>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Người đặt phòng</th>
                                <th scope="col">email người đặt</th>
                                
                                <th scope="col">Số ngày thuê</th>
                                <th scope="col">Số tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $hoadon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($i + 1); ?></th>
                                    <td><?php echo e($iteam->user); ?></td>
                                    <td><?php echo e($iteam->email); ?></td>
                                    
                                    <td><?php echo e($iteam->date_rent); ?></td>
                                    <td><?php echo e($iteam->money); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/hoadon/list.blade.php ENDPATH**/ ?>