<?php
    // Template Name: About
?>

 <?php get_header() ?>

     <section class="abt-banner" >
        <div class="container">
            <div class="abt-banner__wrapper">
                <div class="abt-banner__content">
                    <div class="abt-banner__text">
                        <h4><?php echo get_field("about_title") ?></h4>
                        <?php $args = array(
                            'post_type'   => 'abtBannerPost',
                            'posts_per_page' => 1,
                         );
                             $query = new WP_Query($args);
                        ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <h1><?php the_title() ?></h1>
                        <p><?php the_excerpt() ?></p>
                        <p><?php the_excerpt() ?></p>
                    </div>
                    <div class="abt-banner__social">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="abt-banner__img">
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="./img/about/about me 1.png" alt=""/> -->
                </div>
            </div>
        </div>
        <div class="abt-banner__chevron">
            <a href="#abt-second"><i class="fa-solid fa-chevron-down"></i></a>
        </div>
        <?php 
                  endwhile;
                else:
                  echo 'No available content';
                endif;
                  wp_reset_postdata();
                 ?>
    </section>
    
    <section id="abt-second" class="rp">
        <div class="container">
            <div class="rp__title">
                <h2><?php echo get_field("recent_projects") ?></h2>
                <p><?php echo get_field("lorem_ipsum") ?></p>
            </div>
            <div class="rp__wrapper">
                        <?php $args = array(
                            'post_type'   => 'recentPost',
                            'posts_per_page' => 6,
                         );
                             $query = new WP_Query($args);
                        ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <div class="rp__item">
                    <?php echo get_the_post_thumbnail() ?>
                    <!-- <img src="./img/about/unsplash_Cys3W7_MXDU.png" alt=""> -->
                    <div class="rp__item__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_excerpt() ?></p>
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