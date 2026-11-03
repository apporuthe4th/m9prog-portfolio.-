<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<section id="Headeridentifier">Header</section>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Spring naar de inhoud', 'portofolio' ); ?></a>
<header class="site-header">
	<div class="container header-inner">
		<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="brand-mark" aria-hidden="true">&lt;/&gt;</span>
			<span><?php bloginfo( 'name' ); ?></span>
		</a>
		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Hoofdnavigatie', 'portofolio' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'portofolio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/over-mij/' ) ); ?>"><?php esc_html_e( 'Over mij', 'portofolio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/projecten/' ) ); ?>"><?php esc_html_e( 'Projecten', 'portofolio' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact', 'portofolio' ); ?></a>
		</nav>
	</div>
</header>
