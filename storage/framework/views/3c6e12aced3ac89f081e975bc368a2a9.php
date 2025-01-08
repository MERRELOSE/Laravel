

<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <header class="text-center mb-5">
        <h1 class="display-4 fw-bold">Bienvenue sur <span class="text-primary">YourBlog</span></h1>
        <p class="lead">Publiez vos idées, partagez vos passions et inspirez le monde grâce à notre plateforme.</p>
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-success btn-lg me-2">Créer un article</a>
        <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-outline-primary btn-lg">Voir les articles</a>
    </header>

    <!-- Présentation des fonctionnalités -->
    <section class="my-5">
        <h2 class="text-center mb-4">Pourquoi choisir <span class="text-primary">YourBlog</span> ?</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-book-half display-4 text-primary"></i>
                        <h5 class="mt-3">Articles variés</h5>
                        <p class="text-muted">Explorez une large gamme d'articles écrits par notre communauté.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-pencil-square display-4 text-success"></i>
                        <h5 class="mt-3">Création facile</h5>
                        <p class="text-muted">Publiez vos idées en quelques clics grâce à une interface intuitive.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-gear display-4 text-warning"></i>
                        <h5 class="mt-3">Gestion flexible</h5>
                        <p class="text-muted">Modifiez ou supprimez vos articles à tout moment pour les garder à jour.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-layout-text-sidebar display-4 text-info"></i>
                        <h5 class="mt-3">Navigation intuitive</h5>
                        <p class="text-muted">Profitez d'une expérience utilisateur simple et fluide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section avec image -->
    <section class="my-5 py-5 bg-light rounded shadow-sm">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Une communauté en pleine croissance</h2>
                <p class="lead">Rejoignez des milliers d'utilisateurs qui publient et partagent leurs idées chaque jour.</p>
                <p>Qu'il s'agisse de partager vos passions, d'apprendre de nouvelles choses ou de découvrir des idées novatrices, BlogArticle est votre espace dédié.</p>
                <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-primary">Voir les articles</a>
            </div>
            <div class="col-md-6">
                <img src="<?php echo e(asset('images/people.jpeg')); ?>" alt="Communauté" class="img-fluid rounded shadow">
            </div>
        </div>
    </section>

    <!-- Appel à l'action -->
    <section class="text-center my-5">
        <h2>Prêt à publier vos idées ?</h2>
        <p class="lead">Commencez dès maintenant à écrire et à partager vos articles.</p>
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-success btn-lg">Créer un article</a>
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; <?php echo e(date('Y')); ?> YourBlog. Tous droits réservés. Designed by Kennedy Merrelose</p>
        <p>
            <a href="#" class="text-white me-3">Politique de confidentialité</a>
            <a href="#" class="text-white">Conditions d'utilisation</a>
        </p><br>
    </footer>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\BlogArticle\resources\views/home.blade.php ENDPATH**/ ?>