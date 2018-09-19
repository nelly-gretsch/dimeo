<?php
/**
 * Template Name: Contact Page 
 */
?>

<?php get_template_part('templates/flexible/content', 'flexible'); ?>   
<section class="contactcontent">
<div class="container">
<div class="col-md-8 col-sm-12">
<div class="contactform">
<?php if(get_field('form_title')) { ?>
<h2><?php the_field('form_title'); ?></h2>
<?php } ?>                              	
<?php echo do_shortcode( "[formidable id=" . get_field('form_id') . "]" ); ?>	
</div><!-- Contact Form -->
</div><!-- Main Column -->
<div class="col-md-1 hidden-sm hidden-xs left"><!-- Spacer --></div>
<div class="col-md-3 col-sm-12">          
<div class="contact-sidebar">
<?php the_field('sidebar_content'); ?>  
</div>     
</div><!-- Sidebar Column -->
</div><!-- Container -->
</section><!-- Contact Content -->

<?php if(get_field('map_image')) { ?>
<section class="mapimage">
<?php if(get_field('map_link')) { ?><a href="<?php the_field('map_link'); ?>" target="_blank"><?php } ?> 
<img src="<?php the_field('map_image'); ?>" />
<?php if(get_field('map_link')) { ?></a><?php } ?>
</section>
<?php } ?>    