<?php if(empty($widget_setting) || $widget_setting->status == 1): ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="<?php echo e(route('theme.list')); ?>">
            <div class="visual">
                <i class="icon-magic-wand"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?php echo e($themes); ?>">0</span></div>
                <div class="desc"> <?php echo e(trans('core.theme::theme.theme')); ?> </div>
            </div>
        </a>
    </div>
<?php endif; ?>