<?php
/*
 *  Template Name: Portfolio
 */

get_header();

$args = [
	'post_type'      => 'portfolio',
	'post_status'    => 'publish',
	'posts_per_page' => - 1,
	'order'          => 'DESC',
];

$query = new WP_Query( $args );
?>

    <section class="page-area portfolio">
        <h1 style="display: none;"><?php the_title(); ?></h1>
        <header class="portfolio-header">
            <div class="portfolio-header-descr">
				<?php the_field( 'description' ); ?>
            </div>
            <div class="portfolio-header-btns">
                <div>
                    <a class="btn" href="<?php the_field( 'about_page' ) ?>"><?php _e( 'About', 'themename' ); ?></a>
                </div>
                <div>
                    <a class="btn" href="<?php the_field( 'contact_page' ) ?>"><?php _e( 'Contact', 'themename' ); ?></a>
                </div>
            </div>
        </header>

		<?php if ( $query->have_posts() ) : ?>
            <div class="portfolio-grid">
				<?php while ( $query->have_posts() ) :
					$query->the_post();
					?>
                    <div class="portfolio-grid-card">
                        <div class="portfolio-grid-item">
                            <div class="portfolio-grid-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_field( 'preview_image' ); ?>" alt="<?php the_title() ?>">
                                </a>
                            </div>
                            <div class="portfolio-grid-data">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                <a rel="nofollow" href="<?php the_field( 'site_link' ); ?>" target="_blank"><?php _e( 'View site', 'themename' ); ?></a>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif;
		wp_reset_postdata(); ?>
    </section>

<?php get_footer() ?>