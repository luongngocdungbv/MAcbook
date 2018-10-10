<ul <?php echo $options; ?>>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="menu-item <?php if($row->hasChild()): ?> menu-item-has-children <?php endif; ?> <?php echo e($row->css_class); ?> <?php if($row->getRelated()->url == Request::url()): ?> active <?php endif; ?>">
        <a href="<?php echo e($row->getRelated()->url); ?>" target="<?php echo e($row->target); ?>">
            <?php if($row->icon_font): ?><i class='<?php echo e(trim($row->icon_font)); ?>'></i> <?php endif; ?><?php echo e($row->getRelated()->name); ?>

        </a>
        <?php if($row->hasChild()): ?>
            <?php echo Menu::generateMenu([
                    'slug' => $menu->slug,
                    'view' => 'main-menu',
                    'options' => ['class' => 'sub-menu'],
                    'parent_id' => $row->id,
                ]); ?>

        <?php endif; ?>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
