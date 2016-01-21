<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
      <h1> <?php echo $page->text()->kirbytext() ?> </h1>
      <form action="<?php echo $page->url()?>#form" method="post">
          <label for="name" class="required">Name</label>
          <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name"  class="form-control" value="<?php $form->echoValue('name') ?>" required/>
          <br>
          <label for="email" class="required">E-Mail</label>
          <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" class="form-control" value="<?php $form->echoValue('_from') ?>" required/>
          <br>
          <label for="message">Message</label>
          <textarea name="message" id="message" class="form-control"><?php $form->echoValue('message') ?></textarea>

          <label class="uniform__potty" for="website">Please leave this field blank</label>
          <input type="text" name="website" id="website" class="uniform__potty" />
          <br>
          <a name="form"></a>
          <?php if ($form->hasMessage()): ?>
              <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                  <?php $form->echoMessage() ?>
              </div>
          <?php endif; ?>

          <button class="btn btn-default" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

      </form>
    </div>

  </main>

<?php snippet('footer') ?>
