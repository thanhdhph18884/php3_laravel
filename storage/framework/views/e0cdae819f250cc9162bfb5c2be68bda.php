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
                <div class="col-md-12">
                    <a href="<?php echo e(route('sale.create')); ?>" class="btn btn-success float-right m-2">Thêm mã khuyến mại</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Mã khuyến mại</th>
                                <th scope="col">Tên khuyến mại</th>
                                <th scope="col">áp dụng từ ngày</th>
                                <th scope="col">Hết hạn ngày</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <th scope="row"><?php echo e($i + 1); ?></th>
                                    <td><?php echo e($iteam->name); ?></td>
                                    <td><?php echo e($iteam->start_date); ?></td>
                                    <td><?php echo e($iteam->end_date); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('sale.edit', $iteam->sale_id)); ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo e(route('sale.destroy', $iteam->sale_id)); ?>"
                                            onclick="return confirm('Ban co muon xoa khong?')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
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
    <span><?php echo e($sales->links()); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_laravel\resources\views/sales/list.blade.php ENDPATH**/ ?>