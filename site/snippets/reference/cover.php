<div class="cover cover--<?php echo $data->cover() ?>">
  <div class="cover__wrapper">
    <div class="cover__title"><?php echo $data->title()->html() ?></div>
    <div class="cover__author">by <?php echo $data->author() ?></div>
  </div>
  <a class="cover__link" href="<?php echo $data->url() ?>"></a>
</div>