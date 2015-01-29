<nav role="navigation"> 

  <!-- 

  --><ul class="menu cf">
    <li><a <?php e($page->isHomePage(), ' class="active"') ?> href="<?php echo $site->url() ?>">Library</a></li>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <li><a class="action" href="http://127.0.0.1:8000/panel/#/pages/add/references">+ Add</a></li>
    <li><a class="action" href="http://127.0.0.1:8000/download">Download</a></li>
  </ul><!-- 

   --><div class="search">

    <form action="<?php echo url('/references/') ?>">
      <input class="search__input" type="search" name="q" value="<?php echo $query ?>" autofocus />
    </form>

  </div>

</nav>
