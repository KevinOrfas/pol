<?php snippet('header') ?>
<?php $image = $page->images()->first() ?>

<main class="main" role="main">

      <h1 class="page-title"><?php echo $page->title()->html() ?></h1>

      <?php if( $page->hasImages() ): ?>
        <img class="<?php echo $image->position() ?>" src="<?php echo thumb($image, array('width' => 1000, 'quality' => 70 ,'grayscale' => true ), false) ?>" alt="<?php echo $image->caption()->html()->or( $image->name() ) ?>">
      <?php endif ?>


      <section class="module--content">
        <div class="module__container">
          <h2 class="module__heading--content"><?php echo $page->heading() ?></h2>
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </section>
</main>
<?php snippet('footer') ?>
