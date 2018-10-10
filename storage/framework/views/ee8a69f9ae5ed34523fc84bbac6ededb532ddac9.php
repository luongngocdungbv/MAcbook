<?php if(count($sliders) > 0): ?>
    <div class="slider-wrap">
        <span class="slider-control prev"><i class="fa fa-angle-left"></i></span>
        <span class="slider-control next"><i class="fa fa-angle-right"></i></span>
        <div class="slider home-slider" data-single="true" data-auto-play="true" data-navigation="false" data-dot="false">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="post post-home-slider">
                    <div class="post-thumbnail">
                        <a href="<?php echo e($slider->link); ?>" class="overlay"></a>
                        <img src="<?php echo e(get_object_image($slider->image)); ?>" alt="<?php echo e($slider->title); ?>">
                    </div>
                   <!--  <header class="entry-header">
                        <h2 class="entry-title"><?php echo e($slider->title); ?></h2>
                        <span class="apart-address"><?php echo e($slider->description); ?></span>
                    </header> -->
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>