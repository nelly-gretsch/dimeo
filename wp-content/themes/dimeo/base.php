<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/header/head'); ?>
  <body <?php body_class(); ?>>
	<div class="site-container">
    <?php do_action('get_header'); get_template_part('templates/header/header'); ?>
   <div id="wrapper" role="document">
   	
    <?php include Wrapper\template_path(); ?>
    
   	<?php wp_reset_query(); ?>      
   </div><!-- /.wrapper -->
    <?php do_action('get_footer'); get_template_part('templates/footer/footer'); wp_footer(); ?>
</div> <!-- /. end site container -->
</body>
</html>