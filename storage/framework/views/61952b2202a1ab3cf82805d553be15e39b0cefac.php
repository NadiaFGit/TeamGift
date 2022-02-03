
<?php $__env->startSection('content'); ?>

    <h1>Mes participations acceptés</h1>
    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type ="submit"> Déconnection</button>
    </form>
   

    <table class="table table is-bordered">
        <thead>
            <tr>
                <th>Titre événement</th>
                <th>Date événement</th>
                <th>État</th>
                <th>Contribution</th>
            </tr>
        </thead>

        <?php $__currentLoopData = $participationsAcceptes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($titre = app\models\Event::find($participation->EventID)->Title); ?></td>
                <td><?php echo e($titre = app\models\Event::find($participation->EventID)->DateOfEvent); ?></td>
                <td> accepté </td>
                <td><?php echo e($participation->Contribution); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TeamGiftVFinale\TeamGift6\resources\views/listeparticipationAccepter.blade.php ENDPATH**/ ?>