<?php snippet('header') ?>

  <main class="main" role="main">

      <div class="module">
        <div class="module__container">
            <h1 class="page-title1 page-heading"><?php echo $page->title()->html() ?></h1>
            <h1> <?php echo $page->text()->kirbytext() ?> </h1>
            <form action="<?php echo $page->url()?>#form" method="post" class="contact-form">
              <div class="contact-form__group">
                  <label for="name" class="contact-form__label">Name</label>
                  <input class="<?php e($form->hasError('name'), ' erroneous')?> contact-form__input" type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>
              </div>
              <div class="contact-form__group">
                  <label for="email" class="contact-form__label">E-Mail</label>
                  <input class="<?php e($form->hasError('_from'), ' erroneous')?> contact-form__input" type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>
              </div>
              <div class="contact-form__group">
                  <label for="message" class="contact-form__label">Message</label>
                  <textarea class="contact-form__input" name="message" id="message"><?php $form->echoValue('message') ?></textarea>
              </div>

                  <label class="uniform__potty" for="website">Please leave this field blank</label>
                  <input type="text" name="website" id="website" class="uniform__potty" />

                  <a name="form"></a>
                  <?php if ($form->hasMessage()): ?>
                      <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                          <?php $form->echoMessage() ?>
                      </div>
                  <?php endif; ?>

                  <button class="btn btn-default" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

              </form>
        </div>
      </div>
  </main>
<?php snippet('footer') ?>
