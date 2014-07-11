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
                    	<p><img src="https://dl.dropboxusercontent.com/u/79008563/Senzala%20GMap%20Icon/pre_footer/histoire.png" style="width:30px"></p>
                    	<p class="title">La Capoeira</p>
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
                    	<h3>Grupo Senzala</h3>
                    	<p><img src="https://dl.dropboxusercontent.com/u/79008563/Senzala%20GMap%20Icon/pre_footer/grupo_senzala.png" style="width:30px"></p>
                    	<p class="title">Grupo Senzala</p>
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
                    	<p><img src="https://dl.dropboxusercontent.com/u/79008563/Senzala%20GMap%20Icon/pre_footer/galerie.png" style="width:30px"></p>
                    	<p class="title">Galerie</p>
                    	<div class="liens_hover">
                    		<p><a href="http://localhost:8888/CSenzala_01/?p=83">Presse</a></p>
                    		<p><a href="http://localhost:8888/CSenzala_01/?p=81">Musique</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>

        	<li>
            	<div class="pre_footer_block pre_footer_contact">
                	<div class="pre_footer_info">
                    	<h3>Contact</h3>
                    	<p><img src="https://dl.dropboxusercontent.com/u/79008563/Senzala%20GMap%20Icon/pre_footer/contact.png" style="width:30px"></p>
                    	<p class="title">Contact</p>
                    	<div class="liens_hover">
                    		<p><a href="http://localhost:8888/CSenzala_01/?p=73">+ d'infos</a></p>
                    	</div>
                	</div>
            	</div>
        	</li>
    	</ul>

<!--####### FIN PRE FOOTER #######-->

						<?php get_sidebar( 'main' ); ?>

						<div class="motif_ceinture"></div>

<!-- ICI EST INSTALLÉ LE FOOTER AVEC LES MENTIONS LÉGALES-->

                    <div id="footer_copyright">
                		<p class="footer_copyright">©ESCOLA DE CAPOEIRA GRUPO SENZALA 78</p>
                        <a href="http://www.youtube.com/playlist?list=PLF3940A5FF5E32F82">Youtube</a>|
                        <a href="https://www.facebook.com/SenzalaCapoeiraStg">Facebook</a>|             		
                        <a href="http://localhost:8888/CSenzala_01/?p=92">Mentions Légales</a>|
                		<a href="http://localhost:8888/CSenzala_01/?p=150">Site réalisé par<img src="wp-content/themes/Senzala/images/webcream.png" width="100px" height="18px"></a>
                    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>