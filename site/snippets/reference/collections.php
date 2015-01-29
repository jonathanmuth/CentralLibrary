<!-- Lists all collections the reference is part of -->

<?php if($data->collections() != ''): ?>

<ul class="collections">
  <?php foreach ($collections = explode(",", $data->collections()) as $collection): ?> 
    <li><a href="<?php echo url('collections/collection:' . urlencode($collection))?>"><?php echo $collection ?></a></li>
  <?php endforeach ?>
</ul>

<?php endif ?>