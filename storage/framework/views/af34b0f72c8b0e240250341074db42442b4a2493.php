<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="<?php echo e(app()->getLocale()); ?>"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="<?php echo e(app()->getLocale()); ?>"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="<?php echo e(app()->getLocale()); ?>"><![endif]-->
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" href="<?php echo e(url(setting('admin_logo', config('core.base.general.logo')))); ?>" type="image/x-icon">
        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Pattaya|Roboto:400,500,700|Noto+Sans:400,700&amp;subset=vietnamese" rel="stylesheet">
        <!-- CSS Library-->
        
        <?php echo Theme::header(); ?>


        <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond.js doesn't work if you view the page via file://-->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
    <body>
    <header class="header" id="header">
        <div class="header-wrap">
            <nav class="nav-top">
                <div class="container">
                    <div class="pull-left">
                        <div class="hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3a">
                            <a href="<?php echo e(setting('facebook')); ?>" title="Facebook" class="hi-icon fa fa-facebook"></a>
                            <a href="<?php echo e(setting('twitter')); ?>" title="Twitter" class="hi-icon fa fa-google-plus"></a>
                            <a href="<?php echo e(setting('google_plus')); ?>" title="Google" class="hi-icon fa fa-youtube"></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <?php if(is_plugin_active('member')): ?>
                            <ul class="pull-left">
                                <?php if(Auth::guard('member')->check()): ?>
                                    <li><a href="<?php echo e(route('public.member.overview')); ?>" rel="nofollow"><i class="fa fa-user"></i> <span><?php echo e(Auth::guard('member')->user()->name); ?></span></a></li>
                                    <li><a href="<?php echo e(route('public.member.logout')); ?>" rel="nofollow"><i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('public.member.login')); ?>" rel="nofollow"><i class="fa fa-sign-in"></i> <?php echo e(__('Login')); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="pull-left">
                            <div class="pull-right">
                                <div class="language-wrapper">
                                    <?php echo apply_filters('language_switcher'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <header data-sticky="false" data-sticky-checkpoint="200" data-responsive="991" class="page-header page-header--light">
        <div class="container">
            <!-- LOGO-->
            <div class="page-header__left" style="text-align: center;">
                <a href="<?php echo e(route('public.index')); ?>" class="page-logo">
                    <?php if(!theme_option('logo')): ?>
                        BỆNH VIỆN ĐA KHOA <span>HOÀ BÌNH</span>
                    <?php else: ?>
                        <img src="<?php echo e(url(theme_option('logo'))); ?>" alt="<?php echo e(setting('site_title')); ?>" height="145">
                        <?php if(!theme_option('slogan_logo')): ?>
                        
                        <?php else: ?>
                        <img src="<?php echo e(url(theme_option('slogan_logo'))); ?>" alt="<?php echo e(setting('site_title')); ?>">
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </div>
            <div class="page-header__right">
                
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
            <!-- LOGO-->
            <div class="page-header__left">
                 <!-- MOBILE MENU-->
                <div class="navigation-toggle navigation-toggle--light"><span></span></div>
                <div class="pull-left">
                    <!-- SEARCH-->
                    
                    <!-- NAVIGATION-->
                    <nav class="navigation navigation--light navigation--fade navigation--fadeLeft">
                        <?php echo Menu::generateMenu([
                                'slug' => 'main-menu',
                                'options' => ['class' => 'menu sub-menu--slideLeft'],
                                'view' => 'main-menu',
                            ]); ?>

                    </nav>
                </div>
            </div>
            <div class="page-header__right">
                <div class="search-btn c-search-toggler"><i class="fa fa-search close-search"></i></div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <?php if(is_plugin_active('blog')): ?>
            <div class="super-search hide">
                <form class="quick-search" action="<?php echo e(route('public.search')); ?>">
                    <input type="text" name="q" placeholder="<?php echo e(__('Type to search...')); ?>" class="form-control search-input" autocomplete="off">
                    <span class="close-search">&times;</span>
                </form>
                <div class="search-result"></div>
            </div>
        <?php endif; ?>
    </header>
    <div id="page-wrap">

