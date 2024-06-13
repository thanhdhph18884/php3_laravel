 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Web Thành</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">


             </div>
             <div class="info">
                 <a href="#" class="d-block">Trương tiến Đạt</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Danh mục khách sạn
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('categories.index')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách danh mục </p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open ">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt "></i>
                         <p>
                             Khách sạn
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('rooms.index')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách phòng </p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Khuyến mại
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('sale.index')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách các mã khuyến mại</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Banner
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('banner.index')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách banner</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Hóa đơn
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('hoadon.index')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Khách hàng đã đặt hàng</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Khách hàng
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?php echo e(route('user.list')); ?>" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách khách hàng</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Thống kê
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
<?php /**PATH C:\xampp\htdocs\asm_thanh18884_laravel\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>