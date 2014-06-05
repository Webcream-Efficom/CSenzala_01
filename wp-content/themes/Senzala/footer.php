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
				<div class="cadre_prefooter_groupo_senzala">
					<div class="prefooter_title">Grupo Senzala</div>
                    <a href="#" class="lien_prefooter_groupo_senzala"></a>
				</div>

				<div class="cadre_prefooter_galerie">
					<div class="prefooter_title">Galerie</div>
                    <a href="#" class="lien_prefooter_galerie"></a>
				</div>

				<div class="cadre_prefooter_newsletter">
					<div class="prefooter_title">Newsletter</div>
                    <a href="#" class="lien_prefooter_newsletter"></a>
				</div>

				<div class="cadre_prefooter_contact">
					<div class="prefooter_title">Contact</div>
                    <a href="#" class="lien_prefooter_contact"></a>
				</div>

			</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>


			

<!-- ICI EST INSTALLÉ LE FOOTER AVEC LES MENTIONS LÉGALES-->

<!--####### DEBUT PRE FOOTER #######-->

			<div class="footer_bandeau">
				<div class="cadre_footer_info_utiles">
                	<h2>Info utiles</h2>
                    <ul>
						<li><a href="#">Tarifs</a></li>
                    	<li><a href="#">Inscription</a></li>
                    	<li><a href="#">Où pratiquer</a></li>
                    	<li><a href="#">Informations</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_groupo_senzala">
                	<h2>Grupo Senzala</h2>
                    <ul>
						<li><a href="#">Le Groupe Senzala</a></li>
                    	<li><a href="#">Grade 78</a></li>
                    	<li><a href="#">Musique</a></li>
                    	<li><a href="#">L'Éducation des jeunes</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_pages">
                	<h2>Pages</h2>
                    <ul>
						<li><a href="#">Contact</a></li>
                    	<li><a href="#">Newsletter</a></li>
                    	<li><a href="#">Galerie</a></li>
                    	<li><a href="#">Actualités</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_connect">
                	<h2>Connect</h2>
                    <ul>
						<li><a href="#">Facebook</a></li>
                    	<li><a href="#">Youtube</a></li>
                    </ul>
				</div>
			</div>
<!--####### FIN PRE FOOTER #######-->

					<div class="motif_ceinture"></div>
		             
                     <div id="footer_copyright">
                		<p class="footer_copyright">©2014 CAPOEIRA SENZALA</p>
                		<a href="#">Suivez-nous</a>|
                		<a href="#">Contact</a>|
                		<a href="#">FAQ</a>|
                		<a href="#">Lexique</a>|
                		<a href="#">Partenaires</a>|
                		<a href="#">Mentions Légales</a>
                    </div>

</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
