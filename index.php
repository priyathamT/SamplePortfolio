<?php get_header(); ?>
    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive animated fadeInDown" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name animated fadeInLeft"><?php bloginfo('name'); ?></h1>
                        <hr class="star-light">
                        <span class="skills"><?php bloginfo('description'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolios">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <h3>Latest Posts</h3>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-item" data-toggle="modal" data-target="#<?php the_title(); ?>">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                         <h4><?php the_title(); ?></h4>
                         <h5>Posted: <?php the_time('F j, Y'); ?> @ <?php the_author(); ?> at <?php the_time('g:i a'); ?></h5>
                         <h5>Last modified: <?php the_modified_date(); ?></h5>
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="<?php the_title(); ?>" role="dialog">
                        <div class="modal-dialog">
                    
                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">
                                      <?php the_title_attribute(); ?>
                                  </h4>
                                </div>
                                <div class="modal-body">
                                  <p><?php the_content(); ?></p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <p>Last modified:<?php the_modified_date(); ?> at <?php the_modified_time(); ?>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
                        <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
      
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">

        <?php 
        $args = array(
                'page_id' => '30',
            );
        $wp_query = new wp_query( $args );
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
             <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
                    
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>