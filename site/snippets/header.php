<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta property="og:url"                content="polgarcia.com" />
  <meta property="og:type"               content="portfolio website" />
  <meta property="og:title"              content="Love is in the hair" />
  <meta property="og:description"        content="HairStylist's Pol Garcia personal website" />
  <meta property="og:image"              content="http://polgarcia.com/content/2-about/about.jpg" />

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php snippet('favicons') ?>

  <?php echo css('assets/css/main.min.css') ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76534146-2', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body id="<?php echo $page->id(); ?>" class="no-js <?php echo $page->template() ?>">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=215815821812400";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>
  <div class="viewport">
    <header class="header cf" role="banner">
      <a href="#" class="toggle-primary-nav-btn js-toggle-primary-nav-btn toggle-primary-nav-animation" id="toggle-primary-nav-btn">
        <span class="menu-bar"></span>
      </a><!-- .toggle-primary-nav-btn end -->

    <h1 class="header__name box__title--bright">
      <a class="header__logo box__title--bright" href="<?php echo url() ?>"><?php echo $site->author()->html() ?>
        <p class="header__work-title">Love is in the <span class="empasis">h</span>air</p>
      </a>
    </h1>

    <?php snippet('primary-nav') ?>

  </header>
