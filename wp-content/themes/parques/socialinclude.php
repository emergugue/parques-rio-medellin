<?php
/**
* Archivo con todas las APIS externas cargadas en la pagina.
* principálmente las APIS sociales como facebook, twitter y g+
* esta incluido en el footer del tema principal
*
* @since 9/10/2014
**/
?>
<!-- Facebook -->

<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1416538475270198&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter -->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!-- G+ -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es'}
</script>

