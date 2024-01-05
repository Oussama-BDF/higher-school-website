<?php
/**
 * The template by default for displaying all single pages.
 * 
 * @package EST-SB
 */
?>
<?php get_header(); ?>

<section class="page mrg-b-60">
    <div class="container">
        <div class="main-post">
            <?php the_title('<h2 class="post-title">', '</h2>');?>
            <div class="post-content"><?php the_content(); ?></div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>
