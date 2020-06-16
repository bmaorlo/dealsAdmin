<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'ERP Project')); ?></title>


    <!-- Summernote css -->

    <link href="<?php echo e(asset('assets/css/vendor/dataTables.bootstrap4.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/vendor/responsive.bootstrap4.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/vendor/buttons.bootstrap4.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/vendor/select.bootstrap4.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/style.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <?php echo $__env->yieldContent('style'); ?>
    <style>
        th, td{
            text-align: center!important;
        }

        tfoot th{
            padding: 0!important;
        }
    </style>
</head>

<body>
    <main>
        <div class="wrapper">
            <?php echo $__env->make('includes.dashboard.left-side-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('includes.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content-page">
                <div class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </main>
</body>
    <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/toastr/toastr.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/vendor/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.select.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    <script>
        <?php if(count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error('<?php echo e($error); ?>')
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(Session::get('success')): ?>
        toastr.success('<?php echo e(Session::pull('success')); ?>')
        <?php endif; ?>
    </script>
</html>
<?php /**PATH C:\xampp\htdocs\deals\resources\views/layouts/admin.blade.php ENDPATH**/ ?>