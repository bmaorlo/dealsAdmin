<?php $__currentLoopData = $part; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr tag=<?php echo e($item); ?>>
    <td><?php echo e($item->name); ?></td>
    <td><img src="<?php echo e(asset('assets/images/parts/'.'/'.$item->image1)); ?>" alt="part Image" style="width:50px;"></td>
    <td><?php echo e(str_limit($item->part_info, 20)); ?></td>
    <td><?php echo e($item->brand->title); ?></td>
    <td><?php echo e($item->model->name); ?></td>
    <td><?php echo e($item->category->name); ?></td>
    <td><?php echo e($item->qtystock); ?></td>
    <td><?php echo e($item->price); ?></td>
    <td><?php echo e($item->condition); ?></td>
    <td>
    <?php if($item->sale): ?>
      <span class="badge badge-danger">Sale</span>
    <?php endif; ?>
    <?php if($item->tested): ?>
      <span class="badge badge-success">Tested</span>
    <?php endif; ?>
    </td>
    <td>
    <a tag=<?php echo e($item->id); ?> href="#!" class="edit-usrpart btn btn-icon btn-primary mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="feather icon-edit-2"></i></a>
    <a tag="<?php echo e($item->id); ?>" href="#!" class="delete-user-part btn btn-icon btn-danger mr-1" data-toggle="tooltip" title="" data-original-title="Delete"><i class="feather icon-trash-2"></i></a>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\deals\resources\views\includes\user\part.blade.php ENDPATH**/ ?>