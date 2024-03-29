<!DOCTYPE HTML>
<html>
<head <?php language_attributes(); ?>>
    <title><?php wp_title( '' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name='freelancehunt' content='309043dc946fc5a'>
    <link rel="stylesheet" href="/wp-content/themes/hitmark-theme/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap">

	<?php
	wp_head();
	$favicon = get_option( 'theme_favicon' );
	?>
    <meta name='apple-itunes-app' content='app-id=​myAppStoreID​'>
    <link rel="icon" href="<?php print $favicon; ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php print $favicon; ?>" type="image/x-icon"/>

	<?php if ( ! isset( $_SERVER['HTTP_USER_AGENT'] ) || stripos( $_SERVER['HTTP_USER_AGENT'], 'Lighthouse' ) === false ) : ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous"/>
	<?php endif; ?>
</head>
<body <?php body_class(); ?>>
<script>
</script>
<div id="root">
    <div class="app">
        <div class="app_main">
            <nav id="left-nav" class="left-nav<?php echo is_front_page() ? ' front-nav' : ''; ?>">
                <div class="left-nav-wrap">
	                <?php do_action('wpml_add_language_selector'); ?>
                    <div class="left-nav-divider"></div>
                    <div class="bottom-nav">
                        &copy; / <?php echo date( 'Y' ); ?>
                    </div>
                </div>
            </nav>
            <main class="main">