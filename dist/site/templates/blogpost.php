<?php snippet('header') ?>

<?php
  $thumbShape = $page->thumbShape();
  
  if ($thumbShape == '') {
    $thumbShape = 'square-mode';
  }
?>

<main class="main">
  <article class="primary-content narrower-container blog-post">
    <h1><?php echo $page->headline()->html()->or($page->title()->html()) ?></h1>
    <p class="blog-post-date"><time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F j, Y') ?></time></p>
    
    <?php echo $page->text()->kirbytext() ?>
    
    <?php if( $page->hasImages() ): ?>
      <section class="project-thumbs <?php echo $thumbShape ?>">
        <div class="pswp-gallery-thumbs" itemscope itemtype="http://schema.org/ImageGallery">
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <?php snippet('thumb-gallery', array('image' => $image, 'thumbShape' => $thumbShape)) ?>
          <?php endforeach ?>
        </div><!-- .pswp-gallery end -->
      </section>
    <?php endif ?>
  </article>
</main>

<?php snippet('footer') ?>