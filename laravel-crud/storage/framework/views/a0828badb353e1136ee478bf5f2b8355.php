<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Show Product</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <?php echo e($product->name); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            <?php echo e($product->detail); ?>

        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/de-crud/laravel-crud/resources/views/products/show.blade.php ENDPATH**/ ?>