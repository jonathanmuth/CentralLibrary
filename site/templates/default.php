<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="grid">

      <div class="one-third">

        <?php snippet('reference/cover', array('data' => $page)) ?>

        <div class="grid">

          <?php if($user = $site->user()): ?>
            <div class="one-half">
            <?php if($file = $page->file()): ?>
              <a href="<?php echo $file->url() ?>" class="button" ><i class="fa fa-arrow-circle-down"></i> Download</a>
            <?php else: ?> 
              <a class="button" ><i class="fa fa-arrow-circle-down"></i> Download</a>
            <?php endif ?>
            </div><!-- 
             --><div class="one-half">
              <a class="button" href="../panel/#/pages/show/<?php echo $page->uri() ?>"><i class="fa fa-pencil"></i> Edit</a>
            </div>
          <?php else: ?>
            <div class="one-half">
            <?php if($file = $page->file()): ?>
              <a href="<?php echo $file->url() ?>" class="button" ><i class="fa fa-arrow-circle-down"></i> Download</a>
            <?php else: ?> 
              <a class="button button--disabled" ><i class="fa fa-arrow-circle-down"></i> Download</a>
            <?php endif ?>
            </div><!-- 
             --><div class="one-half">
              <a class="button button--disabled"><i class="fa fa-pencil"></i> Edit</a>
            </div>
          <?php endif ?>

        </div>

      </div>

      <div class="two-thirds">

        <div class="text">

          <?php snippet('reference/header', array('data' => $page)) ?>

          <div class="information">

            <div class="section-header">Information</div>

            <?php snippet('reference/information', array('data' => $page)) ?>

          </div>

          <?php if($page->collections() != ''): ?>

          <div class="collections">

            <div class="section-header">Collections</div>

            <?php snippet('reference/collections', array('data' => $page)) ?>

          </div>

          <?php endif; ?>

          <div class="excerpt">

            <div class="section-header">Excerpt</div>

            <?php echo $page->excerpt()->kirbytext() ?>

          </div>

          <div class="notes">

            <div class="section-header">Notes</div>

            <?php echo $page->notes()->kirbytext() ?>

          </div>
          
          <div class="bibtex">

            <div class="section-header">BibTex</div>

            <?php snippet('reference/bibtex', array('data' => $page)) ?>

          </div>

        </div>

      </div>

    </div>

    <div>

  </main>

<?php snippet('footer') ?>