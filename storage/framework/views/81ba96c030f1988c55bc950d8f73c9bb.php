<!-- resources/views/child.blade.php -->



<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm mã khuyến mại</h1>
        <div class="container-fluid">
            <div class="row">

                <br>
                <form action="<?php echo e(route('sale.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Tên mã khuyến mại</label>
                        <input type="text" class="form-control" name="name" placeholder="nhập danh mục">
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control" name="start_date" placeholder="nhập danh mục">
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control" name="end_date" placeholder="nhập danh mục">
                    </div>
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="<?php echo e(route('sale.index')); ?>" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/sales/create.blade.php ENDPATH**/ ?>