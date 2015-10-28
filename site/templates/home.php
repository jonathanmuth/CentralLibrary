<?php snippet('header') ?>

  <main class="main" role="main">

      <section class="section">

        <div class="quote">
          <div class="quote__body">Was wir über unsere Gesellschaft, ja über die Welt, in der wir leben, wissen, wissen wir durch die Massenmedien.</div>
          <div class="quote__author">Die Gesellschaft der Gesellschaft, Niklas Luhmann</div>
        </div>

      </section>

      <section class="section">

        <h2 class="section__label">Featured Reads</h2>
        
        <ul class="card-view">
          <?php foreach(page('references')->children()->filterBy('featured', '1')->limit(3)->shuffle() as $featured): ?><!-- 
         --><li class="card-view__card slideUpIn">
              <?php snippet('reference/cover', array('data' => $featured)) ?>
          </li><!--
        --><?php endforeach ?>
        </ul>

      </section>

      <section class="section">

        <h2 class="section__label">Recently Added</h2>

        <ul class="card-view">
          <?php foreach(page('references')->children()->sortBy('modified', 'desc')->limit(3) as $featured): ?><!-- 
         --><li class="card-view__card slideUpIn">
              <?php snippet('reference/cover', array('data' => $featured)) ?>
          </li><!--
        --><?php endforeach ?>
        </ul>

      </section>

  </main>

  <?php
    
    $file = 'content/library.bib';
    // Open the file to get existing content
    ob_start(); // turn on output buffering
    include('generator.php');
    $current = ob_get_contents(); // get the contents of the output buffer
    ob_end_clean(); //  clean (erase) the output buffer and turn off output buffering
    // Append a new person to the file
    // Write the contents back to the file
    file_put_contents($file, $current);

  ?>

<?php snippet('footer') ?>