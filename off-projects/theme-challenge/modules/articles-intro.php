
<articles-intro>

  <header>
    <h2 class='attention-voice'>Publications</h2>

    <p class='calm-voice'>Research and Insights</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
