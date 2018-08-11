<?php $__env->startSection('content'); ?>

    <h1>Posts</h1>
    <?php if(!Auth::guest()): ?>
         <?php if(count($posts) > 0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                        <img class="rounded float-left" src="/storage/doc_type/<?php echo e($post->doc_type); ?>">

                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php else: ?>
            <p>No Post Found.</p>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>