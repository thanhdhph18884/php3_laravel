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
                    <form action="<?php echo e(route('categories.index')); ?>" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm tên" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success float-right m-2">Thêm danh
                        mục</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>

                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <th scope="row"><?php echo e($i + 1); ?></th>
                                    <td><?php echo e($iteam->category_name); ?></td>
                                    <td><?php echo e($iteam->mota); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('categories.edit', $iteam->cate_id)); ?>"
                                            class="btn btn-warning">Edit</a>
                                        <a href="<?php echo e(route('categories.destroy', $iteam->cate_id)); ?>"
                                            onclick="return confirm('Bạn không được xóa danh mục vì nó xẽ ảnh hưởng tới các sản phẩm')"
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
    <span><?php echo e($categories->links()); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_laravel\resources\views/categories/list.blade.php ENDPATH**/ ?>