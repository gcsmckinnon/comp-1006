<!DOCTYPE html>
<html>
  <head>
    <title>Look Ma No Hands</title>
  </head>

  <body>
    <header>
      <h1>Table of Contents</h1>
    </header>

    <section>
      <ol>
        <?php
          $items = [
            "index.php" => "Home",
            "static.html" => "Static Web Page",
            "dynamic.php" => "Dynamic Web Page",
            "php-syntax.php" => "PHP Syntax"
          ];
          // phpinfo();
        ?>

        <?php foreach($items as $path => $title): ?>
          <li>
            <a href="<?= $path ?>"><?= $title ?></a>
          </li>
        <?php endforeach ?>
      </ol>
    </section>
  </body>
</html>