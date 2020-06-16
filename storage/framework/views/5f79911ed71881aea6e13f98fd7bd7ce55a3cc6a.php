<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="card sale-card mt-3">
        <div class="card-header text-center d-flex justify-content-end">
            <div class="d-flex justify-content-end col-6"><h4>Location-Theme Table</h4></div>
            <div class="d-flex justify-content-end col-6"><button id="add-button" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i style="font-size:16px;" class="ion ion-md-add"></i>&nbsp;&nbsp;Add Location-Theme</button></div>
        </div>
        <div class="col-12 mt-3 mb-3" style="max-width: 1000px;">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="form-group">
                        <label>Filter By Location</label>
                        <select class="form-control" id="location">
                            <option value=""}>All Location</option>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($location->locationName); ?>"}><?php echo e($location->locationName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="form-group">
                        <label>Filter By Theme</label>
                        <select class="form-control" id="theme">
                            <option value=""}>All Themes</option>
                            <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($theme->name); ?>"}><?php echo e($theme->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <hr/>

            <table class="table table-bordered table-responsive full-width" id="location-theme-table">

                <thead>
                <tr>
                    <th width="5%">id</th>
                    <th width="40%">Location Name(Location id)</th>
                    <th width="40%">Theme Name(Theme id)</th>
                    <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($locationThemes)): ?>
                    <?php $__currentLoopData = $locationThemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locationTheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($locationTheme->id); ?></td>
                            <td><?php echo e($locationTheme->location->locationName); ?>(<?php echo e($locationTheme->location_id); ?>)</td>
                            <td><?php echo e($locationTheme->theme->name); ?>(<?php echo e($locationTheme->theme_id); ?>)</td>
                            <td>
                                <a class="btn btn-primary btn-sm text-white edit-location-theme-btn" data-location-theme-id="<?php echo e($locationTheme->id); ?>"><i class="feather icon-edit"></i> Edit</a>
                                <a class="btn btn-danger btn-sm text-white delete-location-theme-btn" data-location-theme-id="<?php echo e($locationTheme->id); ?>"><i class="feather icon-trash-2"></i>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No data</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="addModal" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="danger-header-modalLabel" style="display: none" aria-modal="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Add Location-Theme</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form id="add-form" method="POST" action="<?php echo e(route('admin.m-theme-location.store')); ?>">
                    <div class="modal-body">
                        <div class="container">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Location</label>
                                    <select class="form-control" name="location_id">
                                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($location->id); ?>"><?php echo e($location->locationName); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Theme</label>
                                    <select class="form-control" name="theme_id">
                                        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($theme->id); ?>"><?php echo e($theme->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button id="add-confirm-btn" type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="editModal" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="danger-header-modalLabel" style="display: none" aria-modal="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Update Location-Theme</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="edit-location-theme-form-container"></div>
            </div>
        </div>
    </div>

    <div id="deleteModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" style="display: none" aria-modal="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-danger">
                    <h4 class="modal-title" id="danger-header-modalLabel">Delete Location-Theme</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="mt-0">Are you really delete it?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="delete-confirm-btn" type="button" data-dismiss="modal" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {

            <?php if(count($locationThemes)>0): ?>
            $('#location-theme-table').DataTable({
                initComplete: function () {
                    this.api().columns().every( function (index) {
                        var that = this;
                        $( '#location').on( 'keyup change clear', function () {
                            if(index === 1){
                                if ( that.search() !== $(this).val() ) {
                                    that.search($(this).val()).draw();
                                }
                            }
                        });

                        $( '#theme').on( 'keyup change clear', function () {
                            if(index === 2){
                                if ( that.search() !== $(this).val() ) {
                                    that.search($(this).val()).draw();
                                }
                            }
                        });
                    } );
                }
            });
            let locationThemeId;
            let locationTheme;
            $(document).on('click', '.delete-location-theme-btn', function () {
                locationTheme = $(this).parents('tr');
                locationThemeId = $(this).data('location-theme-id');
                $('#deleteModel').modal('show');
                console.log(locationThemeId)
            })

            <?php endif; ?>

            $('#delete-confirm-btn').click(function () {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'DELETE',
                    url: `/admin/m-theme-location/${locationThemeId}`,
                    success: function (res) {
                        console.log(res);
                        locationTheme.remove();
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })
            })

            $(document).on('click', '.edit-location-theme-btn', function () {
                locationThemeId = $(this).data('location-theme-id');
                $.ajax({
                    type: 'get',
                    url: `/admin/m-theme-location/${locationThemeId}/edit`,
                    success: function (res) {
                        $('.edit-location-theme-form-container').html(res);
                        $('#editModal').modal('show');
                    },
                    error: function (err) {
                        console.log(err)
                    }
                })
            })

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/location-theme/location-theme.blade.php ENDPATH**/ ?>