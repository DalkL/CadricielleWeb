
<?php $__env->startSection('title','Étudiant'); ?>
<?php $__env->startSection('content'); ?>
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3"><?php echo e($etudiant->nom); ?></h2>
        <div class="col mx-5 mt-2">
            <p class="container">
                Nom: <?php echo e($etudiant->nom); ?><br>
                Adresse: <?php echo e($etudiant->adress); ?><br>
                Téléphone: <?php echo e($etudiant->phone); ?><br>
                Courriel: <?php echo e($etudiant->email); ?><br>
                Date de Naissance: <?php echo e($etudiant->date_de_naissance); ?><br>
                Ville: <?php echo e($etudiant->ville_id); ?><br>
            </p>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CadricielleWeb\Travaux\TP1\Maisonneuve2194471\resources\views/etudiant/show.blade.php ENDPATH**/ ?>