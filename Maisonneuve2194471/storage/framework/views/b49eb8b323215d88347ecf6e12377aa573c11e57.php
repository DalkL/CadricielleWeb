<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&family=Montserrat+Alternates:ital,wght@0,400;0,700;1,400&family=Press+Start+2P&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <title>Maisonneuve2194471 | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <nav class="navbar bg-dark bg-opacity-50 sticky-top px-5 align-content-center py-4">
        <div class="d-flex ">
            <div class="logo-text">
                <a href="/">Maisonneuve2194471</a>
            </div>
<?php echo csrf_field(); ?>
        </div>

        <div class="main-nav">
            <a href="/etudiant">Étudiants</a>
            <a href="/etudiant/create">Ajouter Étudiant</a>
        </div>
    </nav>
<?php echo $__env->yieldContent('content'); ?>
    <footer>

    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\CadricielleWeb\Travaux\TP1\Maisonneuve2194471\resources\views/layout/master.blade.php ENDPATH**/ ?>