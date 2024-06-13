<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
</head>
<body>
<h1>Thanh toán thành công</h1>
<p>Mệnh giá: <?php echo e($vnp_Amount); ?></p>
<p>Mã ngân hàng: <?php echo e($vnp_BankCode); ?></p>
<p>Số giao dịch ngân hàng: <?php echo e($vnp_BankTranNo); ?></p>
<p>Hình thức thanh toán : <?php echo e($type); ?></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/user/success.blade.php ENDPATH**/ ?>