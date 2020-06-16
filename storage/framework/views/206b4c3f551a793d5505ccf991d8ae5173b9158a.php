<?php $__env->startSection('style'); ?>
    <style>
        .card:hover{
            box-shadow: 0 0 10px 1px #0000007f;
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <h1>Dashboard</h1>

    <div class="row mt-5">
        <div class="col-xl-3 col-md-6 ">
            <a href="<?php echo e(route('admin.location.index')); ?>" class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="feather dripicons-location display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0"><?php echo e($locationCount); ?></h2>
                            <p class="text-primary mb-0">Locations</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <a href="<?php echo e(route('admin.theme.index')); ?>" class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-checkbox-multiple-blank display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0"><?php echo e($themeCount); ?></h2>
                            <p class="text-primary mb-0">Themes</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <a  href="<?php echo e(route('admin.m-theme-location.index')); ?>" class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="feather icon-box display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0"><?php echo e($locationThemeCount); ?></h2>
                            <p class="text-primary mb-0">Location-Themes</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <a  href="<?php echo e(route('admin.special-date.index')); ?>" class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-calendar-star display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0"><?php echo e($specialDateCount); ?></h2>
                            <p class="text-primary mb-0">Special Dates</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <a  href="<?php echo e(route('admin.deal.index')); ?>" class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-camera-image display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0"><?php echo e($dealCount); ?></h2>
                            <p class="text-primary mb-0">Deals</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>