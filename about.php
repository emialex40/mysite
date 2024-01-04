<?php
/*
 *  Template Name: About
 */

get_header(); ?>

    <section class="page-area about">
        <div class="about-header">
            <h1 class="title about-title"><?php the_title(); ?></h1>
            <div class="about-image">
                <div class="about-image-wrap">
                    <div class="about-image-mask"></div>
                    <img src="<?php the_field('profile_foto'); ?>" alt="<?php pll_e( 'Olexander Yemeliantsev' ); ?>">
                </div>
            </div>
        </div>

        <article class="about-content">
            <h2><?php the_field('title'); ?></h2>
            <div class="about-grid">
                <div class="about-grid-left about-grid-text">
                    <?php the_field('about-text1'); ?>
                    <div class="button-wrap">
                        <a href="<?php the_field( 'add_cv', 'option' ); ?>" class="btn" download="CV"><?php pll_e( 'Download CV' ); ?></a>
                    </div>
                </div>

                <div class="about-grid-right about-grid-text">
                    <h2><?php the_field('skills_title'); ?></h2>
                    <?php the_field('about_text2'); ?>
                    <div class="button-wrap">
                        <a href="<?php the_field( 'portfolio_button' ); ?>" class="btn"><?php pll_e( 'Portfolio' ); ?></a>
                    </div>
                </div>

                <div class="about-grid-left about-grid-text">
                    <h2><?php the_field('exp_title'); ?></h2>
		            <?php the_field('about_text_3'); ?>
                    <div class="button-wrap">
                        <a href="<?php the_field( 'contact_button' ); ?>" class="btn"><?php pll_e( 'Contact' ); ?></a>
                    </div>
                </div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>