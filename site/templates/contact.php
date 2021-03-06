<?php snippet('header') ?>
<?php $image = $page->images()->first() ?>
  <main class="main" role="main">
    <!-- <section class="bg" style="background-image:url(<?php echo thumb($image, array('quality' => 100  ), false) ?>) ">
    </section> -->


      <div class="module--content module--content-contact">
        <div class="module__container cf">
            <h1 class="module__heading--content"><?php echo $page->headline() ?></h1>
            <h4 class="module__subheading"> <?php echo $page->text()->kirbytext() ?> </h4>
            <div class="salon-img">
              <!-- <?php if( $page->hasImages() ): ?>
                <img class="<?php echo $image->position() ?>" src="<?php echo thumb($image, array('width' => 1000, 'quality' => 70 ,'grayscale' => true ), false) ?>" alt="<?php echo $image->caption()->html()->or( $image->name() ) ?>">
              <?php endif ?> -->
            </div>


            <form action="<?php echo $page->url()?>#form" method="post" class="contact-form">
              <div class="contact-form__group">
                  <label for="name" class="<?php e($form->hasError('name'), 'erroneous')?> contact-form__label">Name</label>
                  <input class="contact-form__input" type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>
              </div>
              <div class="contact-form__group">
                  <label for="_from" class="<?php e($form->hasError('_from'), 'erroneous')?> contact-form__label">E-Mail</label>
                  <input class="contact-form__input" type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" />
              </div>
              <div class="contact-form__group">
                  <label for="message" class="contact-form__label">Message</label>
                  <textarea class="contact-form__input" name="message" id="message"><?php $form->echoValue('message') ?></textarea>
              </div>
              <div class="form-potty">
                  <label class="uniform__potty" for="website">Please leave this field blank</label>
                  <input type="text" name="website" id="website" class="uniform__potty" />
              </div>
                <a name="form"></a>
                <?php if ($form->hasMessage()): ?>
                  <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                      <?php $form->echoMessage() ?>
                  </div>
                <?php endif; ?>

                <button class="btn btn-default" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

              </form>

            <div class="address">
              <h4 class="contact-info-head">
                <!-- <?php echo $page->email()->key() ?> -->
                <i class="fa fa-envelope-o"></i> <br/>

              </h4>
              <p>
                <?php echo $page->email()?>
              </p>
              <h4 class="contact-info-head">
                <i class="fa fa-phone"></i>
                <!-- <?php echo $page->phone()->key() ?> -->
              </h4>
              <p><?php echo $page->phone()?></p>
              <h4 class="contact-info-head">
                <i class="fa fa-location-arrow"></i>
                <!-- <?php echo $page->location()->key()?> -->
              </h4>
              <?php echo $page->location()->kirbytext() ?>
            </div>



        </div>
      </div>
  </main>
<?php snippet('footer') ?>
