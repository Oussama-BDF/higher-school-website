<?php
/**
 * The template for displaying the category "resultat".
 *  
 * @package EST-SB
 */
?>
<?php get_header(); ?>

<section class="post-excerpt emploi mrg-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="archive-title">
                <span><?php single_cat_title();?></span>
            </h2>
            <?php
            $i = 0;
            if (have_posts()) {
                while (have_posts()) :
                    the_post();
                    $i++; ?>
                    <div class="col-md-12">
                        <div class="main-post">
                            <!-- <a class="" href="<?php the_permalink();?>"> -->
                            <div class="post-content custom-post-container">
                                <h3 class='post-title dropdown-toggle' data-bs-target='#collapse-emp<?php echo $i; ?>' aria-expanded='false' aria-controls='collapse-emp<?php echo $i; ?>' data-bs-toggle='collapse' type='button'>
                                    <?php the_title(); ?>
                                </h3>
                                <div class="collapse" id="collapse-emp<?php echo $i; ?>">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>
                    <?php
                endwhile;
            } else {
                echo "<span class='not-yet'>Il n'y a pas encore de posts!!</span>";
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>