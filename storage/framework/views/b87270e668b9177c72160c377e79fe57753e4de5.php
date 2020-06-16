<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card sale-card mt-3">
        <div class="card-header bg-info text-white">
            <h5>Creat New Deal</h5>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('admin.deal.update',$deal->id)); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-control" name="location_id">
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($location->id); ?>" <?php echo e($deal->location_id==$location->id?'selected':''); ?>><?php echo e($location->locationName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Out Bound Date</label>
                            <input type="text" name="outboundDate" value="<?php echo e(date('m/d/Y', strtotime($deal->outboundDate))); ?>" class="form-control date" data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>In Bound Date</label>
                            <input type="text" name="inboundDate" value="<?php echo e(date('m/d/Y', strtotime($deal->inboundDate))); ?>"  class="form-control date" data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number"  value="<?php echo e($deal->price); ?>" name="price" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Package Deep Link URL</label>
                            <input type="text"  value="<?php echo e($deal->packageDeeplinkUrl); ?>" name="packageDeeplinkUrl" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Name</label>
                            <input type="text"  value="<?php echo e($deal->hotelName); ?>" name="hotelName" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Room Board</label>
                            <input type="text"  value="<?php echo e($deal->hotelRoomBoard); ?>" name="hotelRoomBoard" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Review Count</label>
                            <input type="number"  value="<?php echo e($deal->hotelTrustYouReviewsReviewCount); ?>" name="hotelTrustYouReviewsReviewCount" min="0" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Review Score</label>
                            <input type="number" step="any"  value="<?php echo e($deal->hotelTrustYouReviewsReviewScore); ?>" name="hotelTrustYouReviewsReviewScore" min="0" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Trust You Reviews Image URL</label>
                            <input type="text"  value="<?php echo e($deal->hotelTrustYouReviewsImageUrl); ?>" name="hotelTrustYouReviewsImageUrl" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Hotel Default Image</label>
                            <input type="text" value="<?php echo e($deal->flightDataTakeoffHour); ?>" name="flightDataTakeoffHour" name="hotelDefaultImg" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Take Off Hour</label>
                            <input type="text"  value="<?php echo e($deal->flightDataTakeoffHour); ?>" name="flightDataTakeoffHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Landing Hour</label>
                            <input type="text"  value="<?php echo e($deal->flightDataLandingHour); ?>" name="flightDataLandingHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Travel Duration Format</label>
                            <input type="text"  value="<?php echo e($deal->flightDataTravelDurationFormat); ?>" name="flightDataTravelDurationFormat" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data Nb Escales</label>
                            <input type="number"  value="<?php echo e($deal->flightDataNbEscales); ?>" name="flightDataNbEscales" class="form-control" min="0" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data City From Airport Code</label>
                            <input type="text"  value="<?php echo e($deal->flightDataCityFromAirportCode); ?>" name="flightDataCityFromAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data City To Airport Code</label>
                            <input type="text"  value="<?php echo e($deal->flightDataCityToAirportCode); ?>" name="flightDataCityToAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Take Off Hour</label>
                            <input type="text"  value="<?php echo e($deal->flightDataInboundTakeoffHour); ?>" name="flightDataInboundTakeoffHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Landing Hour</label>
                            <input type="text"  value="<?php echo e($deal->flightDataInboundLandingHour); ?>" name="flightDataInboundLandingHour" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound Travel Duration Format</label>
                            <input type="text"  value="<?php echo e($deal->flightDataInboundTravelDurationFormat); ?>" name="flightDataInboundTravelDurationFormat" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound City From Airport Code</label>
                            <input type="text"  value="<?php echo e($deal->flightDataInboundCityFromAirportCode); ?>" name="flightDataInboundCityFromAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Flight Data In Bound City To Airport Code</label>
                            <input type="text"  value="<?php echo e($deal->flightDataInboundCityToAirportCode); ?>" name="flightDataInboundCityToAirportCode" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Active</label>
                            <select class="form-control" name="active">
                                <option value="1" <?php echo e($deal->active?'selected':''); ?>>Active</option>
                                <option value="0" <?php echo e(!$deal->active?'selected':''); ?>>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />
                <a href="<?php echo e(route('admin.deal.index')); ?>" class="btn btn-danger btn-sm" > Back </a>
                <button type="submit" class="btn btn-primary btn-sm"> Update </button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/deal/edit.blade.php ENDPATH**/ ?>