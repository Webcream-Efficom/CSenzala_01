<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<div class="prefooter">
				<div class="cadre_prefooter_un">
					Grupo Senzala
				</div>

				<div class="cadre_prefooter_deux">
					Galerie
				</div>

				<div class="cadre_prefooter_trois">
					Boutique
				</div>

				<div class="cadre_prefooter_quatre">
					Newsletter
				</div>

			</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>


			

<!-- ICI EST INSTALLÉ LE FOOTER AVEC LES MENTIONS LÉGALES-->
			<div class="footer_bandeau">
				<div class="cadre_footer_un">
					Infos utiles
				</div>

				<div class="cadre_footer_deux">
					Groupe Senzala
				</div>

				<div class="cadre_footer_trois">
					Pages
				</div>

				<div class="cadre_footer_quatre">
					Connect
				</div>

			</div>
		


</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>