<div class="room-booking">
    <h3>Đặt phòng tại đây</h3>
    <p id="success-message" style="display:none"></p>
    <form method="POST" action="<?php echo e(route('hoadon.store')); ?>" onsubmit="addcart(event)">
        <?php echo csrf_field(); ?>
        <div class="check-date">
            <label for="date-out">Tên khách hàng</label>
            <input type="text" name="name" />
            <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>
        <div class="check-date">
            <label for="date-out">Email</label>
            <input type="email" name="email" />
            <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>
        <div class="check-date">
            <label for="date-in">Mã phòng</label>
            <input type="text" name="room_id" value="<?php echo e($rooms->room_id); ?>">
            <?php if($errors->has('room_id')): ?>
                <span class="text-danger"><?php echo e($errors->first('room_id')); ?></span>
            <?php endif; ?>
        </div>
        <div class="check-date">
            <label for="date-in">Ngày bắt đầu</label>
            <input type="date" name="date_in" onchange="updatePrice()" />
            <?php if($errors->has('date_in')): ?>
                <span class="text-danger"><?php echo e($errors->first('date_in')); ?></span>
            <?php endif; ?>
        </div>

        <div class="check-date">
            <label for="date-out">Ngày kết thúc</label>
            <input type="date" name="date_out" onchange="updatePrice()" />
            <?php if($errors->has('date_out')): ?>
                <span class="text-danger"><?php echo e($errors->first('date_out')); ?></span>
            <?php endif; ?>
        </div>
        <div class="check-date">
            <label for="date-in"> tổng ngày thuê</label>
            <input type="text" name="num_of_days" id="num_of_days" readonly />
        </div>
        <div class="check-date">
            <label for="date-out">giá thuê</label>
            <input type="text" name="price" id="price" onchange="updatePrice()"
                value=<?php echo e(number_format($rooms->price, 0, ',', '.')); ?> />
            <?php if($errors->has('price')): ?>
                <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
            <?php endif; ?>
        </div>
        <div class="check-date">
            <label for="date-out">Số điện thoại</label>
            <input type="number" name="phone" id="phone"/>
            <?php if($errors->has('phone')): ?>
                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
            <?php endif; ?>
        </div>

        <div class="check-date">
            <label for="">Bạn phải kiểm tra kỹ thông tin.</label>
        </div>
        <br>
        <br>
        <button type="submit">
            Đặt ngay
        </button>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/hoadon/create.blade.php ENDPATH**/ ?>