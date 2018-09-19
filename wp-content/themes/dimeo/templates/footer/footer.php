<footer id="footer">
  <div class="container-fluid">
		<div class="row">
			<div class="container footer-items">
				<div class="row">

					<div class="col-md-3 col-sm-12">
						<?php if (has_nav_menu('footer-menu-1', 'responsive')) { ?>
							<nav role="navigation">
							<?php wp_nav_menu(array(
								'container'       => '',
								'menu_class'      => 'footer-menu',
								'theme_location'  => 'footer-menu-1')
							); 
							?>
							</nav>
						<?php } ?>
					</div><!-- ./col -->

					<div class="col-md-3 col-sm-12">
						<?php if (has_nav_menu('footer-menu-2', 'responsive')) { ?>
							<nav role="navigation">
							<?php wp_nav_menu(array(
								'container'       => '',
								'menu_class'      => 'footer-menu',
								'theme_location'  => 'footer-menu-2')
							); 
							?>
							</nav>
						<?php } ?>
					</div><!-- ./col -->

					<div class="col-md-3 col-sm-12">
						<?php if (has_nav_menu('footer-menu-3', 'responsive')) { ?>
							<nav role="navigation">
							<?php wp_nav_menu(array(
								'container'       => '',
								'menu_class'      => 'footer-menu',
								'theme_location'  => 'footer-menu-3')
							); 
							?>
							</nav>
						<?php } ?>
					</div><!-- ./col -->

					<div class="col-md-3 col-sm-12">
						<?php if (has_nav_menu('footer-menu-4', 'responsive')) { ?>
							<nav role="navigation">
							<?php wp_nav_menu(array(
								'container'       => '',
								'menu_class'      => 'footer-menu',
								'theme_location'  => 'footer-menu-4')
							); 
							?>
							</nav>
						<?php } ?>
					</div><!-- ./col -->
				</div><!-- ./row -->
			</div><!-- ./container ./footer-items -->

			<div class="container sub-footer">
			    <div class="row">
			        <div class="col-md-12 col-sm-12 sub-footer-items">
							<ul class="list-inline">
								<li class="list-inline-item">
									<span><?php the_field('company_address', 'option'); ?></span>
								</li>
								<li class="list-inline-item">
									<span><?php the_field('copy_right_message', 'option'); ?></span>
								</li>
							</ul>
						<?php if (has_nav_menu('sub-footer', 'responsive')) { ?>
							<nav role="navigation">
							<?php wp_nav_menu(array(
								'container'       => '',
								'menu_class'      => 'sub-footer-menu list-inline',
								'theme_location'  => 'sub-footer')
							); 
							?>
							</nav>
						<?php } ?>
					</div><!-- ./col ./sub-footer -->
				</div><!-- ./row-->
			</div><!-- ./container sub-footer-->
			
			
		
		</div><!-- ./row-->
	</div><!-- . row -->
</footer>