<?php
/**
 * The template by default for displaying all single pages.
 * 
 * @package EST-SB
 */
?>
<?php get_header(); ?>

<?php
if(is_page('contact'))
    $classe = "page-contact";
?>

<section class="page mrg-b-60">
    <div class="container">
        <div class="main-post r">
            <?php the_title('<h2 class="heading">', '</h2>');?>
            <div class="post-content <?php if (isset($classe)) echo $classe . " row"; ?>" style="--bs-gutter-x: 0; gap: 7px; margin-bottom: 10px;">
                <?php if(isset($classe)) { ?>
                    <?php get_template_part("template-parts/contact"); ?>
                <?php }?>
                <?php the_content(); ?>

            </div>
            <?php if(isset($classe)) { ?>
                <?php get_template_part("template-parts/map"); ?>
            <?php }?>
        </div> 
    </div>
</section>

<?php get_footer(); ?>

