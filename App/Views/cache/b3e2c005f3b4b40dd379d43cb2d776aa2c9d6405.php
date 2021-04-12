<?php $__env->startSection('content'); ?>
<h1>Product Categories</h1>
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Slug name</th>
          <th scope="col">Created at</th>
          <th scope="col">Actions</th>
          
        </tr>
      </thead>
      <tbody>
          <?php if(count($categories)): ?>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>

          <td><?php echo e($item->name); ?></td>
          <td><?php echo e($item->short_name); ?></td>
          <td><?php echo e($item->created_at->toFormattedDateString()); ?></td>  
          <td>
              <a href=""> <i class="fas fa-edit    "></i></a>
              <a href=""> <i class="fa fa-times" aria-hidden="true"></i></a>
          </td>
          <tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <p>no products found</p>
              
          <?php endif; ?>
          
      </tbody>
    </table>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>