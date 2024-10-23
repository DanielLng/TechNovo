<?php
/**
 * Template Name: Home
 *
 */
?>

<?php get_header() ?>


    <?php get_template_part( 'template-parts/components/content', 'social-networks'); ?>
    <?php get_template_part( 'template-parts/home/content', 'first-section'); ?>
    <?php get_template_part( 'template-parts/home/content', 'second-section'); ?>
    <?php get_template_part( 'template-parts/home/content', 'third-section'); ?>
    <?php get_template_part( 'template-parts/home/content', 'fourth-section'); ?>


<?php get_footer() ?>