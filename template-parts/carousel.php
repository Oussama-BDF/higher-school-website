<?php
/**
 * Template part for displaying the carousel section.
 *
 * @package EST-SB
 */
?>
<!-- Start The Carousel -->
<section class="carousel-section">
    <div id="carousel" class="carousel slide border-bottom1" data-bs-ride="carousel">
        <?php
        $category = get_category_by_slug('Carousel');
        if ($category) :
            $category_posts = new WP_Query(array('cat' => $category->term_id, 'posts_per_page' => 10));
            ?>
            <div class="carousel-inner">
                <?php
                if ($category_posts->have_posts()) :
                    $i = 0;
                    while ($category_posts->have_posts()) :
                        $category_posts->the_post();
                        ?>
                        <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>" data-bs-interval="500000000">
                            <?php echo has_post_thumbnail() ? the_post_thumbnail('', ['class' => '']) : '<img class="" src="'. get_template_directory_uri() . '/assets/img/default-post-img.jpg" alt="">';?>
                            <?php
                            $categories = get_the_category();
                            if (sizeof($categories) == 1) {
                                the_content();
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata(); // Reset post data after the custom query
                endif;
                ?>
            </div>
            <?php if (isset($i)) : // display the carousel indicators if there is at least one post?>
                <div class="carousel-indicators">
                    <?php for ($j=0; $j<$i; $j++) :?>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?php echo $j;?>" <?php if ($j==0) echo 'class="active" aria-current="true';?> aria-label="Slide <?php echo $j+1;?>"></button>
                    <?php endfor;?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- End The Carousel -->