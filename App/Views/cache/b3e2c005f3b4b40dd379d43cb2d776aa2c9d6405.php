<?php $__env->startSection('content'); ?>
    <style>
        /* temporal styling--> move to css */
        .btn.btn-md {
            padding: 0.5rem 1.6rem;
            font-size: 0.9rem;
            font-weight: 500;
            /* font-weight: bold; */
        }

    </style>
    <h1>Product Categories</h1>



    <form action="" method="post" id='userForm'>
        <div class="form-row align-items-center">
            <div class="col col-md-3  my-1">
                <input type="text" class="form-control" placeholder="Buscar categoria">
            </div>
            <div class="col-auto md-1">
                <button type="submit" class="btn btn-primary btn-md mt-1 blue-gradient">Buscar</button>
            </div>

            <div class="col col-md-5  my-1">
                <input type="text" class="form-control" name="name" placeholder="Crear categoria">

            </div>
            <div class="col-auto md-1">
                <button  class="btn btn-primary btn-md mt-1 blue-gradient" id="ajaxcall">Crear</button>
            </div>

        </div>
    </form>

<?php echo $__env->make('admin.products.categoryTable', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>