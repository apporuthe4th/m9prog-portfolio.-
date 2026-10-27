<?php
get_header();
?>

<main id="main-content">
	<section class="hero-section">
		<div class="container hero-grid">
			<div class="hero-copy">
				<p class="eyebrow"><span class="status-dot" aria-hidden="true"></span><?php esc_html_e( 'Op zoek naar een stageplek', 'portofolio' ); ?></p>
				<h1><?php esc_html_e( 'Hoi, ik ben Timothy.', 'portofolio' ); ?><br><span><?php esc_html_e( 'Ik bouw digitale ideeën.', 'portofolio' ); ?></span></h1>
				<p class="hero-intro"><?php esc_html_e( 'Een nieuwsgierige software developer in opleiding. Ik maak graag toegankelijke, gebruiksvriendelijke websites en applicaties en zoek een stage om verder te groeien.', 'portofolio' ); ?></p>
				<div class="hero-actions">
					<a class="button button-primary" href="<?php echo esc_url( home_url( '/projecten/' ) ); ?>"><?php esc_html_e( 'Bekijk mijn projecten', 'portofolio' ); ?> <span aria-hidden="true">→</span></a>
					<a class="text-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Kom met me in contact', 'portofolio' ); ?></a>
				</div>
			</div>
			<div class="hero-art" aria-hidden="true">
				<div class="pixel-window">
					<div class="window-bar"><i></i><i></i><i></i><span>mijn-portfolio.exe</span></div>
					<div class="window-content">
						<p class="code-muted">// vandaag bouwen</p>
						<p><span class="code-purple">const</span> toekomst = <span class="code-green">'developer'</span>;</p>
						<p><span class="code-purple">while</span> (leren) {</p>
						<p class="code-indent">maakIetsMoois();</p>
						<p>}</p>
						<p class="code-cursor">_</p>
					</div>
				</div>
				<span class="hero-spark spark-one" aria-hidden="true">✳</span>
				<span class="hero-spark spark-two" aria-hidden="true">✦</span>
			</div>
		</div>
		<div class="hero-bottom container">
			<span><?php esc_html_e( 'Code met aandacht', 'portofolio' ); ?></span>
			<span class="hero-line" aria-hidden="true"></span>
			<span><?php esc_html_e( 'Nieuwsgierig naar wat volgt', 'portofolio' ); ?></span>
		</div>
	</section>

	<section class="intro-section section-pad">
		<div class="container intro-grid">
			<p class="eyebrow"><?php esc_html_e( 'Even voorstellen', 'portofolio' ); ?></p>
			<div>
				<h2><?php esc_html_e( 'Techniek is mooi. Iets maken dat mensen echt helpt? Nog mooier.', 'portofolio' ); ?></h2>
				<p><?php esc_html_e( 'Ik leer software ontwikkelen door te doen: ideeën uitwerken, code schrijven en steeds blijven verbeteren. Op zoek naar een stage waar ik kan bijdragen, vragen kan stellen en samen met een team mooie dingen kan maken.', 'portofolio' ); ?></p>
				<a class="text-link" href="<?php echo esc_url( home_url( '/over-mij/' ) ); ?>"><?php esc_html_e( 'Meer over mij', 'portofolio' ); ?> <span aria-hidden="true">→</span></a>
			</div>
		</div>
	</section>

	<section class="contact-section section-pad" id="contact">
		<div class="container contact-inner">
			<p class="eyebrow"><?php esc_html_e( 'Heb je een stageplek?', 'portofolio' ); ?></p>
			<h2><?php esc_html_e( 'Ik hoor graag van je.', 'portofolio' ); ?></h2>
			<p><?php esc_html_e( 'Laten we kennismaken en bespreken hoe ik jouw team kan helpen.', 'portofolio' ); ?></p>
			<a class="button button-light" href="mailto:jouw.email@example.com"><?php esc_html_e( 'Stuur me een e-mail', 'portofolio' ); ?> <span aria-hidden="true">↗</span></a>
		</div>
	</section>
</main>

<?php
get_footer();
