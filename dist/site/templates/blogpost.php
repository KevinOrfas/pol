<?php snippet('header') ?>

<?php
  $thumbShape = $page->thumbShape();
  $image = $page->images()->first();
  if ($thumbShape == '') {
    $thumbShape = 'square-mode';
  }
?>

<main class="main">


    <?php if( $page->hasImages() ): ?>
      <img class="<?php echo $image->position() ?>" src="<?php echo thumb($image, array('width' => 1000, 'quality' => 70 ,'grayscale' => true ), false) ?>" alt="<?php echo $image->caption()->html()->or( $image->name() ) ?>">
    <?php endif ?>
  


  <article class="blog-post module--content">
    <div class="module__container">
      <h1 class="module__heading--content"><?php echo $page->title()->html() ?></h1>
      <p class="blog-post__date"><time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F j, Y') ?></time></p>

      <section class="module module--content">
        <div class="module__item--content">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </section>



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
  </article>

</main>

<?php snippet('footer') ?>
