<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card sale-card mt-3">
        <div class="card-header text-center d-flex justify-content-end">
            <div class="d-flex justify-content-end col-6"><h4>Deals Table</h4></div>
            <div class="d-flex justify-content-end col-6"><a  href="<?php echo e(route('admin.deal.create')); ?>" class="btn btn-primary" ><i style="font-size:16px;" class="ion ion-md-add"></i>&nbsp;&nbsp;Add New Deal</a></div>
        </div>
        <div class="col-12 mt-3 mb-3 table-responsive p-3" >
            <div class="col-lg-4 col-md-6 col-12" style="display: flex; justify-content: space-around">
                <div class="form-group">
                    <label>Filter By Location</label>
                    <select class="form-control" id="location">
                        <option value=""}>All Location</option>
                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($location->locationName); ?>"}><?php echo e($location->locationName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Filter By Active</label>
                    <select class="form-control" id="active">
                        <option value=""}>All</option>
                        <option value="Yes"}>Active</option>
                        <option value="No"}>Inactive</option>
                    </select>
                </div>
            </div>
            <hr/>
            <table class="table dt-responsive table-bordered nowrap" id="deal-table">

                <thead>
                    <tr>
                        <th style="width: 5%">id</th>
                        <th style="width: 5%">Location Name</th>
                        <th style="width: 5%">Out Bound Date</th>
                        <th style="width: 5%">In Bount Date</th>
                        <th style="width: 5%">Price</th>
                        <th style="width: 5%">Hotel Name</th>
                        <th style="width: 5%">Hotel RoomBoard</th>
                        <th style="width: 5%">Hotel Trust You Review Count</th>
                        <th style="width: 5%" >Active</th>
                        <th>Hotel Trust You Review Score</th>
                        <th>hotelTrustYouReviewsImageUrl</th>
                        <th>hotelDefaultImg</th>
                        <th>flightDataTakeoffHour</th>
                        <th>flightDataLandingHour</th>
                        <th>flightDataTravelDurationFormat</th>
                        <th>flightDataNbEscales</th>
                        <th>flightDataCityFromAirportCode</th>
                        <th>flightDataCityToAirportCode</th>
                        <th>flightDataInboundTakeoffHour</th>
                        <th>flightDataInboundLandingHour</th>
                        <th>flightDataInboundTravelDurationFormat</th>
                        <th>flightDataInboundCityFromAirportCode</th>
                        <th>flightDataInboundCityToAirportCode</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($deals)): ?>
                    <?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($deal->id); ?></td>
                            <td><?php echo e($deal->location->locationName); ?></td>
                            <td style="background-color: <?php echo e(time()>strtotime($deal->outboundDate)?'yellow':'transparent'); ?>" ><?php echo e(date('d/m/Y', strtotime($deal->outboundDate))); ?></td>
                            <td style="background-color: <?php echo e(time()>strtotime($deal->inboundDate)?'yellow':'transparent'); ?>"><?php echo e(date('d/m/Y', strtotime($deal->inboundDate))); ?></td>
                            <td><?php echo e($deal->price); ?></td>
                            <td><?php echo e($deal->hotelName); ?></td>
                            <td><?php echo e($deal->hotelRoomBoard); ?></td>
                            <td><?php echo e($deal->hotelTrustYouReviewsReviewCount); ?></td>
                            <td>
                                <?php if($deal->active): ?>
                                    <span class="badge badge-success">Active</span>
                                    <span hidden>Yes</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Inactive</span>
                                    <span hidden>No</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($deal->hotelTrustYouReviewsReviewScore); ?></td>
                            <td><?php echo e($deal->hotelTrustYouReviewsImageUrl); ?></td>
                            <td><?php echo e($deal->hotelDefaultImg); ?></td>
                            <td><?php echo e($deal->flightDataTakeoffHour); ?></td>
                            <td><?php echo e($deal->flightDataLandingHour); ?></td>
                            <td><?php echo e($deal->flightDataTravelDurationFormat); ?></td>
                            <td><?php echo e($deal->flightDataNbEscales); ?></td>
                            <td><?php echo e($deal->flightDataCityFromAirportCode); ?></td>
                            <td><?php echo e($deal->flightDataCityToAirportCode); ?></td>
                            <td><?php echo e($deal->flightDataInboundTakeoffHour); ?></td>
                            <td><?php echo e($deal->flightDataInboundLandingHour); ?></td>
                            <td><?php echo e($deal->flightDataInboundTravelDurationFormat); ?></td>
                            <td><?php echo e($deal->flightDataInboundCityFromAirportCode); ?></td>
                            <td><?php echo e($deal->flightDataInboundCityToAirportCode); ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm text-white" href="<?php echo e(route('admin.deal.edit', $deal->id)); ?>"><i class="feather icon-edit"></i> Edit</a>
                                <a class="btn btn-danger btn-sm text-white delete-deal-btn" data-deal-id="<?php echo e($deal->id); ?>"><i class="feather icon-trash-2"></i>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="25" class="text-center">No data</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="deleteModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" style="display: none" aria-modal="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-danger">
                    <h4 class="modal-title" id="danger-header-modalLabel">Delete Deal</h4>
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
        <?php if(count($deals)>0): ?>
            $('#deal-table').DataTable({
                initComplete: function () {
                    this.api().columns().every( function (index) {
                        var that = this;
                        $( '#location').on( 'keyup change clear', function () {
                            if(index === 1){
                                if ( that.search() !== $(this).val() ) {
                                    that.search($(this).val()).draw();
                                }
                            }
                        })
                        $( '#active').on( 'change', function () {
                            if(index === 8){
                                if ( that.search() !== $(this).val() ) {
                                    that.search($(this).val()).draw();
                                }
                            }
                        });
                    } );
                }
            });
        <?php endif; ?>
        let dealId;
        let deal;
        $(document).on('click','.delete-deal-btn', function (e){
            e.preventDefault();
            deal = $(this).parents('tr');
            dealId = $(this).data('deal-id');
            $('#deleteModel').modal('show');
            console.log(locationId)
        })

        $('#delete-confirm-btn').click(function () {
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type:'DELETE',
                url:`/admin/deal/${dealId}`,
                success:function (res) {
                    console.log(res);
                    deal.remove();
                },
                error:function (error) {
                    console.log(error)
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views/pages/deal/deal.blade.php ENDPATH**/ ?>