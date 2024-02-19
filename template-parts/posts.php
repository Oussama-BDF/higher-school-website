<?php
/**
 * Template part for displaying the posts excerpt section.
 * 
 * It will display the three latest posts excerpt of the categories Actualités, Événements and Departements
 *
 * @package EST-SB
 */
?>
<!-- Start The Posts Excerpt Section -->
<?php
$included_categories = array('Actualités', 'Événements', 'Departements');

for ($i = 0; $i < 3; $i++) :
    $category = get_category_by_slug($included_categories[$i]);

    if ($category) {
        $category_posts = new WP_Query(array('cat' => $category->term_id, 'posts_per_page' => 3));

        if ($category_posts->have_posts()) :
            ?>
            <section class="post-excerpt-section mrg-b-60">
                <div class="container">
                    <div class="row">
                        <h2 class="heading">
                            <?php
                            if ($i!==2) echo "Dérnières ";
                            echo $category->name;
                            ?>
                        </h2>
                        <?php
                        while ($category_posts->have_posts()) :
                            $category_posts->the_post();
                            ?>
                            <div class="col-md-4">
                                <div class="main-post">
                                    <a class="post-link" href="<?php the_permalink(); ?>">
                                        <div class="post-img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('', ['class' => 'img-responsive']);
                                            } else {
                                                echo '<img class="img-responsive" src="' . get_template_directory_uri() . '/assets/img/default-post-img.jpg" alt="">';
                                            }
                                            ?>
                                        </div>
                                        <div class="post-content">
                                            <?php the_title('<h3 class="post-title">', '</h3>'); ?>
                                            <?php
                                            if ($i!==2) :
                                                $excerpt = get_the_excerpt();
                                                if (!empty($excerpt))
                                                    echo '<p class="post-excerpt">' . $excerpt . '</p>';
                                                else
                                                    the_title("<p class='post-excerpt'>", "</p>");
                                                ?>
                                                <hr>
                                                <div class="post-metadata">
                                                    <span class="post-date">
                                                        <i class="fa-regular fa-calendar"></i><span><?php the_time('F jS Y'); ?></span>
                                                    </span>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); // Reset post data after the custom query
                        ?>
                    </div>

                    <?php if ($i!==2) : ?>
                        <div class="read-more">
                            <span>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>">
                                    Voir plus <i class="fa-solid fa-circle-plus"></i>
                                </a>
                            </span>
                            <hr style="margin-block: 30px;"/>
                        </div>
                    <?php endif ?>
                </div>
            </section>
        <?php endif; ?>
    <?php } else  continue; // Skip to the next iteration if the category is not found ?>

<?php endfor; ?>

<!-- End The Posts Excerpt Section -->