<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <div class="buffer">
      <div class="buffer">
        <?php wp_nav_menu(array(
          'theme_location' => 'top_bar_menu',
          'fallback_cb' => false
        )); ?>
        
        <h1>
          <?php the_custom_logo(); ?>
        </h1>

        <?php 
        
        wp_nav_menu(array(
          'theme_location' => 'primary_menu',
          'container_class' => 'pm',
          'fallback_cb' => false
        ));
        
        ?>
        
        <?php echo get_search_form(); ?>

      </div>
    </div>
  </div>
  <!-- END header -->
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">
        <!-- begin post -->
        <?php 
		
		      if(!have_posts()){
			      echo "<h3>no post found</h3>";
		      }

	    ?>

        <?php 
        
        while(have_posts()) : the_post();
        
        ?>

        <div class="post">
          <h2><a href="#"><?php the_category(' '); ?></a></h2>
          <p class="date"><a href="#"><?php the_author(); ?></a> on <?php the_time('d F, Y'); ?> | <a href="#"><?php comments_number(); ?></a></p>
          <div class="thumb">
            <?php the_post_thumbnail(); ?>
          </div>
          <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
          <a class="readmore" href="<?php the_permalink(); ?>">Read More</a> </div>
        <!-- end post -->

        <?php endwhile; ?>
        
      </div>
    </div>
    <!-- END content -->
    <!-- BEGIN sidebar -->
    <?php get_sidebar(); ?>
    <!-- END sidebar -->
    <div class="break"></div>
  </div>
  <!-- END body -->
  <!-- BEGIN footer -->
  <div id="footer"><?php echo get_theme_mod('copyright_section'); ?></div>
  <!-- END footer -->
</div>
<!-- END wrapper -->

<?php wp_footer(); ?>
</body>
</html>
