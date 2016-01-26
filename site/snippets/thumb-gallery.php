<?php
  $imageQuality = 90;
  $thumbQuality = 70;
  $largerThumbQuality = 60;

  $largeImage = thumb($image, array('width' => 1400, 'height' => 1400, 'quality' => $imageQuality));
  $largeImageUrl = $largeImage->url();

  $mediumImage = thumb($image, array('width' => 1024, 'height' => 1400, 'quality' => $imageQuality));
  $mediumImageUrl = $mediumImage->url();

  $smallImage = thumb($image, array('width' => 640, 'height' => 1200, 'quality' => $imageQuality));
  $smallImageUrl = $smallImage->url();
?>

  <figure class="thumb" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
    <a class="thumb-link" href="<?php echo $largeImageUrl ?>"
        data-large-size="<?php echo $largeImage->width() ?>x<?php echo $largeImage->height() ?>"
        data-medium="<?php echo $mediumImageUrl ?>"
        data-medium-size="<?php echo $mediumImage->width() ?>x<?php echo $mediumImage->height() ?>"
        data-small="<?php echo $smallImageUrl ?>"
        data-small-size="<?php echo $smallImage->width() ?>x<?php echo $smallImage->height() ?>"
        itemprop="contentUrl">


      <img src="<?php echo thumb($image, array('width' => 90, 'quality' => $thumbQuality))->url() ?>" itemprop="thumbnail"

        class="<?php echo $image->orientation(); ?> <?php echo $image->cropFocusPount()->or('center') ?>"

        srcset="<?php echo thumb($image, array('width' => 90, 'quality' => $thumbQuality))->url() ?> 90w,
        <?php echo thumb($image, array('width' => 180, 'quality' => $thumbQuality))->url() ?> 180w,
        <?php echo thumb($image, array('width' => 255, 'quality' => $thumbQuality))->url() ?> 255w,
        <?php echo thumb($image, array('width' => 300, 'quality' => $thumbQuality))->url() ?> 300w,
        <?php echo thumb($image, array('width' => 510, 'quality' => $largerThumbQuality))->url() ?> 510w,
        <?php echo thumb($image, array('width' => 640, 'quality' => $largerThumbQuality))->url() ?> 640w"

        <?php if ( $thumbShape == 'original-mode' ): ?>
          sizes="(min-width: 75em) 300px,
          (min-width: 65.625em) 255px,
          (min-width: 53.125em) 225px,
          (min-width: 40.625em) 180px,
          (min-width: 20.625em) 105px,
          90px"
        <?php endif ?>


        <?php if ( $thumbShape == 'landscape-mode' ): ?>
          sizes="(min-width: 75em) 300px,
          (min-width: 53.125em) 20vw,
          30vw"
        <?php endif ?>

        <?php if ( $thumbShape == 'portrait-mode' ): ?>
          sizes="(min-width: 65.625em) 225px,
          (min-width: 53.125em) 15vw,
          20vw"
        <?php endif ?>

        <?php if ( $thumbShape == 'square-mode' ): ?>
          sizes="(min-width: 75em) 300px,
          (min-width: 53.125em) 20vw,
          30vw"
        <?php endif ?>

        alt="<?php echo $image->caption()->html()->or( $image->name() ) ?>"
      /><!-- img end -->
    </a><!-- .thumb-link end -->

    <figcaption itemprop="caption description">
      <?php echo $image->caption()->kirbytext() ?>
      <!-- optionally define copyright -->
      <!-- <span itemprop="copyrightHolder">Photo: AP</span> -->
    </figcaption>
  </figure>
