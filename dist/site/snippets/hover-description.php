<?php $array = array(); ?>
<?php foreach($page->images() as $image): ?>
  <p class="description">
    <?php
      $array = $image->caption();
      echo $array;
    ?>
  </p>
<?php endforeach ?>
