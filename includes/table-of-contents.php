<?php if ($toc_items): ?>
<section class="table-of-contents">
  <h2>Table of Contents - <?= $toc_title ?? null ?></h2>
  <ul>
    <?php foreach ($toc_items as $item): ?>
    <li><a href="<?= "./{$item[1]}" ?>"><i class="fa fa-link"></i>&nbsp;<?= "{$item[0]}" ?></a></li>
    <?php endforeach; ?>
  </ul>
</section>
<?php endif ?>