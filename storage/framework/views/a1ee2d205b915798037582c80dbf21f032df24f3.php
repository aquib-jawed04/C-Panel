<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h3>My Dashboard</h3>
                    <a href="/posts/create" class="btn btn-warning">Create New</a>
                    
                    <?php if(count($posts) > 0): ?>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($post->title); ?></td>
                                    <td><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <?php echo Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=>'pull-right']); ?>

                                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                            <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php else: ?>
                    <hr>    
                        <br>
                        <p>You have no post to show</p>
                    <?php endif; ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>