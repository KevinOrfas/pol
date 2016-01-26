<?php snippet('header') ?>

<main class="main">
  <div class="text">
  <!-- <h1 class="page-title1 page-heading"><?php echo $page->headline()->html() ?></h1> -->
  <h1 class="page-title page-heading"><?php echo $page->title()->html() ?></h1>
  <!-- <?php echo $page->text()->kirbytext() ?> -->
  </div>
  <?php foreach ( $blogPosts as $blogPost ): // $blogPosts from site/controllers/blog.php
    $images = $blogPost->images()->sortBy('sort', 'asc');
    $firstImage = $images->first();
  ?>
  <article class="blog-post">
    <div class="module__container">
      <h3 class="module__heading"><?php echo $blogPost->headline()->html()->or($blogPost->title()->html()) ?></h3>
      <p class="blog-post-date"><time datetime="<?php echo $blogPost->date('c') ?>"><?php echo $blogPost->date('F j, Y') ?></time></p>
    </div>
    <?php if ($blogPost->hasImages()): ?>
      <img
        src="<?php echo thumb($firstImage, array('width' => 120, 'height' => 120, 'quality' => 50, 'crop' => true))->url() ?>"

        srcset="<?php echo thumb($firstImage, array('width' => 120, 'height' => 120, 'quality' => 50, 'crop' => true))->url() ?> 120w,
        <?php echo thumb($firstImage, array('width' => 180, 'height' => 180, 'quality' => 50, 'crop' => true))->url() ?> 180w,
        <?php echo thumb($firstImage, array('width' => 250, 'height' => 250, 'quality' => 50, 'crop' => true))->url() ?> 250w,"

        sizes="(min-width: 53.125em) 200px,
        (min-width: 40.625em) 150px,
        120px"

        alt="<?php echo $firstImage->caption()->html()->or( $firstImage->name() ) ?>"
        class="blog-post__featured-image"
      />
    <?php endif ?>
    <section class="module module--content">
      <div class="module__container">
        <p class="module__item"><?php echo $blogPost->text()->excerpt(100, 'words'); ?></p>
        <p class="read-more"><a href="<?php echo $blogPost->url() ?>">Read more</a></p>
      </div>
    </section>


    <?php //echo truncate(kirbytext($blogPost->text()),100) //$blogPost->text()->excerpt(800) ?>



  </article><!-- .blog-post-excerpt end -->
  <?php endforeach ?>

  <?php snippet( 'pagination', array( 'pagination' => $pagination, 'prevTitle' => 'Back', 'nextTitle' => 'More articles' ) ) ?>

</main>
<?php snippet('footer') ?>
