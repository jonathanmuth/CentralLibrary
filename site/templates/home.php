<?php snippet('header') ?>

  <main class="main" role="main">

      <h2 class="section__label">Featured Reads</h2>
      
      <ul class="references">
        <?php foreach(page('references')->children()->filterBy('featured', '1')->limit(3)->shuffle() as $featured): ?><!-- 
       --><li class="reference">
            <?php snippet('reference/cover', array('data' => $featured)) ?>
        </li><!--
      --><?php endforeach ?>
      </ul>

      <h2 class="section__label">Recently Added</h2>

      <ul class="references">
        <?php foreach(page('references')->children()->filterBy('featured', '1')->limit(3)->shuffle() as $featured): ?><!-- 
       --><li class="reference">
            <?php snippet('reference/cover', array('data' => $featured)) ?>
        </li><!--
      --><?php endforeach ?>
      </ul>

    <hr>

  </main>

<?php snippet('footer') ?>