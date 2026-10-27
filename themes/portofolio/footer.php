<footer class="site-footer">
	<div class="container footer-inner">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Neem contact op', 'portofolio' ); ?> <span aria-hidden="true">↗</span></a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
