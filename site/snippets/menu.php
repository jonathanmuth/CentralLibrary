<nav role="navigation"> 

  <div class="search">

    <form action="<?php echo url('/references/') ?>">
      <input class="search__input" type="search" name="q" value="<?php echo $query ?>" autofocus />
    </form>

  </div>

  <ul class="menu cf">
    <li <?php e($page->isHomePage(), ' class="active"') ?>>
      <a href="<?php echo $site->url() ?>">Library</a>
    </li><!-- 
     --><li <?php e(($page->uid() == 'references') or ($page->isChildOf($pages->find('references'))), ' class="active"') ?>>
      <a href="<?php echo $site->url() ?>/references">References</a>
    </li><!-- 
     --><li <?php e(($page->uid() == 'collections'), ' class="active"') ?>>
      <a href="<?php echo $site->url() ?>/collections">Collections</a>
    </li><!-- 
     --><li>
      <a class="action" href="<?php echo $site->url() ?>/download"><i class="fa fa-download"></i></a>
    </li><!-- 
     --><li>
      <a class="action" href="<?php echo $site->url() ?>/panel/#/pages/add/references"><i class="fa fa-plus-circle"></i></a>
    </li><!-- 
     --><li <?php e(($page->uid() == 'login'), ' class="active"') ?>>
      <?php if($user = $site->user()): ?>
          <a href="<?php echo url('logout') ?>">Sign Out</a>
      <?php else: ?>
          <a class="action" href="<?php echo $site->url() ?>/login">Sign In</a>
      <?php endif ?>
    </li>

  </ul>

</nav>
