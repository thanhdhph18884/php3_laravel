<!-- resources/views/child.blade.php -->



<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm danh mục khách sạn</h1>
        <div class="container-fluid">
            <div class="row">
                <form action="<?php echo e(route('categories.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control" name="category_name" placeholder="nhập danh mục">
                        <?php if($errors->has('category_name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('category_name')); ?></span>
                        <?php endif; ?>
                        <label>Mô tả</label>
                        <textarea cols="100" rows="20" type="text" class="form-control" name="mota" placeholder="nhập mô tả">
                        </textarea>
                        <?php if($errors->has('mota')): ?>
                            <span class="text-danger"><?php echo e($errors->first('mota')); ?></span>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/categories/create.blade.php ENDPATH**/ ?>