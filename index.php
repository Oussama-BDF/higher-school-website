<?php
/**
 * The main template file, which is the home page.
 * 
 * @package EST-SB
 */
?>
<?php get_header(); ?>

    <?php get_template_part("template-parts/carousel"); ?>
    <?php get_template_part("template-parts/user_spaces"); ?>
    <?php get_template_part("template-parts/about"); ?>
    <?php get_template_part("template-parts/chiffre"); ?>
    <?php get_template_part("template-parts/posts"); ?>

<?php get_footer(); ?>