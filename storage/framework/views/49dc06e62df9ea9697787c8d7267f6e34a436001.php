<?php if(is_plugin_active('blog')): ?>
    <?php if($sidebar == 'footer_sidebar'): ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="widget widget--transparent widget__footer">
                <?php else: ?>
                    <div class="widget widget__recent-post">
                        <?php endif; ?>
                        <div class="widget__header">
                            <h3 class="widget__title"><?php echo e(__($config['name'])); ?></h3>
                        </div>
                        <div class="widget__content">
                            <ul <?php if($sidebar == 'footer_sidebar'): ?> class="list list--light list--fadeIn" <?php endif; ?>>
                                <?php $__currentLoopData = get_recent_posts($config['number_display']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <?php if($sidebar == 'footer_sidebar'): ?>
                                            <a href="<?php echo e(route('public.single', $post->slug)); ?>" data-number-line="2"><?php echo e($post->name); ?></a>
                                        <?php else: ?>
                                            <article class="post post__widget clearfix">
                                                <div class="post__thumbnail"><img src="<?php echo e(get_object_image($post->image, 'thumb')); ?>" alt="<?php echo e($post->name); ?>">
                                                    <a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__overlay"></a></div>
                                                <header class="post__header">
                                                    <h5 class="post__title"><a href="<?php echo e(route('public.single', $post->slug)); ?>" data-number-line="2"><?php echo e($post->name); ?></a></h5>
                                                </header>
                                            </article>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <?php if($sidebar == 'footer_sidebar'): ?>
            </div>
    <?php endif; ?>
<?php endif; ?>