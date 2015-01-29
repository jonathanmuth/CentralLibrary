<!-- Lists all BibTex fields in logical order-->

<ul class="information">
  <?php if($data->author() != ''): ?><li><strong>Author:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->author()))?>"><?php echo $data->author() ?></a></li><?php endif ?>
  <?php if($data->editor() != ''): ?><li><strong>Editor:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->editor()))?>"><?php echo $data->editor() ?></a></li><?php endif ?>
  <?php if($data->key() != ''): ?><li><strong>Key:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->key()))?>"><?php echo $data->key() ?></a></li><?php endif ?>
  <!--<?php if($data->title() != ''): ?><li><strong>Title:</strong> <?php echo $data->title() ?></a></li><?php endif ?>-->
  <?php if($data->type() != ''): ?><li><strong>Type:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->type()))?>"><?php echo $data->type() ?></a></li><?php endif ?>
  <?php if($data->series() != ''): ?><li><strong>Series:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->series()))?>"><?php echo $data->series() ?></a></li><?php endif ?>
  <?php if($data->booktitle() != ''): ?><li><strong>Book:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->booktitle()))?>"><?php echo $data->booktitle() ?></a></li><?php endif ?>
  <?php if($data->edition() != ''): ?><li><strong>Edition:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->edition()))?>"><?php echo $data->edition() ?></a></li><?php endif ?>
  <?php if($data->chapter() != ''): ?><li><strong>Chapter:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->chapter()))?>"><?php echo $data->chapter() ?></a></li><?php endif ?>
  <?php if($data->pages() != ''): ?><li><strong>Pages:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->pages()))?>"><?php echo $data->pages() ?></a></li><?php endif ?>
  <?php if($data->publisher() != ''): ?><li><strong>Publisher:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->publisher()))?>"><?php echo $data->publisher() ?></a></li><?php endif ?>
  <?php if($data->journal() != ''): ?><li><strong>Journal:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->journal()))?>"><?php echo $data->journal() ?></a></li><?php endif ?>
  <?php if($data->volume() != ''): ?><li><strong>Volume:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->volume()))?>"><?php echo $data->volume() ?></a></li><?php endif ?>
  <?php if($data->number() != ''): ?><li><strong>Number:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->number()))?>"><?php echo $data->number() ?></a></li><?php endif ?>
  <?php if($data->organization() != ''): ?><li><strong>Organization:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->organization()))?>"><?php echo $data->organization() ?></a></li><?php endif ?>
  <?php if($data->institution() != ''): ?><li><strong>Institution:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->institution()))?>"><?php echo $data->institution() ?></a></li><?php endif ?>
  <?php if($data->school() != ''): ?><li><strong>School:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->school()))?>"><?php echo $data->school() ?></a></li><?php endif ?>
  <?php if($data->address() != ''): ?><li><strong>Address:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->address()))?>"><?php echo $data->address() ?></a></li><?php endif ?>
  <?php if($data->year() != ''): ?><li><strong>Published:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->year()))?>"><?php echo $data->year() ?></a></li><?php endif ?>
  <?php if($data->month() != ''): ?><li><strong>Month:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->month()))?>"><?php echo $data->month() ?></a></li><?php endif ?>
  <?php if($data->note() != ''): ?><li><strong>Note:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->note()))?>"><?php echo $data->note() ?></a></li><?php endif ?>
  <?php if($data->annote() != ''): ?><li><strong>Annote:</strong> <a href="<?php echo url('references/?q=' . urlencode($data->annote()))?>"><?php echo $data->annote() ?></a></li><?php endif ?>
  <?php if($data->crossref() != ''): ?><li><strong></strong> <a href="<?php echo url('references/?q=' . urlencode($data->crossref()))?>"><?php echo $data->crossref() ?></a></li><?php endif ?>
  <?php if($data->howpublished() != ''): ?><li><strong></strong> <a href="<?php echo url('references/?q=' . urlencode($data->howpublished()))?>"><?php echo $data->howpublished() ?></a></li><?php endif ?>
</ul>