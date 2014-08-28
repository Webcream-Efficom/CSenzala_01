var panel = {
    delay: null,            /* objet de controle de l'animation */
    speed: 5,               /* rapidité d'exécution de l'animation */
    sens: -5,		        /* négatif : ouverture détail */
    positionMax: 750,       /* Largeur du div summary */
    positionMin: 50,	    /* position du div detail quand visible */
    xx: 750,                /* variable de l'animation ici, l'attribut left initialisée à positionMax */
    suite: 0,               /* booleen pour ouvrir après avoir fermer un détail */
    noeud: "",              /* String représenat l'ID du div important sélectionné */
    detail: "",             /* String représenat l'ID du div de détail sélectionné */
    
    selMois: null,
    selAnnee: null,
  
/***********************************/
/* fonction gestion déroulants     */
/***********************************/
  onCatChange: function ()
  {
    selMois  = document.getElementById("mois");
    selAnnee = document.getElementById("annee");
    var mois  = selMois.options[selMois.selectedIndex].value;
    var annee = selAnnee.options[selAnnee.selectedIndex].value;

//    var params = "?cat=3&actu=1&year="+annee+"&month="+mois;
    var params = "category/actualites_mois/?actu=1&ayear="+annee+"&month="+mois;
    this.writeInConsole("url deroul : "+urlSite);
    panel.sendRequest(params, urlSite);

  },
  
/***********************************/
/* fonction animation des panneaux */
/***********************************/
  anime: function()
  {
    var node = this.suite;
    var x1 = document.getElementById(this.detail);
    this.xx += this.sens;
    x1.style.left = this.xx.toString()+"px";

    if ( this.xx > this.positionMin && this.xx < this.positionMax) {
        this.delay = setTimeout("panel.anime();", this.speed);
    }
    else
    {
        clearInterval(this.delay);
        this.delay = null;
        if ( this.sens < 0 ) {
            this.xx = this.positionMin;
        }
        else {
            this.xx = this.positionMax;
        }

        /* ouvrir le detail demandé après avoir fermé le détail encore ouvert */
        if ( this.suite > 0 ) {
            this.suite = 0;
            panel.deplace( node );
        }
    }
  },
  
/*********************************/
/* retour panneau summary        */
/*********************************/
replace: function ()
{
    /* On utlise la dernière valeur de "noeud" et "detail" */
    this.sens = 5;
    this.anime();
},

/*********************************/
/* Déplacement du panneau detail */
/*********************************/
  deplace: function (node)
  {
    /* Déterminer l'état du div detail */
    if ( this.xx < this.positionMax )
    {
    	/* Sortir si autre animation en cours */
    	if ( this.xx > this.positionMin ) return;
    	/* Un panneau est déjà ouvert, le fermer avant de commencer l'animation */
    	this.suite = node;
    	this.replace();
    	return;
    }
    
    this.detail = "detail" + node;
    var x2 = document.getElementById(this.detail);
    
    x2.setAttribute("style","visibility:visible");

    this.sens = -5;
    this.anime();
  },

/**********************************/
/* Remplacement du panneau detail */
/**********************************/
  parseServeurReponse: function (reponse)
  {
    document.getElementById("cadre").innerHTML = reponse;
    if ( this.suite > 0 ) { 
        this.xx = this.positionMax;
        this.suite = 0;
        this.deplace( this.noeud );
    }
  },

/**********************************/
/* Remplacement du panneau detail */
/**********************************/
  sendRequest: function ( params, url )
  {
    var httpRequest = null;
    var uri = url+params;
    
    // instanciation de la variable HTTP Request
    if(window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
        httpRequest = new XMLHttpRequest();
    else if(window.ActiveXObject) // IE6-
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    else { 
        // XMLHttpRequest non supporté par le navigateur
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
        return;
    }
    // ouverture de HTTP Request en asynchrone
    this.writeInConsole(uri);
    httpRequest.open("POST", uri, true);
    
    // call back on response
    httpRequest.onreadystatechange = function() {
        if( httpRequest.readyState == 4 ) {
            if (httpRequest.status == 200) {
                panel.parseServeurReponse( httpRequest.responseText );
            } else if (httpRequest.status == 0) {
                panel.parseServeurReponse( httpRequest.responseText );
            } else {
                //alert('Réponse du serveur invalide');
alert('problème ! \nstatus = '+ httpRequest.status +'\nreponse :\n '+ httpRequest.responseText);
            }
        }
    }
    
    // préparation des headers de la requête
    httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    httpRequest.setRequestHeader("Content-length", params.length);
    httpRequest.setRequestHeader("Connection", "close");

    // envoi de la requete
    httpRequest.send();
//    httpRequest.send( "cat=3&annee=2014&mois=22");
//    httpRequest.send( params );
  },

/**********************************/
/* Remplacement du panneau detail */
/**********************************/
  remplace: function (param)
  {
    this.writeInConsole(param);

   var reponses = param.split("-");
    var params = "category/actualites_mois/?actu=1&ayear="+reponses[1]+"&month="+reponses[0];
    /* permettre l'ouverture du panneau du détail important */
    this.noeud = reponses[2];
    this.suite = 1;
    
    panel.sendRequest(params, urlSite);
//    panel.sendRequest(" ", urlSite+"?cat=3&actu=1&year="+reponses[1]+"&month="+reponses[0]);
  },
  
  writeInConsole: function (text) {
    if (typeof console !== 'undefined') {
        console.log(text);    
    }
    else {
        alert(text);    
    }
  }
}  
    
