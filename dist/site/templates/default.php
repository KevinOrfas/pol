<?php snippet('header') ?>
  <main class="main" role="main">
    <section class="module module--content cf">
      <div class="module__container">
          <?php if( $page->hasImages() ): ?>

              <?php foreach($page->children()->index() as $page): ?>

                <div class="thumbnail">
                  <figure>
                    <a href="<?php echo $page ?>">
                      <img class="js-insert" src="" alt="<?php echo $page->title() ?>">
                    </a>
                  </figure>
                  <h2>
                    <a href="<?php echo $page ?>"><?php echo $page->title() ?></a>
                  </h2>
                </div>

            <?php endforeach ?>

        <?php endif ?>
      </div>
    </section>

    <section class="module module--content">
      <div class="module__container">
        <h2 class="module__heading
        "><?php echo $page->heading_two() ?></h2>

      </div>
    </section>

    <section class="module module--content">
      <div class="module__container">
        <h2 class="module__heading
        "><?php echo $page->heading_three() ?></h2>

      </div>
    </section>

    <section class="module module--content">
      <div class="module__container">
        <h2 class="module__heading
        "><?php echo $page->heading_four() ?></h2>

      </div>
    </section>


  </main>
<?php snippet('footer') ?>
