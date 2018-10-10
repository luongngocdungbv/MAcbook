<nav id="admin_bar">
    <div class="admin-bar-container">
        <div class="admin-bar-logo">
            <a href="<?php echo e(route('dashboard.index')); ?>" title="Go to dashboard">
                <img src="<?php echo e(url(config('core.base.general.logo'))); ?>" alt="logo"/>
            </a>
        </div>
        <ul class="admin-navbar-nav">
            <?php $__currentLoopData = admin_bar()->getGroups(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(array_get($group, 'items')): ?>
                    <li class="admin-bar-dropdown">
                        <a href="<?php echo e(array_get($group, 'link')); ?>" class="dropdown-toggle">
                            <?php echo e(array_get($group, 'title')); ?>

                        </a>
                        <ul class="admin-bar-dropdown-menu">
                            <li><a href="<?php echo e(route('dashboard.index')); ?>" title="Go to dashboard"><?php echo e(__('Dashboard')); ?></a></li>
                            <?php $__currentLoopData = array_get($group, 'items', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($link ?? ''); ?>">
                                        <?php echo e($title ?? ''); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = admin_bar()->getLinksNoGroup(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(array_get($item, 'link')); ?>"><?php echo e(array_get($item, 'title')); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <ul class="admin-navbar-nav admin-navbar-nav-right">
            <li class="admin-bar-dropdown">
                <a href="<?php echo e(route('user.profile.view', ['id' => Auth::user()->getKey()])); ?>" class="dropdown-toggle">
                    <?php echo e(Auth::user()->getFullName()); ?>

                </a>
                <ul class="admin-bar-dropdown-menu">
                    <li><a href="<?php echo e(route('user.profile.view', Auth::user()->getKey())); ?>"><i class="icon-user"></i> <?php echo e(trans('core.base::layouts.profile')); ?></a></li>
                    <li><a href="<?php echo e(route('access.logout')); ?>"><?php echo e(trans('core.base::layouts.logout')); ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript">
    document.getElementsByTagName('body')[0].classList.add('show-admin-bar');
</script>