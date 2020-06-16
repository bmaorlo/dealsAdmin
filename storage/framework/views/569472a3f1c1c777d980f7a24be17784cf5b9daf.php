<form id="add-form" method="POST" action="<?php echo e(route('admin.special-date.update', $specialDate->id)); ?>">
    <div class="modal-body">
        <div class="container">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="row">
                <div class="form-group col-12">
                    <label>Name</label>
                    <input type="text" name="name"  value="<?php echo e($specialDate->name); ?>"  placeholder="Name" class="form-control" required/>
                </div>

                <div class="form-group col-12">
                    <label>From Date</label>
                    <input type="text" name="from_date" value="<?php echo e(date('m/d/Y', strtotime($specialDate->from_date))); ?>" class="form-control date" data-toggle="date-picker" data-single-date-picker="true">
                </div>

                <div class="form-group col-12">
                    <label>To Date</label>
                    <input type="text" name="to_date" value="<?php echo e(date('m/d/Y', strtotime($specialDate->to_date))); ?>"  class="form-control date" data-toggle="date-picker" data-single-date-picker="true">
                </div>


                <div class="form-group  col-12">
                    <label>Active</label>
                    <select class="form-control" name="active">
                        <option value="1" <?php echo e($specialDate->active?'selected':''); ?>>Active</option>
                        <option value="0" <?php echo e(!$specialDate->active?'selected':''); ?>>Inactive</option>
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

<script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
<?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/special-date/edit.blade.php ENDPATH**/ ?>