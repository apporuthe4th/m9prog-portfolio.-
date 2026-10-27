<?php
get_header();
?>

<main id="main-content" class="content-page">
	<div class="container">
		<header class="projects-heading">
			<p class="eyebrow"><?php esc_html_e( 'Geselecteerd werk', 'portofolio' ); ?></p>
			<h1><?php esc_html_e( 'Projecten waar ik van leer.', 'portofolio' ); ?></h1>
			<p><?php esc_html_e( 'Een selectie van school- en oefenprojecten. Vervang de voorbeeldteksten en links door je eigen werk.', 'portofolio' ); ?></p>
		</header>
		<div class="project-grid">
			<article class="project-card">
				<div class="project-visual visual-coral" aria-hidden="true"><span class="visual-label">01 / WEB</span><span class="visual-icon">✳</span></div>
				<div class="project-info">
					<p class="project-type"><?php esc_html_e( 'Webdesign · HTML & CSS', 'portofolio' ); ?></p>
					<h2><?php esc_html_e( 'Studio Noord', 'portofolio' ); ?></h2>
					<p><?php esc_html_e( 'Een frisse, responsive website voor een fictieve creatieve studio, met focus op duidelijke navigatie en sterke typografie.', 'portofolio' ); ?></p>
				</div>
			</article>
			<article class="project-card">
				<div class="project-visual visual-lilac" aria-hidden="true"><span class="visual-label">02 / APP</span><span class="visual-icon">▦</span></div>
				<div class="project-info">
					<p class="project-type"><?php esc_html_e( 'Webapp · JavaScript', 'portofolio' ); ?></p>
					<h2><?php esc_html_e( 'Daily Bits', 'portofolio' ); ?></h2>
					<p><?php esc_html_e( 'Een kleine taken-app om dagelijkse doelen bij te houden. Gebouwd om JavaScript, interactie en local storage te oefenen.', 'portofolio' ); ?></p>
				</div>
			</article>
			<article class="project-card">
				<div class="project-visual visual-mint" aria-hidden="true"><span class="visual-label">03 / CODE</span><span class="visual-icon">&lt;/&gt;</span></div>
				<div class="project-info">
					<p class="project-type"><?php esc_html_e( 'Portfolio · PHP & WordPress', 'portofolio' ); ?></p>
					<h2><?php esc_html_e( 'Mijn portfolio', 'portofolio' ); ?></h2>
					<p><?php esc_html_e( 'Een eigen WordPress-thema als plek om mijn ontwikkeling te laten zien. Semantisch opgebouwd en ontworpen voor mobiel.', 'portofolio' ); ?></p>
				</div>
			</article>
		</div>
		<div class="projects-cta">
			<p><?php esc_html_e( 'Benieuwd naar mijn aanpak of code?', 'portofolio' ); ?></p>
			<a class="text-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Neem contact op', 'portofolio' ); ?> <span aria-hidden="true">→</span></a>
		</div>
	</div>
</main>

<?php
get_footer();
