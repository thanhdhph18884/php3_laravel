

<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">Ngày tạo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($iteam->id); ?></td>
                                    <td><?php echo e($iteam->name); ?></td>
                                    <td><?php echo e($iteam->email); ?></td>
                                    <td style="width: 50%"><?php echo e($iteam->password); ?></td>
                                    <td><?php echo e($iteam->role); ?></td>
                                    <td><?php echo e($iteam->created_at); ?></td>
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
    <span><?php echo e($user->links()); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/user/list.blade.php ENDPATH**/ ?>