<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i != (count($crumbs) - 1)): ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <meta itemprop="position" content="<?php echo e($i + 1); ?>" />
            <a href="<?php echo e($crumb['url']); ?>" itemprop="item" title="<?php echo e($crumb['label']); ?>">
                <?php echo $crumb['label']; ?>

                <meta itemprop="name" content="<?php echo e($crumb['label']); ?>" />
            </a>
        </li>
        <?php else: ?>
        <li class="active"><?php echo $crumb['label']; ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>