<?php snippet('header') ?>

  <main class="main" role="main">
    
    <form>
      <input type="search" name="q" value="<?php echo $query ?>">
      <input type="submit" value="Search">
    </form>
    
    <ul>
      <?php foreach($results as $result): ?>
      <li>
        <a href="<?php echo $result->url() ?>">
          <?php echo $result->title()->html() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>

  </main>

<?php snippet('footer') ?>