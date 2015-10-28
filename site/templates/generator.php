<?php $references = $pages->find('references')->children()->sortBy('author', 'asc') ?>
<?php foreach($references as $reference): ?>
<?php snippet('reference/bibtex-download', array('data' => $reference)) ?>
<?php endforeach ?>