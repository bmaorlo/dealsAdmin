<form id="add-form" method="POST" action="<?php echo e(route('admin.m-theme-location.update',['m_theme_location'=>$locationTheme->id])); ?>">
    <div class="modal-body">
        <div class="container">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="form-group col-12">
                    <label>Location</label>
                    <select class="form-control" name="location_id">
                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($location->id); ?>" <?php echo e($locationTheme->location_id==$location->id?'selected':''); ?>><?php echo e($location->locationName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>Theme</label>
                    <select class="form-control" name="theme_id">
                        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($theme->id); ?>"  <?php echo e($locationTheme->theme_id==$theme->id?'selected':''); ?>><?php echo e($theme->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button id="add-confirm-btn" type="submit" class="btn btn-info">Update</button>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/location-theme/edit.blade.php ENDPATH**/ ?>