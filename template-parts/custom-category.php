<section class="post-excerpt-section text-center custom mrg-b-60">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="heading"><?php single_cat_title();?></h2>
            <?php
            $i = 0;
            if (have_posts()) {
                while (have_posts()) :
                    the_post();
                    $i++; ?>
                    <div class="col-md-12">
                        <div class="main-post">
                            <div class="post-content custom-post-container">
                                <h3 class='post-title dropdown-toggle' data-bs-target='#collapse-emp<?php echo $i; ?>' aria-expanded='false' aria-controls='collapse-emp<?php echo $i; ?>' data-bs-toggle='collapse' type='button'>
                                    <?php the_title(); ?>
                                </h3>
                                <div class="collapse" id="collapse-emp<?php echo $i; ?>">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            } else {
                echo "<span class='not-yet'>Désolé, Il n'y a pas encore d'éléments!!</span>";
            }
            ?>
        </div>
    </div>
</section>