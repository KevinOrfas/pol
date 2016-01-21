<?php snippet('header') ?>
<?php $image = $page->images()->first() ?>

<main class="main" role="main">

  <div class="text">
    <h1 class="page-title"><?php echo $page->title()->html() ?></h1>

    <?php if( $page->hasImages() ): ?>
      <img class="about-portrait <?php echo $image->position() ?>" src="<?php echo thumb($image, array('width' => 1000, 'quality' => 70), false) ?>" alt="<?php echo $image->caption()->html()->or( $image->name() ) ?>">
    <?php endif ?>

    <?php echo $page->text()->kirbytext() ?>
  </div>

</main>

<?php snippet('footer') ?>
