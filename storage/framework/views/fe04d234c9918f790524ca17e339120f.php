<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iteam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4" style="margin-left:100px; margin-botton:-50px;">
                        <br>
                        <div class="room-item">
                            <img src="<?php echo e(asset($iteam->images)); ?>" style="width:500px; height:340px" alt="">
                            <div class="ri-text">
                                <h4>Premium King Room</h4>
                                <h3><?php echo e(number_format($iteam->price, 0, ',', '.')); ?><span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="<?php echo e(route('detail', ['id' => $iteam->room_id])); ?>" class="primary-btn"
                                    style="color:rgb(0, 30, 255)">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div style="margin-left: 550px; margin-botton: -100px;">
                    <?php echo e($rooms->links()); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\php3_laravel\resources\views/user/content.blade.php ENDPATH**/ ?>