<?php
  include 'partials/header.php';
 ?>


<body>

  <header>
    <div class="container">
      <img class="logo" src="img/logo.png" alt="Spotify">
      <select name="search" id="search-cd">
         <option value="">All</option>
      </select>
    </div>
  </header>

  <main>
    <div class="container">
        <div class="cds">

        </div>
    </div>
  </main>

  <script id="entry-template" type="text/x-handlebars-template">
    <div class="cd">
      <img class="cd-image" src="{{poster}}" alt="">
      <h2 class="cd-title">{{title}}</h2>
      <h3 class="cd-author">{{author}}</h3>
      <small class="cd-date">{{year}}</small>
    </div>
  </script>

  <script id="entry-option" type="text/x-handlebars-template">
     <option value="{{author}}">{{author}}</option>
   </script>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
