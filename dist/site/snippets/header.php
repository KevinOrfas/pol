<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=219901(font-family=Aire+Roman+Pro)&sid=219904(font-family=Aire+Light+Pro)&sid=219906(font-family=Aire+Bold+Pro)&key=PV9Bcbi1zS',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
  </script>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php snippet('favicons') ?>

  <?php echo css('assets/css/main.min.css') ?>
  <!-- <?php echo css('assets/css/maintwo.css') ?> -->

  <?php if( $page->template() == 'home' ): ?>
    <?php
      $home = $site->children()->find('home');
      $image = $home->images()->first();
      $navButtonColor = $home->togglePrimaryNavBtnColor();
      $logoColor = $home->logoColor();
    ?>
    <style>
      body {
        /*background-image: url(<?php echo thumb($image, array('width' => 1500, 'quality' => 90), false) ?>);
        background-image:linear-gradient(rgba(23, 10, 100, 0.15), rgba(32, 100, 34, 0.15)),url('<?php echo thumb($image, array('width' => 1500, 'quality' => 90), false) ?>');
        background-repeat: no-repeat;
        background-size: cover;*/
        /*background-position: center center;*/
      }

      .toggle-primary-nav-btn { color: <?php echo $navButtonColor ?>; }
      .hamburger .bar { background-color: <?php echo $navButtonColor ?>; }

      .header .logo h1 { color: <?php echo $logoColor ?>; }

      @media (min-width: 53.125em) and (orientation: landscape) {
        .home .primary-nav a {
          /*color: <?php echo $logoColor ?>; */
        }
      }
    </style>
  <?php endif ?>

</head>
<body id="<?php echo $page->id(); ?>" class="no-js <?php echo $page->template() ?>">
  <div class="viewport">
    <header class="header cf" role="banner">
      <a href="#" class="toggle-primary-nav-btn js-toggle-primary-nav-btn" id="toggle-primary-nav-btn">
        <div class="hamburger">
          <div class="hamburger__bar"></div>
          <div class="hamburger__bar"></div>
          <div class="hamburger__bar"></div>
        </div><!-- .bars-container end -->
        <div class="hamburger__label">Menu</div>
      </a><!-- .toggle-primary-nav-btn end -->

    <h1 class="header__name box__title--bright">
      <a class="header__logo box__title--bright" href="<?php echo url() ?>"><?php echo $site->author()->html() ?></a>
      <!-- <span class="header__work-title"><?php echo $site->work_title()->html() ?></span> -->
      <span class="header__work-title">Let's make a fairy tale.</span>
    </h1>


    <?php snippet('primary-nav') ?>
    <div class="share-widget">
      <ul class="share-widget__icons">
        <li class="share-widget__links"><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
        <li class="share-widget__links"><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li class="share-widget__links"><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
      </ul>
    </div>
  </header>
