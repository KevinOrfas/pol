<?php snippet('header') ?>

<?php
  $thumbShape = $page->thumbShape();

  if ($thumbShape == '') {
    $thumbShape = 'square-mode';
  }
?>

<main class="main" role="main">
  <h1 class="page-title page-heading"><?php echo $page->title()->html() ?></h1>

  <ul class="meta cf">
    <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
    <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    <!-- <li><?php echo $page->title()->link() ?></li> -->
  </ul>

  <?php if( $page->hasImages() ): ?>
  <section class="project-thumbs <?php echo $thumbShape ?>">
    <div class="pswp-gallery-thumbs" itemscope itemtype="http://schema.org/ImageGallery">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <?php snippet('thumb-gallery', array('image' => $image, 'thumbShape' => $thumbShape)) ?>

      <?php endforeach ?>

    </div><!-- .pswp-gallery end -->
  </section>
  <?php endif ?>

  <div class="project-info-smaller-screens" data-appendaround="project-info">
    <?php if(!$page->text()->empty()): ?>
    <div class="project-info">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <?php endif ?>
  </div><!-- .project-info-smaller-screens end -->
  <div class="project-info-larger-screens" data-appendaround="project-info"></div>
</main>
<?php snippet('footer') ?>
