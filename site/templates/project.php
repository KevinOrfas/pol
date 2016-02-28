<?php snippet('header') ?>

<?php
  $thumbShape = $page->thumbShape();

  if ($thumbShape == '') {
    $thumbShape = 'square-mode';
  }
?>

<main class="main" role="main">
  <div class="module--content">
    <div class="module__container cf">
        <h1 class="module__heading--content"><?php echo $page->title() ?></h1>
        <p><?php echo $page->text() ?></p>
        <?php if( $page->hasImages() ): ?>

        <section class="project-thumbs <?php echo $thumbShape ?>">
          <div class="pswp-gallery-thumbs" itemscope itemtype="http://schema.org/ImageGallery">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
              <?php snippet('thumb-gallery', array('image' => $image, 'thumbShape' => $thumbShape)) ?>
            <?php endforeach ?>
          </div><!-- .pswp-gallery end -->
        </section>
        <?php endif ?>
    </div>
  </div>

</main>
<?php snippet('footer') ?>
