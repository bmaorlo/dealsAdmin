<div class="left-side-menu">
 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 937px;"><div class="slimscroll-menu active" style="overflow: hidden; width: auto; height: 937px; margin-top: 50px">
     <!-- Logo content end -->
     <!-------------------------------------->
    <div class="sidenav-user">
        <h4 class="mb-1 mt-0"><?php echo e(auth()->user()->username); ?></h4>
        <img src="<?php echo e(asset('assets/images/users/avatar.png')); ?>" alt="" class="rounded-circle user-photo-image">
    </div>
    <!-------------------------------------->
    <!-- Menu link start -->
    <ul class="metismenu side-nav in">
        <li class="menu-item">
            <a href="<?php echo e(route('admin.product')); ?>" class="menu-link">
                <i class="feather icon-box "></i>
                <span>잔고표</span>
                <span id="all-parts-counter" class="badge badge-primary-lighten badge-pill float-right mr-3"></span>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('admin.import')); ?>" class="menu-link">
                <i class="feather icon-box "></i>
                <span>입고표</span>
                <span id="all-parts-counter" class="badge badge-primary-lighten badge-pill float-right mr-3"></span>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('admin.export')); ?>" class="menu-link">
                <i class="feather icon-box "></i>
                <span>출고표</span>
                <span id="all-parts-counter" class="badge badge-primary-lighten badge-pill float-right mr-3"></span>
            </a>
        </li>

     </ul>
     <!-- Menu link end -->
     <!-------------------------------------->

     <div class="clearfix"></div>
 </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 642.73px;"></div><div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</div>

<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1"></i>
                    <h4 class="mt-2">Oh snap!</h4>
                    <p class="mt-3" id="faild-message"></p>
                    <button type="button" class="btn btn-secondary my-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\deals\resources\views\includes\dashboard\left-side-menu.blade.php ENDPATH**/ ?>