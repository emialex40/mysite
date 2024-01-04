<?php
/*
 *  Template Name: Contact Page
 */

get_header();
?>

    <section class="page-area contacts-page">
        <div class="contacts-page-header">
            <h1 class="title contacts-page-title"><?php the_title(); ?></h1>
            <div class="contacts-page-image">
                <div class="contacts-page-image-wrap">
                    <div class="contacts-page-image-mask"></div>
                    <img src="<?php the_field( 'cp_image' ); ?>" alt="<?php the_title(); ?>">
                </div>
            </div>
        </div>

        <div class="contacts-page-content">
            <div class="contacts-page-links">
                <a href="<?php the_field('ct_about_page'); ?>"><?php _e( 'About', 'themename' ); ?></a>
                <a href="<?php the_field('ct_portfolio_page'); ?>"><?php _e( 'Portfolio', 'themename' ); ?></a>
            </div>
            <p class="contacts-page-hello"><?php the_field('hello_text'); ?></p>

            <ul class="contacts-page-contacts">
                <li><a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a></li>
                <?php if (have_rows('contacts')) : ?>
                <?php while (have_rows('contacts')) : the_row(); ?>
                    <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>