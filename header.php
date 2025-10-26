<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 
	<?php wp_head(); ?>
	<script async
src="https://www.googletagmanager.com/gtag/js?id=G-ZZZ1T0LVPH"></script>

<script>

window.dataLayer = window.dataLayer || [];

function gtag(){dataLayer.push(arguments);}

gtag('js', new Date());

gtag('config', 'G-ZZZ1T0LVPH');

</script>
</head>

<body id="kubio" <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div class="site" id="page-top">
	<?php dacnis_theme()->get( 'header' )->render(); ?>
