<?php
  $subfolder = '/projects/recruitment-design/';
  // Get page URI callback
  $page = str_replace($subfolder, '', $_SERVER['REQUEST_URI']) . '.php';

  // Covers special cases
  if ($page == 'index.php' || $page == '.php'  || $page == 'frontpage.php') {
    require('pages/frontpage.php');
    die();
  } elseif ($page == 'covers') {
    require('pages/covers.php');
    die();
  } elseif ($page == '404.php') {
    require('pages/404.php');
    die();
  }

  // Add defaults page headers
  require('system/head.php');
  ?>
<!DOCTYPE html>
<html dir="ltr" xmlns:article="http://ogp.me/ns/article#" xmlns:book="http://ogp.me/ns/book#" xmlns:product="http://ogp.me/ns/product#"
  xmlns:profile="http://ogp.me/ns/profile#" xmlns:video="http://ogp.me/ns/video#" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# "
  lang="fr">
<body>

  <div id="page-container">
    <?php  require('system/navbar.php');  ?>
    <main id="main" class="">
      <?php  require('system/links.php') ?>

      <?php
      // Add page content or page not found
      if (is_file('pages' . DIRECTORY_SEPARATOR . $page)) {
        require('pages/' . $page);
      } else {
        echo '<h1 class="my-10 text-center">PAGE NOT FOUND !</h1>';
      }
      ?>
    </main>
    <?php require('system/footer.php');?>
  </div>
</body>
</html>

