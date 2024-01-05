<?php
/**
 * The template for displaying all single posts.
 * 
 * @package EST-SB
 */
?>
<?php
    $classe;
    if(has_category('emploi') || has_category('resultat') || has_category('filiere')) {
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
            <?php the_title('<h2 class="post-title">', '</h2>');?>
            <div class="post-content <?php echo $classe; ?>">
                <?php the_content(); ?>
            </div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>