<ul class="references">
  <?php foreach(page('references')->children()->visible()->limit(6)->shuffle() as $reference): ?><!-- 
   --><li class="reference">
    <div class="cover cover--<?php echo $reference->cover() ?>">
      <div class="cover__wrapper">
        <div class="cover__title"><?php echo $reference->title()->html() ?></div>
        <div class="cover__author">by <?php echo $reference->author() ?></div>
      </div>
      <a class="cover__link" href="panel/#/pages/show/<?php echo $reference->uri() ?>"></a>
    </div>
    </li><!--
  --><?php endforeach ?>
</ul>
