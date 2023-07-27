<?php

    // Template Name: Updates

?>

<?php get_header() ?>

    <section class="updates">
        <div class="container">
            <div class="updates__title">
                <h1><?php echo get_field("updates_trend") ?></h1>
                <p><?php echo get_field("updates_lorem") ?></p>
            </div>
            <div class="updates__wrapper">
                <div class="updates__left">
                    
                    <div class="updates__left__item">
                        <?php $args = array(
                            'post_type'   => 'updatesPost',
                            'posts_per_page' => 2,
                         );
                             $query = new WP_Query($args);
                        ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <?php echo get_the_post_thumbnail() ?>
                        <!-- <img src="./img/updates/unsplash_dJpupM4LiS4.png" alt=""> -->
                        <div class="updates__left__item__label">
                            <ul>
                                <li><i class="fa-solid fa-user"></i><?php echo get_the_tags()[0]->name; ?></li>
                                <li><i class="fa-solid fa-calendar"></i><?php echo get_the_date('M d Y') ?> </li>
                                <li><i class="fa-solid fa-tags"></i><?php echo get_the_tags()[1]->name; ?></li>
                            </ul>

                        </div>
                        <div class="updates__left__item__text">
                            <h2><?php the_title() ?></h2>
                            <p><?php the_excerpt() ?></p>
                            <a href="<?php echo get_permalink() ?>">Read more . . .</a>
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
                <div class="updates__right">
                    <div class="updates__right__item">
                    <?php $args = array(
                            'post_type'   => 'categoryPost',
                            'posts_per_page' => 1,
                         );
                             $query = new WP_Query($args);
                        ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <h2><?php the_title() ?></h2>
                        <table>
                            <tr>
                                <td><?php echo get_the_category()[0]->name; ?></td>
                                <td><?php echo get_the_tags()[0]->name; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo get_the_category()[1]->name; ?></td>
                                <td><?php echo get_the_tags()[1] -> name; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo get_the_category()[2]->name; ?></td>
                                <td><?php echo get_the_tags()[2] -> name; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo get_the_category()[3]->name; ?></td>
                                <td><?php echo get_the_tags()[1] -> name; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo get_the_category()[4]->name; ?></td>
                                <td><?php echo get_the_tags()[0] -> name; ?></td>
                            </tr>
                        </table>
                            <?php 
                                endwhile;
                             else:
                                echo 'No available content';
                                endif;
                             wp_reset_postdata();
                            ?>
                    </div>
                    <div class="updates__right__item">
                        <h2><?php echo get_field("updates_title") ?></h2>
                        <?php $args = array(
                                'post_type'   => 'recentUpdatesPost',
                                'posts_per_page' => 3,
                             );
                              $query = new WP_Query($args);
                            ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <div class="updates__right__item__content">
                            <?php echo get_the_post_thumbnail() ?>
                            <!-- <img src="./img/updates/unsplash_Im7lZjxeLhg.png" alt=""> -->
                            <div class="updates__right__item__content__text">
                                <h4><?php the_excerpt() ?></h4>
                                <p><?php echo get_the_date('M d, Y') ?></p>
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
                    <div class="updates__right__item">
                        <?php $args = array(
                                'post_type'   => 'categoryPost',
                                'posts_per_page' => 1,
                                'offset'        => 1
                             );
                              $query = new WP_Query($args);
                            ?>

                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                        <h2><?php the_title() ?></h2>
                        <ul>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[3]-> name; ?></a></li>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[4]-> name; ?></a></li>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[5]-> name; ?></a></li>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[0]-> name; ?></a></li>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[1]-> name; ?></a></li>
                            <li><a href=""class="btn bg--light" ><?php echo get_the_tags()[2]-> name; ?></a></li>
                        </ul>
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


<?php get_footer() ?>