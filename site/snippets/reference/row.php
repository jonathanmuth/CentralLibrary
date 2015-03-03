<tr class="row">
  <td><a href="<?php echo url('references/?q=' . urlencode($data->author()))?>"><?php echo $data->author()->html() ?></a></td>
  <td><a href="<?php echo $data->url() ?>"><strong><?php echo $data->title()->html() ?></strong> <?php echo $data->subtitle()->html() ?></a></td>
  <td><a href="<?php echo url('references/?q=' . urlencode($data->journal()->or($data->publisher())))?>"><?php echo $data->journal()->html()->or($data->publisher()) ?></a></td>
  <td class="center"><a href="<?php echo url('references/?q=' . urlencode($data->year()))?>"><?php echo $data->year()->html() ?></a></td>
  <td class="center"><?php if($data->printed()->bool()): ?><i class="fa fa-check"></i><?php endif ?></td>
</tr>