<?php
/**
 * The template by default for displaying archive pages.
 * 
 * Includes category archives, tag archives, author archives, etc.
 * 
 * @package EST-SB
 */
?>
<?php get_header(); ?>

<section class="archive-section mrg-b-60">
    <div class="container">
        <div class="row">
            <h2 class="heading">SEARCH RESULTS FOR: <?php echo esc_html(get_search_query()); ?></h2>
            <?php
            if (have_posts()) {
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="main-post">
                            <a class="post-link" href="<?php the_permalink();?>">
                                <div class="post-img">
                                    <?php
                                    // display the thumbnail image, else display the default image
                                    echo has_post_thumbnail() ? the_post_thumbnail('', ['class' => 'img-responsive']) : '<img class="img-responsive" src="'. get_template_directory_uri() . '/assets/img/default-post-img.jpg" alt="">';
                                    ?>
                                </div>
                                <div class="post-content">
                                    <?php the_title('<h3 class="post-title">', '</h3>'); ?>
                                    <?php
                                    $dep_cat = get_category_by_slug('Départements');
                                    if ($dep_cat && $dep_cat->name !== single_cat_title('', false)) :
                                        ?>
                                        <hr>
                                        <div class="post-metadata">
                                            <span class="post-date">
                                                <i class="fa fa-calendar fa-fw"></i><span><?php the_time('F jS Y'); ?></span>
                                            </span>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
            } else {
                echo "<span class='not-yet'>Désolé, Il n'y a pas de résultats pour votre recherche. Veuillez réessayer avec d'autres mots-clés.</span>";
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
