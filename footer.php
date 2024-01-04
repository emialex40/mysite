<?php if (!is_front_page()) : ?>
<?php if (!is_page_template('contact.php')) : ?>
<footer class="footer">
	<?php if ( get_field( 'logo', 'option' ) ) : ?>
        <div class="footer-logo">
            <img src="<?php the_field( 'logo', 'option' ); ?>" alt="<?php echo bloginfo( 'name' ); ?>">
        </div>
	<?php endif; ?>
</footer>
    <?php endif; ?>

<a href="<?php echo get_home_url(); ?>" class="to-home"><?php _e( 'Home', 'themename' ); ?></a>
<?php endif; ?>

</main>
</div>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>