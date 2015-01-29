<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="ja"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="ja"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="ja"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ( is_single() ) : ?>
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php the_field("custumOgpTxt", $post->ID); ?>">
<?php else : ?>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="google-site-verification" content="b_w4lISbEd92onK3hYtENC4p4aZ7l2OLe-eb5W3-w7g" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebyfault">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
<?php if ( is_single() ) : ?>
    <meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:image" content="<?php the_field("custumOgpImg", $post->ID); ?>">
    <meta property="og:description" content="<?php the_field("custumOgpTxt", $post->ID); ?>">
<?php else : ?>
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/ogp.png">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
    <?php wp_head(); ?>
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon_f.ico">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
<div id="wrapper">
<header id="mainHeader">
<?php if( is_home() || is_front_page() ): ?>
<h1 id="mainTitle"><?php bloginfo('name'); ?></h1>
<?php else: ?>
<h1 id="mainTitle"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>
<nav id="grobalNav">
    <ul id="menuItems">
        <li class="menuList"><a href="<?php echo home_url(); ?>">Works</a>
            <ul id="workTitle">
<?php
    query_posts(
        Array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'showposts' => -1,
        )
    );
    if (have_posts()) : while (have_posts()) : the_post();
?>
                <li class="titleList"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
    endwhile; endif;
    wp_reset_query();
?>
            </ul>
        </li>
        <li class="menuList"><a href="/profile/">Profile</a></li>
        <li class="menuList"><a href="http://blog.madebyfault.net/">Blog</a></li>
    </ul>
</nav><!-- /grobalNav -->
</header><!-- /header -->