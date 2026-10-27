<?php
get_header();
?>

<main id="main-content" class="content-page">
	<div class="container narrow-container">
		<p class="eyebrow"><?php esc_html_e( 'Over mij', 'portofolio' ); ?></p>
		<h1><?php esc_html_e( 'Leren door te maken.', 'portofolio' ); ?></h1>
		<div class="entry-content">
			<p><?php esc_html_e( 'Ik ben [jouw naam], student software development en enthousiast over alles wat je met code kunt bouwen. Ik vind het leuk om een idee om te zetten in iets dat prettig werkt en er verzorgd uitziet.', 'portofolio' ); ?></p>
			<h2><?php esc_html_e( 'Waar ik graag mee werk', 'portofolio' ); ?></h2>
			<p><?php esc_html_e( 'Op school en in eigen projecten oefen ik met HTML, CSS, JavaScript en PHP. Ik ben nieuwsgierig naar nieuwe tools, werk graag stap voor stap en sta open voor feedback.', 'portofolio' ); ?></p>
			<h2><?php esc_html_e( 'Op zoek naar een stage', 'portofolio' ); ?></h2>
			<p><?php esc_html_e( 'Voor mijn stage zoek ik een plek waar ik mijn technische vaardigheden verder kan ontwikkelen en kan leren van ervaren developers. Ik breng enthousiasme, inzet en een frisse blik mee.', 'portofolio' ); ?></p>
		</div>
		<a class="button button-primary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Laten we kennismaken', 'portofolio' ); ?> <span aria-hidden="true">→</span></a>
	</div>
</main>

<?php
get_footer();
