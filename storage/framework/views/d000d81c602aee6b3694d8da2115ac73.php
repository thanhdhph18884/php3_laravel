<!-- resources/views/child.blade.php -->



<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm 1 banner mới</h1>
        <div class="container-fluid">
            <div class="row">
                <form action="<?php echo e(route('banner.store')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Tên banner</label>
                        <input type="text" class="form-control" name="name" placeholder="tên banner">
                        <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="images">Ảnh</label>
                        <input type="file" class="form-control" name="images">
                        <?php if($errors->has('images')): ?>
                            <span class="text-danger"><?php echo e($errors->first('images')); ?></span>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="<?php echo e(route('banner.index')); ?>" class="btn btn-success">danh sách banner đang có</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/banners/create.blade.php ENDPATH**/ ?>