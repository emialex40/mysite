<?php

get_header();

?>

<section class="page-area page-area-front">
    <div class="front">
        <div class="front-left">
            <div class="front-left-wrap">
                <div class="front-text">
					<?php if ( get_field( 'logo', 'option' ) ) : ?>
                        <div class="front-text-logo">
                            <img src="<?php the_field( 'logo', 'option' ); ?>" alt="<?php echo bloginfo( 'name' ); ?>">
                        </div>
					<?php endif; ?>

                    <h1><?php _e( 'Alexander Yemeliantsev', 'themename' ); ?></h1>
                    <p><?php _e( 'WordPress Developer and Problem Solver', 'themename' ); ?></p>
                </div>
				<?php if ( get_field( 'add_cv', 'option' ) ) : ?>
                    <div class="front-btn">
                        <a href="<?php the_field( 'add_cv', 'option' ); ?>" class="btn" download="CV"><?php _e( 'Download CV', 'themename' ); ?></a>
                    </div>
				<?php endif; ?>
            </div>
        </div>
        <div class="front-right">
			<?php
			if ( has_nav_menu( 'front_menu' ) ) {
				wp_nav_menu( [
					'theme_location'  => 'front_menu',
					'menu_class'      => 'menu',
					'container'       => '',
					'container_class' => '',
					'menu_id'         => 'menu',
					'depth'           => 0,
					'walker'          => new Main_Submenu_Class(),
				] );
			}
			?>
        </div>
    </div>
</section>


<?php get_footer(); ?>  