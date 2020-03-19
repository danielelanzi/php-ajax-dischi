<?php
  include 'database.php';
  include 'partials/header.php';
 ?>


<body>

  <header>
    <div class="container">
      <img class="logo" src="img/logo.png" alt="Spotify">
    </div>
  </header>

  <main>
    <div class="container">
      <?php if (!empty($database)) {?>
        <div class="cds">
          <?php foreach ($database as $cd) {?>
          <div class="cd">
            <img class="cd-image" src="<?php echo $cd['poster']; ?>" alt="">
            <h2 class="cd-title"><?php echo $cd['title']; ?></h2>
            <h3 class="cd-author"><?php echo $cd['author']; ?></h3>
            <small class="cd-date"><?php echo $cd['poster']; ?></small>
          </div>
          <?php }?>
        </div>
      <?php } else { ?>
        <h2>Non ci sono CD</h2>
      <?php } ?>


    </div>
  </main>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
