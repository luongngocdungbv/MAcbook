<?php if(is_plugin_active('simple-slider')): ?>
    <?php echo do_shortcode('[simple-slider key="home-slider"]'); ?>

<?php endif; ?>

<?php if(is_plugin_active('blog')): ?>
    <?php
        $featured = get_featured_posts(5);
        $featuredList = [];
        if (!empty($featured)) {
            $featured->pluck('id')->all();
        }
    ?>

    <?php if(!empty($featured)): ?>
        <section class="section pt-50 pb-50 bg-lightgray">
            <div class="container">
                <div class="post-group post-group--hero">
                    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first): ?>
                            <div class="post-group__left">
                                <article class="post post__inside post__inside--feature">
                                    <div class="post__thumbnail">
                                        <img src="<?php echo e(get_object_image($feature_item->image, 'featured')); ?>" alt="<?php echo e($feature_item->name); ?>"><a href="<?php echo e(route('public.single', $feature_item->slug)); ?>" class="post__overlay"></a>
                                    </div>
                                    <header class="post__header">
                                        <h3 class="post__title"><a href="<?php echo e(route('public.single', $feature_item->slug)); ?>"><?php echo e($feature_item->name); ?></a></h3>
                                        <div class="post__meta"><span class="post-category"><i class="ion-cube"></i>
                                                <?php if(!$feature_item->categories->isEmpty()): ?><a href="<?php echo e(route('public.single', $feature_item->categories->first()->slug)); ?>"><?php echo e($feature_item->categories->first()->name); ?></a><?php endif; ?>
                                        </span>
                                            <span class="created_at"><i class="ion-clock"></i><a href="#"><?php echo e(date_from_database($feature_item->created_at, 'M d Y')); ?></a></span>
                                            <?php if($feature_item->user->username): ?>
                                                <span class="post-author"><i class="ion-android-person"></i><a href="<?php echo e(route('public.author', $feature_item->user->username)); ?>"><?php echo e($feature_item->user->getFullName()); ?></a></span>
                                            <?php endif; ?>
                                        </div>
                                    </header>
                                </article>
                            </div>
                            <div class="post-group__right">
                                <?php else: ?>
                                    <div class="post-group__item">
                                        <article class="post post__inside post__inside--feature post__inside--feature-small">
                                            <div class="post__thumbnail"><img src="<?php echo e(get_object_image($feature_item->image, 'medium')); ?>" alt="<?php echo e($feature_item->name); ?>"><a href="<?php echo e(route('public.single', $feature_item->slug)); ?>" class="post__overlay"></a></div>
                                            <header class="post__header">
                                                <h3 class="post__title"><a href="<?php echo e(route('public.single', $feature_item->slug)); ?>"><?php echo e($feature_item->name); ?></a></h3>
                                            </header>
                                        </article>
                                    </div>
                                    <?php if($loop->last): ?>
                            </div>
                        <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page-content">
                        <div class="post-group post-group--single">
                            <div class="post-group__header">
                                <h3 class="post-group__title"><?php echo e(__("What's new ?")); ?></h3>
                            </div>
                            <div class="post-group__content">
                                <div class="row">
                                    <?php $__currentLoopData = get_latest_posts(7, $featuredList); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->first): ?>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <article class="post post__vertical post__vertical--single">
                                                    <div class="post__thumbnail">
                                                        <img src="<?php echo e(get_object_image($post->image, 'medium')); ?>" alt="<?php echo e($post->name); ?>"><a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__overlay"></a>
                                                    </div>
                                                    <div class="post__content-wrap">
                                                        <header class="post__header">
                                                            <h3 class="post__title"><a href="<?php echo e(route('public.single', $post->slug)); ?>"><?php echo e($post->name); ?></a></h3>
                                                            <div class="post__meta"><span class="created__month"><?php echo e(date_from_database($post->created_at, 'M')); ?></span><span class="created__date"><?php echo e(date_from_database($post->created_at, 'd')); ?></span><span class="created__year"><?php echo e(date_from_database($post->created_at, 'Y')); ?></span></div>
                                                        </header>
                                                        <div class="post__content">
                                                            <p data-number-line="4"><?php echo e($post->description); ?></p>
                                                        </div>
                                                        <div class="post__footer"><a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__readmore"><?php echo e(__('Read more')); ?></a></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php else: ?>
                                                    <article class="post post__horizontal post__horizontal--single mb-20 clearfix">
                                                        <div class="post__thumbnail">
                                                            <img src="<?php echo e(get_object_image($post->image, 'medium')); ?>" alt="<?php echo e($post->name); ?>"><a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__overlay"></a>
                                                        </div>
                                                        <div class="post__content-wrap">
                                                            <header class="post__header">
                                                                <h3 class="post__title"><a href="<?php echo e(route('public.single', $post->slug)); ?>"><?php echo e($post->name); ?></a></h3>
                                                                <div class="post__meta"><span class="post__created-at"><a href="#"><?php echo e(date_from_database($post->created_at, 'M d, Y')); ?></a></span></div>
                                                            </header>
                                                        </div>
                                                    </article>
                                                <?php endif; ?>
                                                <?php if($loop->last): ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="page-sidebar">
                        <?php echo dynamic_sidebar('top_sidebar'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-50 pb-50 bg-lightgray">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page-content">
                        <div class="post-group post-group--single">
                            <div class="post-group__header">
                                <h3 class="post-group__title"><?php echo e(__('Best for you')); ?></h3>
                            </div>
                            <div class="post-group__content">
                                <div class="row">
                                    <?php $__currentLoopData = get_featured_categories(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php $__currentLoopData = $category->posts()->limit(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($loop->first): ?>
                                                    <article class="post post__vertical post__vertical--single post__vertical--simple">
                                                        <div class="post__thumbnail">
                                                            <img src="<?php echo e(get_object_image($post->image, 'medium')); ?>" alt="<?php echo e($post->name); ?>"><a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__overlay"></a>
                                                        </div>
                                                        <div class="post__content-wrap">
                                                            <header class="post__header">
                                                                <h3 class="post__title"><a href="<?php echo e(route('public.single', $post->slug)); ?>"><?php echo e($post->name); ?></a></h3>
                                                                <div class="post__meta"><span class="created__month"><?php echo e(date_from_database($post->created_at, 'M')); ?></span><span class="created__date"><?php echo e(date_from_database($post->created_at, 'd')); ?></span><span class="created__year"><?php echo e(date_from_database($post->created_at, 'Y')); ?></span></div>
                                                            </header>
                                                            <div class="post__content">
                                                                <p data-number-line="2"><?php echo e($post->description); ?></p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                <?php else: ?>
                                                    <article class="post post__horizontal post__horizontal--single mb-20 clearfix">
                                                        <div class="post__thumbnail">
                                                            <img src="<?php echo e(get_object_image($post->image, 'medium')); ?>" alt="<?php echo e($post->name); ?>"><a href="<?php echo e(route('public.single', $post->slug)); ?>" class="post__overlay"></a>
                                                        </div>
                                                        <div class="post__content-wrap">
                                                            <header class="post__header">
                                                                <h3 class="post__title"><a href="<?php echo e(route('public.single', $post->slug)); ?>"><?php echo e($post->name); ?></a></h3>
                                                                <div class="post__meta"><span class="post__created-at"><a href="#"><?php echo e(date_from_database($post->created_at, 'M d, Y')); ?></a></span></div>
                                                            </header>
                                                        </div>
                                                    </article>
                                                <?php endif; ?>
                                                <?php if($loop->last): ?>
                                        </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php echo Theme::partial('sidebar'); ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if(function_exists('render_galleries')): ?>
    <?php echo render_galleries(8); ?>

<?php endif; ?>
