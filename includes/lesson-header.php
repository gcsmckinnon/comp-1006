<hr>
<header>
  <h1>
    <?= $title ?? "Lesson" ?>
    <?php if (isset($subtitle)): ?>
    <small> - <?= $subtitle ?></small>
    <?php endif ?>
  </h1>
</header>
<hr>