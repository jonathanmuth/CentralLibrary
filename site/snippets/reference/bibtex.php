<pre class="bibtext">
@<?php echo $data->intendedTemplate() ?>{<?php echo $data->citekey() ?>,
<?php if($data->author() != ''): ?>  Author = {<?php echo $data->author() ?>},<br><?php endif ?>
<?php if($data->editor() != ''): ?>  Editor = {<?php echo $data->editor() ?>},<br><?php endif ?>
<?php if($data->key() != ''): ?>  Key = {<?php echo $data->key() ?>},<br><?php endif ?>
<?php if($data->title() != ''): ?>  Title = {<?php echo $data->title() ?>},<br><?php endif ?>
<?php if($data->type() != ''): ?>  Type = {<?php echo $data->type() ?>},<br><?php endif ?>
<?php if($data->series() != ''): ?>  Series = {<?php echo $data->series() ?>},<br><?php endif ?>
<?php if($data->booktitle() != ''): ?>  Book = {<?php echo $data->booktitle() ?>},<br><?php endif ?>
<?php if($data->edition() != ''): ?>  Edition = {<?php echo $data->edition() ?>},<br><?php endif ?>
<?php if($data->chapter() != ''): ?>  Chapter = {<?php echo $data->chapter() ?>},<br><?php endif ?>
<?php if($data->pages() != ''): ?>  Pages = {<?php echo $data->pages() ?>},<br><?php endif ?>
<?php if($data->publisher() != ''): ?>  Publisher = {<?php echo $data->publisher() ?>},<br><?php endif ?>
<?php if($data->journal() != ''): ?>  Journal = {<?php echo $data->journal() ?>},<br><?php endif ?>
<?php if($data->volume() != ''): ?>  Volume = {<?php echo $data->volume() ?>},<br><?php endif ?>
<?php if($data->number() != ''): ?>  Number = {<?php echo $data->number() ?>},<br><?php endif ?>
<?php if($data->organization() != ''): ?>  Organization = {<?php echo $data->organization() ?>},<br><?php endif ?>
<?php if($data->institution() != ''): ?>  Institution = {<?php echo $data->institution() ?>},<br><?php endif ?>
<?php if($data->school() != ''): ?>  School = {<?php echo $data->school() ?>},<br><?php endif ?>
<?php if($data->address() != ''): ?>  Address = {<?php echo $data->address() ?>},<br><?php endif ?>
<?php if($data->year() != ''): ?>  Year = {<?php echo $data->year() ?>},<br><?php endif ?>
<?php if($data->month() != ''): ?>  Month = {<?php echo $data->month() ?>},<br><?php endif ?>
<?php if($data->note() != ''): ?>  Note = {<?php echo $data->note() ?>},<br><?php endif ?>
<?php if($data->annote() != ''): ?>  Annote = {<?php echo $data->annote() ?>},<br><?php endif ?>
<?php if($data->crossref() != ''): ?>  Crossref = {<?php echo $data->crossref() ?>},<br><?php endif ?>
<?php if($data->howpublished() != ''): ?>  Howpublished = {<?php echo $data->howpublished() ?>},<?php endif ?>}</pre>