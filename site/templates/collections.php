<?php snippet('header') ?>

  <main class="main" role="main">

      <?php if($references): ?> <!-- Display when no search results are present -->

        <h2 class="collection__name"><?php echo urldecode($collection) ?></h2>

        <ul class="references">
        <?php foreach($references as $reference): ?><!-- 
           --><li class="reference">
              <?php snippet('reference/cover', array('data' => $reference)) ?>
            </li><!--
          --><?php endforeach ?>
        </ul>

      <?php else: ?> <!-- Display all collections -->
        
        <ul class="references">
        <?php foreach($collections as $collection): ?><!-- 
       --><li class="reference">
        <div class="collection">
          <div class="collection__wrapper">
            <div class="collection__title"><?php echo html($collection) ?></div>
          </div>
          <a class="collection__link" href="<?php echo url('collections/collection:' . urlencode($collection))?>"></a>
        </div>
        </li><!--
      --><?php endforeach ?>
      </ul>

      <?php endif; ?>

  </main>

<?php snippet('footer') ?>