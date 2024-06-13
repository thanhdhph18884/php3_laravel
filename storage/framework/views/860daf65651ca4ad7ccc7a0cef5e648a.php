<!-- resources/views/child.blade.php -->



<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" action="<?php echo e(route('categories.update', $category->cate_id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Sửa danh mục</label>
                        <input type="text" class="form-control" name="category_name" placeholder="nhập danh mục"
                            value="<?php echo e($category->category_name); ?>">
                        <?php if($errors->has('category_name')): ?>
                            <p class="text-danger"><?php echo e($errors->first('category_name')); ?></p>
                        <?php endif; ?>
                    </div>
                    <label>Sửa mô tả</label>    
                    <textarea cols="100" rows="20" type="text" class="form-control" name="mota" placeholder="nhập mô tả"
                        value="<?php echo e($category->mota); ?>">
                    </textarea>
                    <?php if($errors->has('mota')): ?>
                        <p class="text-danger"><?php echo e($errors->first('mota')); ?></p>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/categories/edit.blade.php ENDPATH**/ ?>