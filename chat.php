<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css.css" />
        <title>MrMargouillat Dev</title>
        <link href="images/favicon.ico" rel="icon" type="image/x-icon"/>
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
        <script src="https://apis.google.com/js/platform.js" async defer>
        {lang: 'fr'}
        </script>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59507894-4', 'auto');
  ga('send', 'pageview');

</script>

    </head>
   <!-- header -->
    <?php include('header.php'); ?>
    
    <!--nav -->
     <?php include('nav.php'); ?>
    <body>


    <section>
      
      
      <article>
        <h2 id="titreArticle">Chat</h2>
          <p>Vous pourrez prochainement retrouver ici un chat pour discuter et proposer des idées.</br>
          Pour plus d'infos sur le developpement envoyez moi un message avec Facebook ou Google+.</p>
      </article>
      <acide id='partage'>
          <h4>Partage :</h4>
        <ul>
        <li><div class="g-plusone" data-size="medium" data-href="http://mrmargouillat.web.minecraft-mania.fr/"></div></li>
        <li><div class="g-plus" data-action="share" data-height="15"></div></li>
        <li><div class="fb-like" data-href="http://mrmargouillat.web.minecraft-mania.fr/" data-width="15" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></li>
        </ul>
      </acide>
    </section>
    </body>
    
        <?php include("footer.php"); ?>

</html>