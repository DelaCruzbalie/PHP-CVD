<?php get_header() ?>

    <section class="home">
         <div class="container">
         <?php $args = array(
                  'post_type'   => 'cvdPost',
                  'posts_per_page' => 1,
                );
                  $query = new WP_Query($args);
                ?>

                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
            <div class="hm__wrapper">
                <div class="hm__content">
                    
                     <div class="hm__text">
                        <h1><?php the_title() ?></h1>
                        <p><?php the_excerpt() ?></p>
                        <div class="hm__button">
                            <a href="<?php echo get_permalink() ?>" class="btn bg--yellow">Explore more</a>
                        </div>
                    </div>
                </div>
                 <div class="hm__image">
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/home/Hero.png" alt=""> -->
                </div>
            </div>
            <?php 
                  endwhile;
                else:
                  echo 'No available content';
                endif;
                  wp_reset_postdata();
                 ?>
        </div>
    </section>

    <section class="get">
        <div class="container">
            <div class="get__wrapper">
                <div class="get__item">
                    <?php $args = array(
                    'post_type'   => 'quotesPost',
                    'posts_per_page' => 1,
                 );
                     $query = new WP_Query($args);
                    ?>

                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/home/webdev.png" alt=""> -->
                    <div class="get__item__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_permalink() ?>" class="btn bg--yellow">Get a Quote</a>
                    </div>
                    <?php 
                     endwhile;
                 else:
                  echo 'No available content';
                 endif;
                  wp_reset_postdata();
                 ?>
                </div>

                <div class="get__item">
                    <?php $args = array(
                    'post_type'   => 'quotesPost',
                    'posts_per_page' => 1,
                    'offset'        => 1

                    );
                     $query = new WP_Query($args);
                    ?>

                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/home/Graphics.png" alt=""> -->
                    <div class="get__item__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_permalink() ?>"class="btn bg--yellow">Get a Quote</a>
                    </div>
                    <?php 
                    endwhile;
                    else:
                    echo 'No available content';
                    endif;
                    wp_reset_postdata();
                 ?>
                </div>

                <div class="get__item">
                    <?php $args = array(
                    'post_type'   => 'quotesPost',
                    'posts_per_page' => 1,
                    'offset'        => 2

                    );
                     $query = new WP_Query($args);
                    ?>

                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/home/Social Media.png" alt=""> -->
                    <div class="get__item__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_permalink() ?>" class="btn bg--yellow">Get a Quote</a>
                    </div>
                    <?php 
                    endwhile;
                    else:
                    echo 'No available content';
                    endif;
                    wp_reset_postdata();
                 ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-abt">
            <div class="container">
                <div class="hm-abt__wrapper">
                    <div class="hm-abt__image">
                        <?php $args = array(
                            'post_type'   => 'homeAboutPost',
                            'posts_per_page' => 1,
                         );
                            $query = new WP_Query($args);
                        ?>

                        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <?php echo get_the_post_thumbnail() ?>

                        <?php 
                                endwhile;
                            else:
                                echo 'No available content';
                            endif;
                                wp_reset_postdata();
                            ?>
                        <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/home/unsplash_GIy2ly37Kw8.png" alt=""> -->

                        <div class="hm-abt__content">
                            <?php $args = array(
                            'post_type'   => 'homeAboutPost',
                            'posts_per_page' => 1,
                            'offset'        => 1
                         );
                            $query = new WP_Query($args);
                        ?>

                        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                            <div class="hm-abt__text">
                                <h2><?php the_title() ?></h2>
                                <p><?php the_excerpt() ?></p>
                                <p><?php the_excerpt() ?></p>
                            </div>
                            <?php 
                                endwhile;
                            else:
                                echo 'No available content';
                            endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                            
                    </div>
                </div>
            </div>
    </section>

    <section class="lt">
        <div class="container">
            <div class="lt__title">
                <?php $args = array(
                        'post_type'   => 'latestPost',
                        'posts_per_page' => 1,
                     );
                            $query = new WP_Query($args);
                        ?>

                        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                <h2><?php the_title() ?></h2>
                <p><?php the_excerpt() ?></p>

                <?php 
                                endwhile;
                            else:
                                echo 'No available content';
                            endif;
                                wp_reset_postdata();
                            ?>
            </div>
            <div class="lt__wrapper">
                <?php $args = array(
                        'post_type'   => 'latestPost',
                        'posts_per_page' => 3,
                        'offset'          => 1
                     );
                            $query = new WP_Query($args);
                        ?>

                        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <div class="lt__item">
                        <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="<?php echo get_template_directory_uri()?> ./img/home/unsplash_3MAmj1ZKSZA.png" alt=""> -->
                    <div class="lt__item__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_permalink() ?>">Read more...</a>
                    </div>
                </div>
                <?php 
                                endwhile;
                            else:
                                echo 'No available content';
                            endif;
                                wp_reset_postdata();
                            ?>
            </div>
        </div>
    </section>


<?php get_footer() ?>