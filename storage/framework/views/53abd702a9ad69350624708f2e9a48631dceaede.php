

<?php $__env->startSection('content'); ?>

    <h1>Invitation envoyé par <?php echo e($organisateur); ?> </h1><br>
    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>

    <h3>Détail Cadeau: </h3>

    <h5> Titre Cadeau: <?php echo e($detailGift->Title); ?></h5>

    <h5>Prix: <?php echo e($detailGift->Price); ?></h5>
    <div>
        <img src="<?php echo e($detailGift->PhotoURL); ?>" style="width:340px;height:200px;" />
    </div>

    <div>
        <p>Merci de saisir le montant de votre contribution</p>
        <form action="<?php echo e(route('participationAccepte')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="organisateur" value=<?php echo e($organisateur); ?>>
            <input type="hidden" name="idUserG" value=<?php echo e($idUserG); ?>>
            <input type="hidden" name="idEvent" value=<?php echo e($idEvent); ?>>
            <label for="contribution">Montant: </label>
            <input type="number" name="contribution" value='0.00' min="1"><br><br>

            <button class="btn btn-dark" type="submit" value="valider">Valider</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TeamGiftVFinale\TeamGift6\resources\views/detailEvenement.blade.php ENDPATH**/ ?>