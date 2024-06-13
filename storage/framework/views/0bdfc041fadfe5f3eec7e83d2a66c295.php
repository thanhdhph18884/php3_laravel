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
                    <form action="<?php echo e(route('rooms.index')); ?>" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm giá" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo e(route('rooms.create')); ?>" class="btn btn-success float-right m-2">Thêm phòng</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">ảnh</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Gía phòng</th>
                                <th scope="col">thuộc danh mục</th>
                                <th scope="col">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <th scope="row"><?php echo e($i + 1); ?></th>
                                    <td>
                                        <a href="<?php echo e(route('rooms.detail', $iteam->room_id)); ?>">
                                            <img style="width:150px; height:80px" src="<?php echo e(asset($iteam->images)); ?>"
                                                alt="ảnh"></a>
                                    </td>
                                    <td><?php echo e($iteam->description); ?></td>
                                    <td><?php echo e(number_format($iteam->price, 0, ',', '.')); ?> VNĐ</td>
                                    <td><?php echo e($iteam->categories?->category_name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('rooms.edit', $iteam->room_id)); ?>"
                                            class="btn btn-warning">Edit</a>
                                        <a href="<?php echo e(route('rooms.destroy', $iteam->room_id)); ?>"
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
    <span><?php echo e($rooms->links()); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/rooms/list.blade.php ENDPATH**/ ?>