<?php
/*
 *  Template Name: Portfolio
 */

get_header();
?>

    <section class="page-area portfolio">
        <h1 style="display: none;"><?php the_title(); ?></h1>
        <header class="portfolio-header">
            <div class="portfolio-header-descr">
				<?php the_field( 'description' ); ?>
            </div>
            <div class="portfolio-header-btns">
                <div>
                    <a class="btn" href="<?php the_field( 'about_page' ) ?>"><?php pll_e( 'About' ); ?></a>
                </div>
                <div>
                    <a class="btn" href="<?php the_field( 'contact_page' ) ?>"><?php pll_e( 'Contact' ); ?></a>
                </div>
            </div>
        </header>

        <div class="portfolio-grid">
            <div class="portfolio-grid-card">
                <div class="portfolio-grid-item">

                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>