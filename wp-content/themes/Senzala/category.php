<?php
/**
* The template for displaying Category pages
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

    /* Constantes et Globales */
    $BASE_DIR = "wp-content/themes/Senzala/";
    $ICON_DIR = "images/pictos/";
    $ICON_LIST = array('evenement' => 'evenements-dark.svg', 'courant' => 'courant-dark.svg', 'defaut' => 'courant-dark.svg');

    $urlSite = get_option('home')."/";
    $isRequestFromPageLoad = true;

    if( isset($_GET["actu"]) ) {
        $isRequestFromPageLoad = false;
    }
    
    function makeParam( $date, $id ) {
        $mois  = get_category_by_slug($date[1])->term_id;
        $annee = get_category_by_slug($date[2])->term_id;
        return "'".$mois."-".$annee."-i".$id."'";
    }
    
    function makeComboBoxes() {
        global $jour;
        global $mois;
        global $annee;
        /* Initialiser avec l'annee/mois du jour lors de la premiere visite */
        /* Apres selection, se rappeler de des cat(dates) saisies pour les select des deroulants*/
        $date  = explode ( '-' , date("d-m-Y") );
        $jour  = $date[0];
        $mois  = isset($_GET["month"]) ? $_GET["month"] : get_category_by_slug($date[1])->term_id;
        $annee = isset($_GET["ayear"]) ? $_GET["ayear"] : get_category_by_slug($date[2])->term_id;

        /* Recuperer les ID des deux categories parentes ( annee et mois ) */
        $actu_a = get_category_by_slug('actualites_annee')->term_id;
        $actu_m = get_category_by_slug('actualites_mois')->term_id;

        /* fabriquer les deux deroulants */
        /* hide_empty a zero permet d'afficher les cat meme sans article attache */
        /* name sert a identifier le select dans le html pour le javascript a suivre */
        /* show_count a True perme de montrer le nombre d'articles. */
        /* Mettre False ou virer l'element pour effecer ce nombre */
        $args = array( 'hide_empty' => 0, 'show_count' => False, 'child_of' => $actu_a, 'selected' => $annee, 'name' => 'annee', 'echo' => 0 );
        $combo = wp_dropdown_categories( $args );
        $combo = preg_replace("#<select([^>]*)>#", "<select$1 onchange='panel.onCatChange()'>", $combo);
        echo ($combo);
        $args = array( 'hide_empty' => 0, 'show_count' => False, 'child_of' => $actu_m, 'selected' => $mois, 'name' => 'mois', 'echo' => 0 );
        $combo = wp_dropdown_categories( $args );
        $combo = preg_replace("#<select([^>]*)>#", "<select$1 onchange='panel.onCatChange()'>", $combo);
        echo ($combo);
        
    } /* end initComboBoxes */
    
    function getPostTag() {
        global $ICON_LIST;
        $posttags = get_the_tags();
        $tag_names = array();
        if ($posttags) {
            /* Faire une liste des tags du post */
            foreach ( $posttags as $tag ) {
                $tag_names[] = $tag->name;
            }
            /* Chercher si un tag d'icone est égal à un tag du post */
            foreach ( $ICON_LIST as $key => $value) {
                if( in_array($key, $tag_names) ) return $value;
            }
        }
        return $ICON_LIST['defaut'];
    } /* end getPostTag */
    
    function isDateAfterToday( $date ) {
        $today  = explode ( '-' , date("d-m-Y") );
        if( $date[2] < $today[2] ) return false;
        if( $date[2] > $today[2] ) return true;
        if( $date[1] < $today[1] ) return false;
        if( $date[1] > $today[1] ) return true;
        if( $date[0] < $today[0] ) return false;
        return true;
    }
?>
<script type="text/javascript"><!--
    urlSite = "<?php echo $urlSite; ?>";
--></script>

<link rel='stylesheet' href='http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/actus.css' type='text/css' media='all' />
<script type="text/javascript" src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/actus.js"></script>




<?php if( $isRequestFromPageLoad ): ?>
    <?php get_header(); ?>
    <div class="titre_page_actu">
        <img src="http://localhost:8888/CSenzala_01//wp-content/themes/Senzala/images/pictos/actus.svg" class="picto"/>
        <span class="titre_picto">Actualités</span>
        <hr class="titre">
    </div>
    <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <div class="actualites">
    <div id="cadre" class="cadre">
<?php endif; /* $isRequestFromPageLoad */ ?>




<div class="margeGauche"></div>
<div id="boite1" class="summary">

    <div id="combos" class="listes_deroulantes" align="center">
        
            <?php makeComboBoxes(); ?>
        
    </div><!-- fin div class listes_deroulantes -->
    <div class="barre_noire"> </div>
    <div class="summary_cont">
    <?php /* loop des summary */ ?>
    <?php /* La requete est effectuee sur le AND des deux categories selectionnees et renvoyees dans l'URI */ ?>
    <?php $query = new WP_Query(array( 'post_status' => array( 'publish', 'future' ), 'category__and' => array( $annee, $mois ) )  ); ?><!--version categories-->
    <?php if ( $query->have_posts() ) : ?><!-- new query -->
        <?php $index=1; ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="cont" onclick="panel.deplace(<?php echo($index++); ?>);">
                <div class="sumdate">
                    <?php $dates  = explode ( '-' , get_the_date("D-j-M.") ); ?>
                    <div class="sumdate_number"><?php echo $dates[1]; ?><br /></div>
                    <div class="sumdate_jour"><?php echo $dates[0]; ?><br /></div>
                    <div class="sumdate_mois"><?php echo $dates[2]; ?></div>
                </div>
                <div class="sumicone">
                    <img src="<?php echo $urlSite.$BASE_DIR.$ICON_DIR.getPostTag(); ?>" alt="Klematis" width="60" height="60">
                </div>
                <div class="sumactus">
                    <div class="sumactus_titre"><?php the_title(); ?></div>
                    <span class="sumactus_res"><?php the_excerpt(); ?></span>
                </div>

            </div>
        <?php /* fin loop des summary */ ?>
        <?php endwhile; ?>
    <?php /* else pas de post : texte pas cliquable */ ?>
    <?php else : ?>
        <div class="erreur_mois"> 
            Il n'y a aucun événements à cette date.
        </div>
        <!--<?php /*get_template_part( 'content', 'none' ); */?>-->
    <?php endif; ?>
    <?php /* Restore original Post Data */ ?>
    <?php wp_reset_postdata(); ?><!-- new query -->
    </div>
</div><!-- id boite1, class summary -->

<?php /* loop des details : actus puis importants */ ?>
<?php $index=1; ?>
<?php /* boucle des details actus */ ?>
<?php $query = new WP_Query(array( 'post_status' => array( 'publish', 'future' ), 'category__and' => array( $annee, $mois ) )  ); ?><!--version categories-->
<?php if ( $query->have_posts() ) : ?><!-- new query -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div id="<?php echo('detail'.$index++); ?>" class="detail">
            <div class="cont_detail">

                <!-- ici pour mettre le bouton de retour avec le onclick ^ et ne pas le mettre dans les deux !! -->
                <div class="bouton_fermer" onclick="panel.replace();">
                    <img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pictos/btn-retour-dark.svg" width="12px"/> Retour au calendrier
                </div>
                
                <div class="date_icon">
                    <div class="sumicone">
                       <img src="<?php echo $urlSite.$BASE_DIR.$ICON_DIR.getPostTag(); ?>" alt="Klematis" width="60" height="60">
                    </div>
                    <div class="sumdatedetail">
                        <?php $dates  = explode ( '-' , get_the_date("D-j-M.") ); ?>
                        <div class="sumdatedetail_number"><?php echo $dates[1]; ?><br /></div>
                        <div class="sumdatedetail_jour"><?php echo $dates[0]; ?><br /></div>
                        <div class="sumdatedetail_mois"><?php echo $dates[2]; ?></div>
                    </div>
                </div>
                <div class="titre_article_actus"><?php the_title(); ?></div>
                <div class="contenu_article_actus"><?php the_content(); ?></div>
            </div>
        </div><!-- class detail -->
    <?php endwhile; ?>
<?php /* fin loop des detail */ ?>
<?php endif; /* fin query->have_posts */?>
<?php /* Restore original Post Data */ ?>
<?php wp_reset_postdata(); ?><!-- new query -->

<?php $index = 1; ?>
<?php /* boucle des details importants */ ?>
<?php $query = new WP_Query(array ( 'post_status' => array( 'publish', 'future' ), 'tag'=>'important', 'orderby' => 'date', 'order' => 'ASC')); ?><!-- posts taggués importants -->
<?php if ( $query->have_posts() ) : ?><!-- new query -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php $dates  = explode ( '-' , get_the_date("j-m-Y.") ); ?>
        <?php if( isDateAfterToday( $dates )) : ?>
          <div id="<?php echo('detaili'.$index++); ?>" class="detail"> 
            <div class="cont">
                <div class="bouton_fermer" onclick="panel.replace();">
                    <img src="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/pictos/btn-retour-dark.svg" width="12px" /> Retour au calendrier
                </div>
                
                <div class="date_icon">
                    <div class="sumicone">
                       <img src="<?php echo $urlSite.$BASE_DIR.$ICON_DIR.getPostTag(); ?>" alt="Klematis" width="60" height="60">
                    </div>
                    <div class="sumdatedetail">
                        <?php $dates  = explode ( '-' , get_the_date("D-j-M.") ); ?>
                        <div class="sumdatedetail_number"><?php echo $dates[1]; ?><br /></div>
                        <div class="sumdatedetail_jour"><?php echo $dates[0]; ?><br /></div>
                        <div class="sumdatedetail_mois"><?php echo $dates[2]; ?></div>
                    </div>
                </div>
                <div class="titre_article_actus"><?php the_title(); ?></div>
                <div class="contenu_article_actus"><?php the_content(); ?></div>
            </div>
          </div><!-- class detaili -->
        <?php endif; /* isDateAfterToday */ ?>
    <?php endwhile; ?>
<?php /* fin loop des detail */ ?>
<?php endif; ?>
<?php /* Restore original Post Data */ ?>
<?php wp_reset_postdata(); ?><!-- new query -->

<div id="inter" class="intercalaire"></div>

<div id="important1" class="important">
    <div id="combos" class="immanquables" align="left">
        <h3>LES IMMANQUABLES</h3>
    </div><!-- fin div class listes_deroulantes -->

    <?php /* loop des importants */ ?>
    <?php $query = new WP_Query(array ( 'post_status' => array( 'publish', 'future' ), 'tag'=>'important', 'orderby' => 'date', 'order' => 'ASC')); ?><!-- posts taggués importants -->
    <?php if ( $query->have_posts() ) : ?>
        <?php $index=1; ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <?php $dates  = explode ( '-' , get_the_date("j-m-Y-D-M.") ); ?>
          <?php if( isDateAfterToday( $dates )) : ?>
            <div class="cont" onclick="panel.remplace(<?php echo(makeParam($dates, $index++)); ?>);">
                <div class="sumdateimportant">
                    <?php/* $dates  = explode ( '-' , the_date("D-j-M.","","",false) ); */?>
                    <div class="sumdateimportant_number"><?php echo $dates[0]; ?><br /></div>
                    <div class="sumdateimportant_jour"><?php echo $dates[3]; ?><br /></div>
                    <div class="sumdateimportant_mois"><?php echo $dates[4]; ?></div>
                </div>
                
                <div class="impactus">
                <!--avant, il y avait un lien (get_permalink() ) -->
                    <div class="impactus_titre"><?php the_title(); ?></div>
                    <span class="impactus_res"><?php the_excerpt(); ?></span>
                </div>
            </div>
          <?php endif; /* isDateAfterToday */ ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php /* Restore original Post Data */ ?>
    <?php wp_reset_postdata(); ?>
</div><!-- class important -->

<div class="margeDroite"></div>

<?php if( $isRequestFromPageLoad ): ?>
    </div><!-- class cadre -->
    </div><!-- #actualites -->
    </div><!-- #content -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
<?php endif; /* isRequestFromPageLoad */ ?>