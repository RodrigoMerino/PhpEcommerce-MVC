
    <div class="table-responsive" id="loaded">
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

                            <td><?php echo e($item['name']); ?></td>
                            <td><?php echo e($item['format_name']); ?></td>
                            <td><?php echo e($item['added']); ?></td> 
                            
                            
                            <td>
                                <a href="" data-toggle="modal" data-target="#basicExampleModal" > <i class="fas fa-edit    "></i></a>
                                <a href=""> <i class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        <tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>no products found</p>

                <?php endif; ?>

            </tbody>
        </table>
        
<h3> <?php echo $links; ?></h3>
    </div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal" >Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>