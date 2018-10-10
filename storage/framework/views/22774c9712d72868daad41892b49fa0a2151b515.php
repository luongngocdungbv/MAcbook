<?php if($sidebar == 'footer_sidebar'): ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="widget widget--transparent widget__footer widget__tags widget__tags--transparent">
            <?php else: ?>
                <div class="widget widget__tags widget--transparent widget__tags--transparent">
                    <?php endif; ?>
                    <div class="widget__header">
                        <h3 class="widget__title"><?php echo e(__($config['name'])); ?></h3>
                    </div>
                    <div class="widget__content">
                        <p>
                            <?php $__currentLoopData = get_popular_tags($config['number_display']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!$tag->slug): ?>
                                    <?php info($tag->name); ?>
                                <?php endif; ?>
                                <a href="<?php echo e(route('public.tag', $tag->slug)); ?>" class="tag-link"><?php echo e($tag->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>
                    </div>
                </div>
                <?php if($sidebar == 'footer_sidebar'): ?>
        </div>
<?php endif; ?>