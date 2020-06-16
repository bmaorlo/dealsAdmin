<form id="add-form" method="POST" action="<?php echo e(route('admin.theme.update', $theme->id)); ?>">
    <div class="modal-body">
        <div class="container">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="form-group col-12">
                    <label>Theme Name</label>
                    <input type="text" value="<?php echo e($theme->name); ?>" name="name" placeholder="Theme Name" class="form-control" required/>
                </div>
                <div class="form-group col-12">
                    <label>Active</label>
                    <select class="form-control" name="active">
                        <option value="1" <?php echo e($theme->active?'selected':''); ?>>Active</option>
                        <option value="0" <?php echo e(!$theme->active?'selected':''); ?>>Inactive</option>
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
<?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/theme/edit.blade.php ENDPATH**/ ?>