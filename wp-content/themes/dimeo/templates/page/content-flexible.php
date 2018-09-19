<?php if( have_rows('global_fields') ):  while ( have_rows('global_fields') ) : the_row(); ?>

<?php if( get_row_layout() == 'header_banner' ): ?><?php get_template_part('templates/flexible', 'header-banner'); ?><?php endif; //  This is an example of how to pull in custom flexible content ?>
<?php if( get_row_layout() == 'text_area' ): ?><?php get_template_part('templates/flexible', 'text-area'); ?><?php endif; //  This is an example of how to pull in custom flexible content ?>

<?php endwhile; ?><?php else : ?><?php endif; ?>