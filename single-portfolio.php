<?php

get_header();

$contact = get_pages( [
	'post_type'    => 'page',
	'meta_key'     => '_wp_page_template',
	'hierarchical' => 0,
	'meta_value'   => 'contact.php',
] );

$portfolio = get_pages( [
	'post_type'    => 'page',
	'meta_key'     => '_wp_page_template',
	'hierarchical' => 0,
	'meta_value'   => 'portfolio.php',
] );

$contact_id = $contact[0]->ID;
$portfolio_id = $portfolio[0]->ID;

?>

    <section class="page-area single-portfolio">
        <div class="single-portfolio-header">
            <a href="<?php the_permalink($portfolio_id); ?>"><?php pll_e( 'Go to Portfolio' ); ?></a>
        </div>

        <article class="single-portfolio-row">
            <div class="single-portfolio-image">
                <a data-fancybox href="<?php the_field('full_image'); ?>">
                    <img src="<?php the_field('full_image'); ?>" alt="<?php the_title(); ?>">
                </a>
            </div>

            <div class="single-portfolio-content">
                <div class="single-portfolio-wrap">
                    <h1><?php the_title(); ?></h1>
                    <a rel="nofollow" class="single-portfolio-link" href="<?php the_field( 'site_link' ); ?>" target="_blank"><?php pll_e( 'View site' ); ?></a>

                    <div class="single-portfolio-description">
						<?php the_field( 'description' ); ?>
                    </div>

                    <div class="single-portfolio-button">
                        <a class="btn" href="<?php the_permalink($contact_id); ?>"><?php pll_e( 'Contact' ); ?></a>
                    </div>
                </div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>