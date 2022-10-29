
<?php $__env->startSection('title','Étudiant'); ?>
<?php $__env->startSection('content'); ?>
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3">Ajout d'Étudiant</h2>
        <div class="col mx-5 mt-2">
            <div class="container">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <label for="nom">Nom: <input type="text" name="nom" id=""></label><br>
                    <label for="adresse">Adresse: <input type="text" name="adresse" id=""></label><br>
                    <label for="phone">Numéro de Téléphone: <input type="tel" name="phone" id=""></label><br>
                    <label for="email">Courriel: <input type="email" name="email" id=""></label><br>
                    <label for="date_de_naissance">Date de Naissance: <input type="date" name="date_de_naissance" id=""></label><br>
                    <label for="ville_id">Ville: 
                        <select name="ville_id" id="">
                            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label><br>

                    <input class="my-3 btn btn-outline-light" type="submit" value="Ajouter">
                </form>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CadricielleWeb\Travaux\TP1\Maisonneuve2194471\resources\views/etudiant/create.blade.php ENDPATH**/ ?>