<!DOCTYPE html>
<html>
  <head>
    <title>Lesson 01</title>
  </head>

  <body>
    <header>
      <h1>Table of Contents</h1>
    </header>

    <?php
      $toc = [
        "index.php" => "Home",
        "static.html" => "Static HTML",
        "dynamic.php" => "Dynamic HTML",
        "php-syntax.php" => "PHP Syntax"
      ];

      var_dump($toc);
      echo "<br>";
      var_export($toc);
    ?>

    <ul>
      <?php foreach($toc as $path => $title): ?>
        <li>
          <a href="./<?= $path ?>">
            <?= $title ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>