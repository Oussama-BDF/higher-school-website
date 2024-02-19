<?php
/**
 * The template for displaying all single posts.
 * 
 * @package EST-SB
 */
?>
<?php
    if(has_category('emplois') || has_category('resultats') || has_category('filieres')) {
        $classe = "custom-post-container";
    }

    if(has_category('departements')) {
        $classe = "departement";
    }
?>
<?php get_header(); ?>

<section class="post mrg-b-60">
    <div class="container">
        <div class="main-post">
            <?php the_title('<h2 class="heading">', '</h2>');?>
            <div class="post-content <?php if (isset($classe))  echo $classe; ?>">
                <?php the_content(); ?>
            </div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>