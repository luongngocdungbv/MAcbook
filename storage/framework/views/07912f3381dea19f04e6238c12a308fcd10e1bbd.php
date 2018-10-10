<?php if(function_exists('get_galleries')): ?>
    <?php $galleries = get_galleries($limit); ?>
    <?php if(!$galleries->isEmpty()): ?>
        <section class="section pt-50 pb-50">
            <div class="container">
                <div class="page-content">
                    <div class="post-group post-group--single">
                        <div class="post-group__header">
                            <h3 class="post-group__title"><a href="<?php echo e(route('public.galleries')); ?>"><?php echo e(trans('plugins.gallery::gallery.galleries')); ?></a></h3>
                        </div>
                        <div class="post-group__content">
                            <div class="gallery-wrap">
                                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="gallery-item">
                                        <div class="img-wrap">
                                            <a href="<?php echo e(route('public.gallery', ['slug' => $gallery->slug])); ?>"><img src="<?php echo e(get_object_image($gallery->image, 'medium')); ?>" alt="<?php echo e($gallery->name); ?>"></a>
                                        </div>
                                        <div class="gallery-detail">
                                            <div class="gallery-title"><a href="<?php echo e(route('public.gallery', ['slug' => $gallery->slug])); ?>"><?php echo e($gallery->name); ?></a></div>
                                            <div class="gallery-author"><?php echo e(trans('plugins.gallery::gallery.by')); ?> <?php echo e($gallery->user ? $gallery->user->getFullName() : ''); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
