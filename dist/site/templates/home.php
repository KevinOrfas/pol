<?php snippet('header') ?>
  <main class="main" role="main">
      <div class="text">
        <h1 class="page-title page-heading"><?php echo $page->title()->html() ?></h1>
      </div>
      <section class="module module--parallax first">
        <div class="module__container first">
          <div class="videoWrapper">
            <iframe src="https://player.vimeo.com/video/173398667?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
          <h1 class="module__heading--parallax"><?php echo $page->section_one_title()->html() ?></h1>
        </div>
      </section>

      <section class="module module--content">
        <div class="module__container">
          <h2 class="module__heading--content"><?php echo $page->section_one_heading()->html() ?>
          </h2>
          <p class="module__item--content"><?php echo $page->section_text_one()->html() ?></p>
        </div>
      </section>

      <section class="module module--parallax" style="background-image:url(<?php echo $page->image('hair-1.jpg')->url() ?>)">
        <div class="module__container">
          <h1 class="module__heading--parallax"><?php echo $page->section_two_title()->html() ?></h1>
        </div>
      </section>

      <section class="module module--content">
        <div class="module__container">
          <h2 class="module__heading--content"><?php echo $page->section_two_heading()->html() ?>
          </h2>
          <p class="module__item--content"><?php echo $page->section_text_two()->html() ?></p>
        </div>
      </section>

      <section class="module module--parallax" style="background-image:url(<?php echo $page->image('hair-3.jpg')->url() ?>)">
        <div class="module__container">
          <h1 class="module__heading--parallax"><?php echo $page->section_three_title()->html() ?></h1>
        </div>
      </section>

      <section class="module module--content">
        <div class="module__container">
          <h2 class="module__heading--content"><?php echo $page->section_three_heading()->html() ?>
          </h2>
          <p class="module__item--content"><?php echo $page->section_text_three()->html() ?></p>
        </div>
      </section>

  </main>
<?php snippet('footer') ?>
