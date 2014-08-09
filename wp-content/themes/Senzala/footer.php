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
                    	<p><img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/histoire.svg" style="width:30px"></p>
                    	<p class="title_prefooter">La Capoeira</p>
                    	<div class="liens_hover">
                    		<p><a href="#">Son histoire</a></p>
                    		<p><a href="#">Les Styles</a></p>
                    		<p><a href="#">Le folklore brésilien</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_grupo_senzala">
                	<div class="pre_footer_info">
                    	<h3>Grupo Senzala 78</h3>
                    	<p><img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/grupo_senzala.svg" style="width:30px"></p>
                    	<p class="title_prefooter">Grupo Senzala</p>
                    	<div class="liens_hover">
                    		<p><a href="#">Le groupe</a></p>
                    		<p><a href="#">Les Maîtres</a></p>
                    		<p><a href="#">Les grades</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_gallerie">
                	<div class="pre_footer_info">
                    	<h3>Galerie</h3>
                    	<p><img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/galerie.svg" style="width:30px"></p>
                    	<a href="?p=7"><p class="title_prefooter">Galerie</p></a>
                    	<div class="liens_hover">
                    		<p><a href="?p=83">Presse</a></p>
                    		<p><a href="?p=81">Musique</a></p>
                            <p><a href="?p=77">Vidéos</a></p>
                            <p><a href="?p=79">Photos</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_contact">
                	<div class="pre_footer_info">
                    	<h3>Contact</h3>
                    	<p><img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pre_footer/contact.svg" style="width:30px"></p>
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
                		<p class="footer_copyright">©ESCOLA DE CAPOEIRA GRUPO SENZALA 78</p>
                        <a href="http://www.youtube.com/playlist?list=PLF3940A5FF5E32F82" title="Découvrez et partagez nos vidéos" target="_blank">Youtube</a>|
                        <a href="https://www.facebook.com/SenzalaCapoeiraStg" title="Suivez-nous sur Facebook" target="_blank">Facebook</a>|             		
                        <a href="?p=92">Mentions Légales</a>|
                		<a href="?p=150">Site réalisé par<img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/webcream.png" width="100px" height="18px"></a>
                    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>