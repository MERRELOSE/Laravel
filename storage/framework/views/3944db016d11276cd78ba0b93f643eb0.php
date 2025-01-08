

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($article->title); ?></h1>
        <p><strong>Publié le :</strong> <?php echo e($article->created_at->format('d/m/Y H:i')); ?></p>
        <p><?php echo e($article->content); ?></p>

        <?php if($article->image): ?>
            <div>
                <img src="<?php echo e(asset('storage/'.$article->image)); ?>" alt="Image de l'article" class="img-fluid">
            </div>
        <?php endif; ?>

        <div class="mt-4">
            <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning">Modifier</a>
            <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\BlogArticle\resources\views/articles/show.blade.php ENDPATH**/ ?>