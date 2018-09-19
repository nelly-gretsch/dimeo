<?php         
$rows = get_sub_field( 'slider');// grab all rows
$background_image = $rows[0]['background_image'];//grabs first testimonial content- change number in both for different row
$pretitle = $rows[0]['pretitle'];//grabs first testimonial header
$title = $rows[0]['title'];//grabs first testimonial header
$button_link = $rows[0]['button_link'];//grabs first testimonial header
$button_text = $rows[0]['button_text'];//grabs first testimonial header
?>
<div class="header-banner hidden-md hidden-lg hidden-xl" style="background: url(<?php echo $background_image; ?>); width: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat;">
<h3><?php echo($pretitle)?></h3>
<h2><?php echo($title)?></h2>
<a class="btn-solid-gold" href="<?php echo($button_link)?>" ><?php echo($button_text)?></a>
</div><!-- mobile header -->
<div class="carousel fade-carousel slide hidden-xs hidden-sm" data-ride="carousel" data-interval="5000" data-pause="false" data-keyboard="true" data-wrap="true" id="gauge-carousel">
<ol class="carousel-indicators">
 <?php 
$i=0;
while( have_rows('slider') ): the_row();
if ($i == 0) {
echo '<li data-target="#gauge-carousel" data-slide-to="0" class="active"></li>';
} else {
echo '<li data-target="#gauge-carousel" data-slide-to="'.$i.'"></li>';
}
$i++;
endwhile; ?>
</ol>
<div class="carousel-inner">
 <?php $z = 0; while( have_rows('slider') ): the_row(); ?>
    <div class="item slides <?php if ($z==0) { echo 'active';} ?>"  style="background: url(<?php the_sub_field('background_image'); ?>); width: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat;">
    	<?php if( get_sub_field('background_video') ): ?>
        <div class="overlay"></div>
    	<video autoplay  poster="<?php the_sub_field('background_image'); ?>" id="bgvid" loop >
    	<source src="<?php the_sub_field('mp4_video'); ?>" type="video/mp4">
    	<source src="<?php the_sub_field('ogv_video'); ?>" type="video/ogg">
    	<source src="<?php the_sub_field('webm_video'); ?>" type="video/webm">
    	</video>
    	<?php endif; ?>
      <div class="container">
      <div class="content-wrapper <?php the_sub_field('content_alignment');?>">
           <div class="content wow animated fadeInDown" data-wow-delay="1.25s">
           <?php if( get_sub_field('pretitle') ): ?><h3><?php the_sub_field('pretitle');?></h3><?php endif; ?> 
           <?php if( get_sub_field('title') ): ?><h2><?php the_sub_field('title');?></h2><?php endif; ?> 
           </div><!-- content-->
           <?php if( get_sub_field('button_link') ): ?><a data-wow-delay="1s" class="wow animated fadeInUp <?php the_sub_field('button_color');?>" href="<?php the_sub_field('button_link');?>" <?php if( get_sub_field('new_window') ): ?> target="_blank" <?php endif; ?> <?php if( get_sub_field('youtube_video') ): ?> rel="shadowbox;player=iframe;width=1280;height=720" <?php endif; ?> ><?php the_sub_field('button_text');?></a><?php endif; ?>
		</div><!-- content wrapper -->
		</div><!-- container -->
       </div><!-- item slides -->
<?php 
$z++;
endwhile; ?> 
</div> <!-- carousel inner -->
</div><!-- carousel -->
<script>
(function( jQuery ) {

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var jQuerythis = jQuery(this),
				jQueryanimationType = jQuerythis.data('animation');
			jQuerythis.addClass(jQueryanimationType).one(animEndEv, function () {
				jQuerythis.removeClass(jQueryanimationType);
			});
		});
	}
	//Variables on page load 
	var jQuerymyCarousel = jQuery('#gauge-carousel'),
		jQueryfirstAnimatingElems = jQuerymyCarousel.find('.item:first').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations(jQueryfirstAnimatingElems);
	//Pause carousel  
	// jQuerymyCarousel.carousel('pause');
	//Other slides to be animated on carousel slide event 
	jQuerymyCarousel.on('slide.bs.carousel', function (e) {
		var jQueryanimatingElems = jQuery(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations(jQueryanimatingElems);
	});  
})(jQuery);
</script>