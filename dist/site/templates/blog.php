<?php snippet('header') ?>

<main class="main">
  <div class="text">
  <h1 class="page-title"><?php echo $page->headline()->html() ?></h1>
  
  <?php echo $page->text()->kirbytext() ?>
  </div>
  <?php foreach ( $blogPosts as $blogPost ): // $blogPosts from site/controllers/blog.php 
    $images = $blogPost->images()->sortBy('sort', 'asc');
    $firstImage = $images->first();
  ?>
  <article class="blog-post">
    <h1><?php echo $blogPost->headline()->html()->or($blogPost->title()->html()) ?></h1>
    <p class="blog-post-date"><time datetime="<?php echo $blogPost->date('c') ?>"><?php echo $blogPost->date('F j, Y') ?></time></p>
    
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
        class="featured-image"
      />
    <?php endif ?>
    <?php echo $blogPost->text()->excerpt(100, 'words'); ?>
    <?php //echo truncate(kirbytext($blogPost->text()),100) //$blogPost->text()->excerpt(800) ?>
    
    <p class="read-more"><a href="<?php echo $blogPost->url() ?>">Read more</a></p>
  </article><!-- .blog-post-excerpt end -->
  <?php endforeach ?>
  
  <?php snippet( 'pagination', array( 'pagination' => $pagination, 'prevTitle' => 'Back', 'nextTitle' => 'More articles' ) ) ?>
  
</main>

<?php snippet('footer') ?>