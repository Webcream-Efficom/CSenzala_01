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

<!--####### DEBUT PRE FOOTER #######-->
	<footer id="colophon" class="site-footer" role="contentinfo">
    	<ul class="tableau_prefooter">
        	<li>
            	<div class="pre_footer_block pre_footer_capoeira">
                	<div class="pre_footer_info">
                    	<h3>La Capoeira</h3>
                    	<p><img src="//localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/histoire-dark.svg" style="width:30px" alt="Découvrez l'ensemble de la Capoeira. Du passé au présent."></p>
                    	<a href="?p=100"><p class="title_prefooter">La Capoeira</p></a>
                    	<div class="liens_hover">
                    		<p><a href="?p=100">Son histoire</a></p>
                    		<p><a href="?p=100">La musique</a></p>
                    		<p><a href="?p=100">Le folklore brésilien</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_grupo_senzala">
                	<div class="pre_footer_info">
                    	<h3>Grupo Senzala 78</h3>
                    	<p><img src="//localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/grupo-senzala-dark.svg" style="width:30px" alt="Le Groupe Senzala est l'un des groupes les plus emblématique du XXème siècle."></p>
                    	<a href="?p=49"><p class="title_prefooter">Grupo Senzala</p></a>
                    	<div class="liens_hover">
                    		<p><a href="?p=49">Le groupe</a></p>
                    		<p><a href="?p=49">Les maîtres</a></p>
                    		<!--<p><a href="?p=49">Les grades</a></p>-->
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_galerie">
                	<div class="pre_footer_info">
                    	<h3>Galerie</h3>
                    	<p><img src="//localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/play-dark.svg" style="width:30px" alt="Décrouvrez ce que nous avons produit et ce qu'on dit de l'association."></p>
                    	<a href="?p=7"><p class="title_prefooter">Galerie</p></a>
                    	<div class="liens_hover">
                    		<p><a href="?p=83">Presse</a></p>
                    		<p><a href="?p=81">Musique</a></p>
                            <p><a href="?p=79">Photos</a></p>
                            <p><a href="?p=77">Vidéos</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_contact">
                	<div class="pre_footer_info">
                    	<h3>Contact</h3>
                    	<p><img src="//localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/contact-dark.svg" style="width:30px" alt="Restez en contact avec les responsables de l'association Capoeira Senzala 78 !"></p>
                    	<p class="title_prefooter">Contact</p>
                    	<div class="liens_hover">
                    		<p><a href="?p=73">+ d'infos</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>
    	</ul>

<!--####### FIN PRE FOOTER #######-->

						<?php get_sidebar( 'main' ); ?>

						<div class="motif_ceinture"></div>

<!-- ICI EST INSTALLÉ LE FOOTER AVEC LES MENTIONS LÉGALES-->

                    <div id="footer_copyright_container">
                		<p class="footer_copyright">© Escola de Capoeira | Grupo Senzala 78</p>
                        <a href="http://www.youtube.com/playlist?list=PLF3940A5FF5E32F82" title="Découvrez et partagez nos vidéos" target="_blank" alt="Youtube Capoeira Senzala 78">Youtube</a>|
                        <a href="https://www.facebook.com/SenzalaCapoeiraStg" title="Suivez-nous sur Facebook" target="_blank" alt="Facebook Senzala 78">Facebook</a>|
                        <a href="?p=92">Mentions Légales</a>|
                		<a href="?p=150">Site réalisé par<img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/webcream.png" width="100px"></a>
                    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>