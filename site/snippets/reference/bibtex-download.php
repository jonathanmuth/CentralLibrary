@<?php echo $data->intendedTemplate() ?>{<?php echo $data->citekey() ?>,
<?php if($data->author() != ''): ?>  Author = {<?php echo $data->author() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->editor() != ''): ?>  Editor = {<?php echo $data->editor() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->citekey() != ''): ?>  Key = {<?php echo $data->citekey() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->title() != ''): ?>  Title = {{<?php echo $data->title() ?><?php if($data->subtitle() != ''): ?> <?php echo $data->subtitle() ?><?php endif ?>}},<?php echo "\n" ?><?php endif ?>
<?php if($data->type() != ''): ?>  Type = {<?php echo $data->type() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->series() != ''): ?>  Series = {<?php echo $data->series() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->booktitle() != ''): ?>  Book = {<?php echo $data->booktitle() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->edition() != ''): ?>  Edition = {<?php echo $data->edition() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->chapter() != ''): ?>  Chapter = {<?php echo $data->chapter() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->pages() != ''): ?>  Pages = {<?php echo $data->pages() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->publisher() != ''): ?>  Publisher = {<?php echo $data->publisher() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->journal() != ''): ?>  Journal = {<?php echo $data->journal() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->volume() != ''): ?>  Volume = {<?php echo $data->volume() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->number() != ''): ?>  Number = {<?php echo $data->number() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->organization() != ''): ?>  Organization = {<?php echo $data->organization() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->institution() != ''): ?>  Institution = {<?php echo $data->institution() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->school() != ''): ?>  School = {<?php echo $data->school() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->address() != ''): ?>  Address = {<?php echo $data->address() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->year() != ''): ?>  Year = {<?php echo $data->year() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->month() != ''): ?>  Month = {<?php echo $data->month() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->sourceurl() != ''): ?>  URL = {<?php echo $data->sourceurl() ?>},<?php endif ?>
<?php if($data->note() != ''): ?>  Note = {<?php echo $data->note() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->annote() != ''): ?>  Annote = {<?php echo $data->annote() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->crossref() != ''): ?>  Crossref = {<?php echo $data->crossref() ?>},<?php echo "\n" ?><?php endif ?>
<?php if($data->howpublished() != ''): ?>  Howpublished = {<?php echo $data->howpublished() ?>},<?php echo "\n" ?><?php endif ?>}
<?php echo "\n" ?>