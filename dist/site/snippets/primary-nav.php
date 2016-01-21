<nav class="primary-nav" id="primary-nav" role="navigation">
  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li class="<?php if ( $p->template() == 'project' || $p->template() == 'project-large-images' ) { echo 'menu__link--project'; } else { echo 'menu__link--default'; } ?>">
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

<div class="project-info-larger-screens" data-appendaround="project-info"></div>
