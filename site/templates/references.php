<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($results): ?>

      <table class="sortable">
        <tr>
          <th><span class="sortable_header">Author</span></th>
          <th><span class="sortable_header">Title</span></th>
          <th><span class="sortable_header">Source</span></th>
          <th><span class="sortable_header">Year</span></th>
          <th class="sorttable_nosort"><span class="sortable_header"><i class="fa fa-print fa-lg"></i></span></th>
        </tr>
        <?php foreach($results as $result): ?>
            <?php snippet('reference/row', array('data' => $result)) ?>
        <?php endforeach ?>
      </table>

    <?php else: ?> <!-- Display when no search results are present -->  

    <?php $references = $page->children()->sortBy('author', 'asc')->paginate(100) ?>

      <table class="sortable">
        <tr>
          <th><span class="sortable_header">Author</span></th>
          <th><span class="sortable_header">Title</span></th>
          <th><span class="sortable_header">Source</span></th>
          <th><span class="sortable_header">Year</span></th>
          <th class="sorttable_nosort"><span class="sortable_header"><i class="fa fa-print fa-lg"></i></span></th>
        </tr>
        <?php foreach($references as $reference): ?>
            <?php snippet('reference/row', array('data' => $reference)) ?>
        <?php endforeach ?>
      </table>

      <?php if($references->pagination()->hasPages()): ?>
        <nav class="pagination">

          <?php if($references->pagination()->hasPrevPage()): ?>
          <a class="next" href="<?php echo $references->pagination()->prevPageURL() ?>">&lsaquo; Previous Page</a>
          <?php endif ?>

          <?php if($references->pagination()->hasNextPage()): ?>
          <a class="prev" href="<?php echo $references->pagination()->nextPageURL() ?>">Next Page &rsaquo;</a>
          <?php endif ?>

        </nav>
      <?php endif ?>

    <?php endif ?>

    <hr>

  </main>

<?php snippet('footer') ?>