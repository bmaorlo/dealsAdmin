<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card sale-card mt-3">
        <div class="card-header bg-info text-white">
            <h5>Creat New Deal</h5>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('admin.deal.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-control" name="location_id">
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($location->id); ?>"><?php echo e($location->locationName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Out Bound Date</label>
                            <input type="text" name="outboundDate" class="form-control date" data-toggle="date-picker"   data-single-date-picker="true" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>In Bound Date</label>
                            <input type="text" name="inboundDate" class="form-control date" data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Package Deep Link URL</label>
                            <input type="text" name="packageDeeplinkUrl" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Name</label>
                            <input type="text" name="hotelName" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Room Board</label>
                            <input type="text" name="hotelRoomBoard" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Review Count</label>
                            <input type="number" name="hotelTrustYouReviewsReviewCount" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Review Score</label>
                            <input type="number" step="any"  name="hotelTrustYouReviewsReviewScore" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Reviews Image URL</label>
                            <input type="text" name="hotelTrustYouReviewsImageUrl" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Default Image</label>
                            <input type="text" name="hotelDefaultImg" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Take Off Hour</label>
                            <input type="text" name="flightDataTakeoffHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Landing Hour</label>
                            <input type="text" name="flightDataLandingHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Travel Duration Format</label>
                            <input type="text" name="flightDataTravelDurationFormat" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Nb Escales</label>
                            <input type="number" name="flightDataNbEscales" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data City From Airport Code</label>
                            <input type="text" name="flightDataCityFromAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data City To Airport Code</label>
                            <input type="text" name="flightDataCityToAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Take Off Hour</label>
                            <input type="text" name="flightDataInboundTakeoffHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Landing Hour</label>
                            <input type="text" name="flightDataInboundLandingHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Travel Duration Format</label>
                            <input type="text" name="flightDataInboundTravelDurationFormat" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound City From Airport Code</label>
                            <input type="text" name="flightDataInboundCityFromAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound City To Airport Code</label>
                            <input type="text" name="flightDataInboundCityToAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Active</label>
                            <select class="form-control" name="active">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <a href="<?php echo e(route('admin.deal.index')); ?>" class="btn btn-danger btn-sm" > Back </a>
                <button type="submit" class="btn btn-primary btn-sm"> Add </button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/deal/add.blade.php ENDPATH**/ ?>