<?php require('system/head.php'); ?>

<body class="path-frontpage">
  <div id="page-container">

    <?php
      $header_classes = 'header-absolute';
      require('system/navbar.php');
    ?>

    <main id="main" class="">

      <!-- STRATE 1 - COVER -->
      <div class="card-wrapper">
        <article class="cover cover-display-1">
          <div class="cover-body" style="background-image: url(assets/images/GettyImages-542692854.png);">
            <div class="shadow">
              <blockquote class="blockquote blockquote-display-1 quote-variant">
                <p class="quote">Sans différence,<br>
                pas d'harmonie.
                </p>
                <footer class="blockquote-footer">Anonyme</footer>
              </blockquote>
              <div class="cover-link">
                <a href="#" class="btn btn-outline-primary"><span>Qui sommes nous</span></a>
              </div>
            </div>
          </div>
          <div class="cover-body-background-1"></div>
          <div class="cover-body-background-2"></div>
        </article>
      </div>

      <?php require('system/links.php'); ?>

      <h1 class="my-2 text-center">FRONT PAGE !</h1>

      <!-- STRATE 3 - SIMONE DE BEAUVOIR -->
      <div class="card-wrapper bg-cover bg-dark py-2" style="background-image: url(assets/images/simone2.jpg);">
        <article class="card card-quote">
          <blockquote class="blockquote blockquote-display-1">
            <p class="quote">La vocation,<br /> c'est avoir pour<br /> métier sa passion.</p>
            <footer class="blockquote-footer">Stendhal</footer>
          </blockquote>
        </article>
      </div>

<!-- CLOSE MAIN + FOOTER + BODY -->
<?php require('system/footer.php'); ?>
