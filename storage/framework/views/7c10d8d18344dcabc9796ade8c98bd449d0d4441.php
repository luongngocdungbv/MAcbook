<div style="max-width: 100%; word-break: break-all">
    <p><strong>URL: </strong><a href="<?php echo e($url); ?>"><?php echo e($url); ?></a></p>
    <p><strong>File: </strong> <?php echo e($ex->getFile()); ?>:<?php echo e($ex->getLine()); ?></p>
    <p><strong>Error: </strong><?php echo trim($error); ?></p>
</div>