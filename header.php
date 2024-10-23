<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php
            echo get_bloginfo('name');// this is the name of your website.
            // use your code to display title in all other pages.
    ?>
</title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page-wrapper">
        <nav class="l-nav">
            <div class="l-nav__logo" style="background-image: url(<?php echo esc_url( get_sub_field('social_network_img') ); ?>)"></div>
            <div class="l-nav__menu">
                <div class="l-nav__menu--top"></div>
                <div class="l-nav__menu--middle"></div>
                <div class="l-nav__menu--bottom"></div>
            </div>
        </nav>