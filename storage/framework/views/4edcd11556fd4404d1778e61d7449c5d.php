

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Articles</h1>
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-primary">Créer un nouvel article</a>

        <table class="table mt-4">
            <thead class="table table-dark">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($article->id); ?></td>
                        <td><?php echo e($article->title); ?></td>
                        <td><?php echo e(\Illuminate\Support\Str::limit($article->content, 50)); ?></td>
                        <td>
                            <a href="<?php echo e(route('articles.show', $article->id)); ?>" class="btn btn-info">Voir</a>
                            <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning">Modifier</a>
                            <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\BlogArticle\resources\views/articles/index.blade.php ENDPATH**/ ?>