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
				<div class="cadre_prefooter_grupo_senzala">
					<div class="prefooter_title">Grupo Senzala</div>
                    <a href="#" class="lien_prefooter_grupo_senzala"></a>
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
						<li><a href="/CSenzala_01/?page_id=28">Tarifs</a></li>
                    	<li><a href="/CSenzala_01/?page_id=30">Inscription</a></li>
                    	<li><a href="/CSenzala_01/?page_id=24">Où pratiquer</a></li>
                    	<li><a href="/CSenzala_01/?page_id=71">Informations</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_grupo_senzala">
                	<h2>Grupo Senzala</h2>
                    <ul>
						<li><a href="/CSenzala_01/?page_id=49">Le Groupe Senzala</a></li>
                    	<li><a href="/CSenzala_01/?page_id=36">Grade 78</a></li>
                    	<li><a href="/CSenzala_01/?page_id=34">Musique</a></li>
                    	<li><a href="/CSenzala_01/?page_id=68">L'Éducation des jeunes</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_pages">
                	<h2>Contenu</h2>
                    <ul>
						<li><a href="/CSenzala_01/?page_id=73">Contact</a></li>
                    	<li><a href="/CSenzala_01/?page_id=75">Newsletter</a></li>
                    	<li><a href="/CSenzala_01/?page_id=7">Média</a></li>
                    	<li><a href="/CSenzala_01/?cat=3">Actualités</a></li>
                    </ul>
				</div>

				<div class="cadre_footer_connect">
                	<h2>Social</h2>
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
                		<a href="/CSenzala_01/?page_id=73">Contact</a>|
                		<a href="/CSenzala_01/?page_id=86">FAQ</a>|
                		<a href="/CSenzala_01/?page_id=88">Lexique</a>|
                		<a href="/CSenzala_01/?page_id=90">Partenaires</a>|
                		<a href="/CSenzala_01/?page_id=92">Mentions Légales</a>
                    </div>

</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>