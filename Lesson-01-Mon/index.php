<!DOCTYPE html>
<html>
  <head>
    <title>Lesson 01 - PHP Syntax</title>
  </head>

  <body>
    <header>
      <h1>Table of Contents</h1>
    </header>

    <?php
      // our links hash
      $links = [
        "index.php" => "Home",
        "static.html" => "Static Web Page",
        "dynamic.php" => "Dynamic Web Page",
        "php-syntax.php" => "PHP Syntax"
      ];
    ?>
    <section>
      <ol>
        <?php foreach($links as $path => $title): ?>
        <li>
          <a href="<?= $path ?>"><?= $title ?></a>
        </li>
        <?php endforeach ?>
      </ol>
    </section>
  </body>
</html>