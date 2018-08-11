<?php $__env->startSection('content'); ?>

<a class="btn btn-default"  href="/posts">Go Back</a>
<h1><?php echo e($post->title); ?></h1>
<img class="rounded float-left" style="width:10%" src="/storage/doc_type/<?php echo e($post->doc_type); ?>">
<br>
<br>
<div>
    <p><?php echo $post->body; ?></p>
</div>
    
<hr>
<?php if(!Auth::guest()): ?>
    <?php if(Auth::user()->id == $post->user_id): ?>
        <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a>

        <?php echo Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=>'pull-right']); ?>

            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

            <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

        <?php echo Form::close(); ?>

    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>