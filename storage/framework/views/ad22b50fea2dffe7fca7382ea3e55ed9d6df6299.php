<a href="<?php echo e(Route::has($route . '.' . 'edit') ? route($route . '.' . 'edit', $related_language) : '#'); ?>" class="tip" title="<?php echo e(trans('plugins.language::language.edit_related')); ?>"><i class="fa fa-edit"></i></a>