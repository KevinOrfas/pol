<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="module--content">
      <div class="module__container cf">
          <h1 class="page-title page-title--portfolio module__heading--content">
            <?php echo $page->title()->html() ?></h1>
      </div>
    </div>
    <?php foreach($page->children()->index() as $page): ?>
      <div class="grid">
        <figure class="effect-zoe">
          <a href="<?php echo $page ?>">
            <img class="js-insert" src="" alt="<?php echo $page->title() ?>">
          </a>
          <figcaption>
            <h2><a href="<?php echo $page ?>">  <?php echo $page->title() ?></a></h2>
            <ul class="icon-links">
              <li>
                <a class="fb-share-button" data-href="https://polgarcia.com" data-layout="button"></a>
              </li>
              <li>
                 <a class="twitter-share-button"
                    href="https://twitter.com/share"
                    data-url="http://polgarcia.com"
                    data-hashtags="pol_hair, mexican_wave"
                    data-text="Love is in the hair">
                </a>
               </a>
              </li>
            </ul>
          </figcaption>
        </figure>
      </div>

    <?php endforeach ?>


  </main>
<?php snippet('footer') ?>
