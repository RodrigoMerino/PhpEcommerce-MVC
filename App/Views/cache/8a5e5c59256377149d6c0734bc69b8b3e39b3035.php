
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
        
<h3> <?php echo $links; ?></h3>
    </div>