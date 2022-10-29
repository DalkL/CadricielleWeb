
<?php $__env->startSection('title','Étudiant'); ?>
<?php $__env->startSection('content'); ?>
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3">Modification d'Étudiant</h2>
        <div class="col mx-5 mt-2">
            <div class="container">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <label for="nom">Nom: <input type="text" name="nom" id="" value="<?php echo e($etudiant->nom); ?>"></label><br>
                    <label for="adresse">Adresse: <input type="text" name="adresse" id="" value="<?php echo e($etudiant->adresse); ?>"></label><br>
                    <label for="phone">Numéro de Téléphone: <input type="tel" name="phone" id="" value="<?php echo e($etudiant->phone); ?>"></label><br>
                    <label for="email">Courriel: <input type="email" name="email" id="" value="<?php echo e($etudiant->email); ?>"></label><br>
                    <label for="date_de_naissance">Date de Naissance: <input type="date" name="date_de_naissance" id="" value="<?php echo e($etudiant->date_de_naissance); ?>"></label><br>
                    <label for="ville_id">Ville: 
                        <select name="ville_id" id="" value="<?php echo e($etudiant->ville_id); ?>">
                            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($ville->id == $etudiant->ville_id): ?> selected <?php endif; ?> value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label><br>

                    <input class="my-3 btn btn-outline-light" type="submit" value="Modifier">
                </form>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CadricielleWeb\Travaux\TP1\Maisonneuve2194471\resources\views/etudiant/edit.blade.php ENDPATH**/ ?>