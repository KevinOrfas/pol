<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1 class="page-title1 page-heading"><?php echo $page->title()->html() ?></h1>
      <h1> <?php echo $page->text()->kirbytext() ?> </h1>
      <form action="<?php echo $page->url()?>#form" method="post">

            <label for="name" class="required">Name</label>
            <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>

            <label for="email" class="required">E-Mail</label>
            <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>

            <label for="message">Message</label>
            <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

            <label class="uniform__potty" for="website">Please leave this field blank</label>
            <input type="text" name="website" id="website" class="uniform__potty" />

            <a name="form"></a>
        <?php if ($form->hasMessage()): ?>
            <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                <?php $form->echoMessage() ?>
            </div>
        <?php endif; ?>

            <button type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

        </form>
      <div class="module">
        <div class="module__container">
          <form action="<?php echo $page->url()?>#form" method="post" class="contact-form">

            <div class="contact-form__group">
              <label for="first-name" class="contact-form__label">Full Name</label>
              <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" class="contact-form__input" id="first-name" value="<?php $form->echoValue('name') ?>" required/>
            </div>

            <div class="contact-form__group">
              <label for="last-name" class="contact-form__label">Email</label>
              <input type="text" class="contact-form__input" id="last-name">
            </div>

            <div class="contact-form__group">
              <label for="address" class="contact-form__label">Message</label>
              <textarea type="text" class="contact-form__input" id="address"></textarea>
            </div>

            <br>
            <button class="btn btn-default" type="submit" name="_submit" value="Yay">Send</button>

          </form>
        </div>
      </div>

    </div>

  </main>
<?php snippet('footer') ?>
