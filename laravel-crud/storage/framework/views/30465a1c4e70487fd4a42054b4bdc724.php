<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Laravel 8 CRUD</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-success" href="<?php echo e(route('products.create')); ?>"> Create New Product</a>
        </div>
    </div>
</div>
<br>
<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->id); ?></td>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->detail); ?></td>
        <td>
            <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                <a class="btn btn-info" href="<?php echo e(route('products.show',$product->id)); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php echo e($products->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/de-crud/laravel-crud/resources/views/products/index.blade.php ENDPATH**/ ?>