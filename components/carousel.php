<!-- Start The Carousel -->
<?php
$category = get_category_by_slug('Carousel');
if ($category) :
    $category_id = $category->term_id;
    $category_link = get_category_link($category_id);
    $category_posts = new WP_Query(array('cat'=>$category_id,'posts_per_page' => 5));
?>
  <div id="carousel" class="carousel slide border-bottom" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">
    <?php            
    if ($category_posts->have_posts()) :
      $i=0;
      while ($category_posts->have_posts()) :
          $category_posts->the_post(); ?>
          <div class="carousel-item <?php if($i==0) echo 'active';?>" data-bs-interval="10000">
            <?php the_title();?>
          </div>
    <?php
        $i++;
      endwhile;                
      wp_reset_postdata(); // Reset post data after the custom query
    else :
      echo 'Il n\'y a pas encore de posts.';
    endif;
    ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<?php 
else :
    echo "error cat158";
endif;?>
<!-- End The Carousel -->