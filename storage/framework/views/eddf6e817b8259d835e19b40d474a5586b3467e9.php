<div class="flexbox-annotated-section">
    <div class="flexbox-annotated-section-annotation">
        <div class="annotated-section-title pd-all-20">
            <h2><?php echo e(trans('plugins.simple-slider::simple-slider.settings.title')); ?></h2>
        </div>
        <div class="annotated-section-description pd-all-20 p-none-t">
            <p class="color-note"><?php echo e(trans('plugins.simple-slider::simple-slider.settings.description')); ?></p>
        </div>
    </div>

    <div class="flexbox-annotated-section-content">
        <div class="wrapper-content pd-all-20">
            <div class="form-group">
                <label class="text-title-field"
                       for="simple_slider_using_assets"><?php echo e(trans('plugins.simple-slider::simple-slider.settings.using_assets')); ?>

                </label>
                <label class="hrv-label">
                    <input type="radio" name="simple_slider_using_assets" class="hrv-radio"
                                                value="1"
                                                <?php if(setting('simple_slider_using_assets', true)): ?> checked <?php endif; ?>><?php echo e(trans('core.setting::setting.general.yes')); ?>

                </label>
                <label class="hrv-label">
                    <input type="radio" name="simple_slider_using_assets" class="hrv-radio"
                                                value="0"
                                                <?php if(!setting('simple_slider_using_assets', true)): ?> checked <?php endif; ?>><?php echo e(trans('core.setting::setting.general.no')); ?>

                </label>
            </div>
            <div class="form-group">
                <p><?php echo e(trans('plugins.simple-slider::simple-slider.settings.using_assets_description')); ?></p>
                <pre><strong>
/vendor/core/plugins/simple-slider/packages/owl-carousel/owl.carousel.css
/vendor/core/plugins/simple-slider/css/simple-slider.css
/vendor/core/plugins/simple-slider/packages/owl-carousel/owl.carousel.js
/vendor/core/plugins/simple-slider/js/simple-slider.js
                </strong></pre>
            </div>
        </div>
    </div>
</div>