


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
        <article class="cover cover-404">
          <div class="cover-body" style="background-image: url('/sites/lnh/themes/lnh_front/images/erreur_404_02.jpg');">
            <h1 class="cover-title text-light">Oups !</h1>
            <p class="cover-subtitle text-light">La page que vous recherchez <br /> semble introuvable.</p>
            <div class="cover-link">
              <a href="/{{ langcode }}" class="btn btn-outline-light"><span>Home</span></a>
            </div>
          </div>
          <div class="cover-body-background-1"></div>
          <div class="cover-body-background-2"></div>
        </article>
      </div>
