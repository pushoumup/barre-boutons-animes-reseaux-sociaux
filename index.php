 <!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta property="og:image" content="http://pushoumupworld.net/wp-content/uploads/2013/09/google-map-logo.gif"/> 
  <meta property="og:title" content="Module boutons reseaux sociaux"/>
  <title>Module boutons reseaux sociaux</title>
  <link rel="stylesheet" href="stylesoc.css">
  <script src="script.js"></script>
  <!-- Script à placer dans le header pour la fonction popup -->
  <script language="javascript" type="text/javascript">
    <!--
    function popitup(url) {
    	width = 450;
        height = 200;
        if(window.innerWidth)
        {
        var left = (window.innerWidth-width)/2;
        var top = (window.innerHeight-height)/2;
        }
        else
        {
        var left = (document.body.clientWidth-width)/2;
        var top = (document.body.clientHeight-height)/2;
        }
    	newwindow=window.open(url,'name','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
    	if (window.focus) {newwindow.focus()}
    	return false;
    }
    // -->
  </script>
  <!-- Fin de la fonction popup -->
</head>
<body>
  <h1>Barre de boutons r&eacute;seaux sociaux</h1>
  <p>R&eacute;lis&eacute; par puhsoumup</p>
  <p>Code provenant de <a href="http://pushoumupworld.net" alt"pushoumupworld.net">Pushoumupworld.net</a></p>
  <!-- Début du code pour la barre de boutons sociaux -->
  <ul id="bar_soc">
    <!-- Bouton Pinterest -->
    <li class="bouton_pinterest"> 
      <a  href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" >
        <!-- Image icone Pinterest --><img alt='Pinterest' src='img/pinterest-button.png'/><!-- Fin Image icone Pinterest -->
      </a>
    </li>
    <!-- Fin Bouton Pinterest -->
    <!-- Bouton Facebook -->
    <li class="bouton_facebook">
      <a href='http://www.facebook.com/sharer.php?u=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>' onclick="return popitup('http://www.facebook.com/sharer.php?u=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>')">
        <!-- Image icone Facebook --><img alt='Facebook'src='img/facebook-button.png'/><!-- Fin Image icone Facebook -->
      </a>
    </li>
    <!-- Fin Bouton Facebook -->
    <!-- Bouton Google Plus -->
    <li class="bouton_googleplus">
      <a   href="https://plus.google.com/share?url=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" onclick="return popitup('https://plus.google.com/share?url=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>')">
        <!-- Image icone Google Plus --><img alt='Google Plus' src='img/google-button.png'/><!-- Fin Image icone Google Plus -->
      </a>
    </li>
    <!-- Fin Bouton Google Plus -->
    <!-- Bouton Twitter -->
    <li class="bouton_twitter">
      <a href="http://twitter.com/share"  onclick="return popitup('http://twitter.com/share')">
        <!-- Image icone Twitter --><img alt='Twitter' src='img/twitter-button.png'/><!-- Fin Image icone Twitter -->
      </a>
    </li>
    <!-- Fin Bouton Twitter -->
  </ul>
  <div class="clear"></div>
  <!-- fin du code pour la barre de boutons -->
  <!-- script pour le bouton pinterest -->
  <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
  <!-- fin script pour le bouton pinterest -->
</body>
</html>


