<div class="collection collection--<?php echo $data->collection() ?>">
  <div class="collection__wrapper">
    <div class="collection__title"><?php echo $data->title()->html() ?></div>
    <div class="collection__author">by <?php echo $data->author() ?></div>
  </div>
  <a class="collection__link" href="<?php echo $data->url() ?>"></a>
</div>