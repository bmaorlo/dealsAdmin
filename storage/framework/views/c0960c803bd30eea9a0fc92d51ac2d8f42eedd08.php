<?php $__env->startSection('style'); ?>
    <style>
        .auth-fluid .auth-panel-form {
            max-width: 600px;
            border-radius: 0;
            z-index: 2;
            padding: 3rem 2rem;
            background-color: #ffffff;
            position: relative;
            width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="auth-fluid">
    <div class="auth-panel-form">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">
                <div class="auth-brand text-center text-lg-left">
                    <a href="/">
                        <span><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="App_logo"></span>
                    </a>
                </div>
                <h4 class="mt-0 mb-1">Registration</h4>
                <p class="text-muted mb-2">Don't have an account? Create your account hear</p>
                <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link  active">
                                            <i class="feather icon-home d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Register</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <i class="feather icon-user d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Profile (Optional)</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="home">
                                        
                                        <div class="row">
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="firstnaem">First Name</label>
                                                <input id="firstnaem" type="text" class="form-control"  name="firstname"  required autocomplete="firstname " autofocus placeholder="First Name">
                                            </div>
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="lastname">Last Name</label>
                                                <input id="lastname" type="lastname" class="form-control" name="lastname"  required autocomplete="lastname" placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="company">Company Name</label>
                                            <input id="company" type="text" class="form-control" name="company"  required autocomplete="company" placeholder="Company Name">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="username">User Name</label>
                                            <input id="username" type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus placeholder="User Name">
                                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="email">Email</label>
                                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Enter Email">

                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="password">Password</label>
                                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Enter password">

                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="password-confirm">Conform Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Conform Password" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="profile">
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="address">Address</label>
                                            <input id="address" type="text" class="form-control" name="address"   autocomplete="Address" autofocus placeholder="Address">
                                        </div>
                                        <div class="row">
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="country">Country</label>
                                                <input id="country" type="text"  placeholder="Country" class="form-control" name="country" >
                                            </div>
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="city">City</label>
                                                <input id="city" type="text" class="form-control" name="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="telnumber">Tel Number</label>
                                                <input id="telnumber" type="number"  placeholder="Tel Number" class="form-control" name="telnumber">
                                            </div>
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="whatsapp">Whatsapp</label>
                                                <input id="whatsapp" type="number"  placeholder="Whatsapp" class="form-control" name="whatsapp"  autocomplete="Whatsapp">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="postalcode">Postal Code</label>
                                                <input id="postalcode" type="text" class="form-control" name="postalcode"   autocomplete="postalcode" placeholder="Postal Code">
                                            </div><div class="form-group mb-2 col-6">
                                                <label class="mb-1" for="paypalmail">Paypal Mail</label>
                                                <input id="paypalmail" type="email"  placeholder="Paypal Mail" class="form-control" name="paypalmail"  autocomplete="Paypal Mail">
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="crnumber">Company Register Number</label>
                                            <input id="crnumber" type="text"  placeholder="Company Register Number" class="form-control" name="crnumber"  autocomplete="Company Register Number">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-1" for="barname">Bank Account Receiver Name</label>
                                            <input id="barname" type="text"  placeholder="Bank Account Receiver Name" class="form-control" name="barname" autocomplete="Bank Account Receiver Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="#!" class="text-muted">Terms &amp; Conditions</a></label>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit"> Register Now </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="<?php echo e(route('login')); ?>" class="text-muted ml-1"><b>Log In hear</b></a></p>
                </footer>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views\auth\register.blade.php ENDPATH**/ ?>