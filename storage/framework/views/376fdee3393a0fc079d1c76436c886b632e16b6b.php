<?php echo Theme::asset()->container('footer')->styles(); ?>

<?php echo Theme::asset()->container('footer')->scripts(); ?>

<?php echo Theme::asset()->container('after_footer')->scripts(); ?>


<?php echo apply_filters(THEME_FRONT_FOOTER, null); ?>