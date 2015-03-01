<nav role="navigation"> 

  <!-- 

  --><ul class="menu cf">
    <li>
      <a <?php e($page->isHomePage(), ' class="active"') ?> href="<?php echo $site->url() ?>">Library</a>
      <a class="action" href="http://127.0.0.1:8000/download"><i class="fa fa-download"></i></a>
    </li>
    <li>
      <a <?php e(($page->uid() == 'references'), ' class="active"') ?> href="<?php echo $site->url() ?>/references">References</a>
      <a class="action" href="http://127.0.0.1:8000/panel/#/pages/add/references"><i class="fa fa-plus-circle"></i></a>
    </li>
    <li>
      <a <?php e(($page->uid() == 'collections'), ' class="active"') ?> href="<?php echo $site->url() ?>/collections">Collections</a>
    </li>

  </ul><!-- 

   --><div class="search">

    <form action="<?php echo url('/references/') ?>">
      <input class="search__input" type="search" name="q" value="<?php echo $query ?>" autofocus />
    </form>

  </div>

</nav>
