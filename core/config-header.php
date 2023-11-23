<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>document.getElementsByTagName("html")[0].className += " js";</script>
<!-- browsers not supporting CSS variables -->
<script>
  if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
</script>
<meta name="robots" content="index, follow">
<meta name="author" content="Alpina Digital">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" title="Feed de <?php wp_title( '/', true, 'right' ); ?>">
<title><?php wp_title( '/', true, 'right' ); ?></title>