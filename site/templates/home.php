<?php snippet('header') ?>

  <main class="main" role="main">

      <div class="quote">
        <div class="quote__body">Was wir über unsere Gesellschaft, ja über die Welt, in der wir leben, wissen, wissen wir durch die Massenmedien</div>
        <div class="quote__author">Die Gesellschaft der Gesellschaft, Niklas Luhmann</div>
      </div>

      <h2 class="section__label">Featured Reads</h2>
      
      <ul class="references">
        <?php foreach(page('references')->children()->filterBy('featured', '1')->limit(3)->shuffle() as $featured): ?><!-- 
       --><li class="reference slideUpIn">
            <?php snippet('reference/cover', array('data' => $featured)) ?>
        </li><!--
      --><?php endforeach ?>
      </ul>

      <h2 class="section__label">Recently Added</h2>

      <ul class="references">
        <?php foreach(page('references')->children()->sortBy('modified', 'desc')->limit(3) as $featured): ?><!-- 
       --><li class="reference slideUpIn">
            <?php snippet('reference/cover', array('data' => $featured)) ?>
        </li><!--
      --><?php endforeach ?>
      </ul>

  </main>

<?php snippet('footer') ?>