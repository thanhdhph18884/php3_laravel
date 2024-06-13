

<?php $__env->startSection('title'); ?>
    <title>Admin</title>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('rooms.update', $detail->room_id)); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Ảnh phòng</label>
                        <img src=" <?php echo e(asset($room->images)); ?>" style="width:400px; height:300px" alt="">

                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="description" value="<?php echo e(old('description', $detail->description)); ?>">

                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea cols="100" rows="20" class="form-control <?php $__errorArgs = ['mota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mota"><?php echo e(old('mota', $detail->mota)); ?></textarea>
                        </textarea>

                    </div>
                    <div class="form-group">
                        <label>Giá phòng / 1 day</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price"
                            value="<?php echo e(old('price', $detail->price)); ?>">

                    </div>
                    <div class="form-group">
                        <label>Thuộc danh mục</label>
                        <select name="cate_id" class="form-control <?php $__errorArgs = ['cate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <option value="">-- Chọn danh mục --</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->cate_id); ?>" <?php if(old('cate_id', $detail->cate_id) == $item->cate_id): ?> selected <?php endif; ?>>
                                    <?php echo e($item->category_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <a href="<?php echo e(route('rooms.index')); ?>" class="btn btn-success">Danh sách phòng</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/rooms/detail.blade.php ENDPATH**/ ?>