
<?php $__env->startSection('content'); ?>

    <h1>Mes contributions</h1><br>

    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-outline-danger" style="float: right" type ="submit"> Déconnexion</button>
    </form>
   
    <form action="<?php echo e(route('listeEventsRecus', Session::get('user1'))); ?> " method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-outline-danger" style="float: right" type ="submit">Évenements Reçus</button>
      </form>
    <form action="<?php echo e(route('listeMesevenementorganise', Session::get('user'))); ?> " method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-outline-danger" style="float: right" type ="submit">Mes Évenements</button>
    </form>
   
    <table class="table table is-bordered">
        <thead>
            <tr>

                <th>Titre événement</th>
                <th class="text-center">Date événement</th>
                <th class="text-center">État</th>
                <th class="text-center">Contribution </th>

            </tr>
        </thead>


        <?php $__currentLoopData = $participationsAcceptes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($titre = app\models\Event::find($participation->EventID)->Title); ?></td>
                <td class="text-center"><?php echo e($titre = app\models\Event::find($participation->EventID)->DateOfEvent); ?></td>
                <td class="text-center"> accepté </td>
                <td class="text-center"><?php echo e($participation->Contribution); ?> $</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TeamGiften couleur\TeamGift6\resources\views/listeMescontributions.blade.php ENDPATH**/ ?>