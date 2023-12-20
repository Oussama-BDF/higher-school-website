<?php
$category = get_category_by_slug('Evénements');
if ($category) :
    $category_id = $category->term_id;
    $category_link = get_category_link($category_id);
    $category_posts = new WP_Query(array('cat'=>$category_id,'posts_per_page' => 3));
?>
    <section class="categories">
        <div class="container">
            <div class="row">
                <h2><span>Dernières <?php echo $category->name; ?></span></h2>
                <?php            
                if ($category_posts->have_posts()) :
                    while ($category_posts->have_posts()) :
                        $category_posts->the_post(); ?>
                        <div class="col-md-4">
                            <div class="main-post">
                                <a class="" href="<?php the_permalink();?>">
                                    <div class="post-img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('', ['class' => 'img-responsive']);
                                        } else {
                                            echo '<img class="img-responsive" src="'. get_template_directory_uri() . '/img/default-post-img.jpg" alt="">';
                                        }
                                        ?>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        if (!empty($excerpt)) {
                                            echo '<p class="post-excerpt">' . $excerpt . '</p>';
                                        } else {
                                            echo "<p class='post-excerpt'>";
                                            the_title();
                                            echo "</p>";
                                        }
                                        ?>
                                        <!-- <a class="read-post d-flex align-items-center justify-content-center" href="<?php the_permalink();?>">
                                            <i class="fas fa-chevron-right"></i>
                                        </a> -->
                                        <hr>
                                        <div class="post-metadata">
                                            <span class="post-date">
                                                <i class="fa fa-calendar fa-fw"></i><span><?php the_time('F jS Y'); ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;                
                    wp_reset_postdata(); // Reset post data after the custom query
                else :
                    echo 'Il n\'y a pas encore de posts.';
                endif;
                ?>
            </div>
            <div class="read-more">
                <span>
                    <a href="<?php echo esc_url($category_link)?>">
                        Voir plus <i class="fa-solid fa-circle-plus"></i>
                    </a>
                </span>
                <hr>
            </div>
        </div>
    </section>
<?php 
else :
    echo "error cat158";
endif;?>