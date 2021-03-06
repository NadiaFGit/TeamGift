
<?php $__env->startSection('content'); ?>

    <h1 class="title" style="text-align:center;">Bienvenue <?php echo e($userG->FullName); ?></h1>

    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float: right" type="submit"> Déconnection</button>
    </form>
    <form action="<?php echo e(url('/deconnexion')); ?>" method="Get">
        <?php echo e(csrf_field()); ?>

        <button class="btn btn-dark" style="float:right;margin-right:20px;" type="submit"> Retour</button>
    </form>
    <br><br><br>

    <div class="">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-dark" href="<?php echo e(route('newevement', $userG->ID)); ?> ">Créer
                            un événement</a></h5>
                    <p class="card-text">Invitez vos amis à participer à un événement</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"><a class="btn btn-dark"
                            href="<?php echo e(route('listeEventsRecus', $userG->ID)); ?> ">Toutes les invitations reçus</a></h5>
                    <p class="card-text">Consultez toutes vos invitations que vous avez reçus de vos amis</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"> <a class="btn btn-dark"
                            href="<?php echo e(route('listeMescontributions', $userG->ID)); ?> ">Liste de mes contributions</a></h5>
                    <p class="card-text">Consultez vos participations détaillés avec votre contribution</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title"> <a class="btn btn-dark"
                        href="<?php echo e(route('listeMesevenementorganise', $userG->ID)); ?> ">Liste de mes événements organisés</a>
                </h5>
                <p class="card-text">Consultez le détails de vos événements que vous avez organisés</p>
            </div>
        </div>
    </div>
    </div>






    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\TeamGift_DernierevFinal\TeamGift6\resources\views/connexion/profile.blade.php ENDPATH**/ ?>