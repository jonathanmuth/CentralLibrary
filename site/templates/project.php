<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="row">

      <div class="four columns">

        <?php snippet('reference/cover', array('data' => $page)) ?>

        <div class="row">

          <div class="six columns">
            <a class="button" ><i class="fa fa-arrow-circle-down"></i> Download</a>
          </div><!-- 
           --><div class="six columns">
            <a class="button" href="../panel/#/pages/show/<?php echo $page->uri() ?>"><i class="fa fa-pencil"></i> Edit</a>
          </div>

        </div>

      </div>

      <div class="eight columns">

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

    <hr>

  </main>

<?php snippet('footer') ?>