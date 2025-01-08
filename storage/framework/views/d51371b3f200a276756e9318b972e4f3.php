

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Modifier l'article</h1>

        <form action="<?php echo e(route('articles.update', $article->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" value="<?php echo e($article->title); ?>" required>
            </div>

            <div class="form-group mt-3">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control" id="content" rows="5" required><?php echo e($article->content); ?></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="image">Image (optionnel)</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Mettre à jour</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\BlogArticle\resources\views/articles/edit.blade.php ENDPATH**/ ?>