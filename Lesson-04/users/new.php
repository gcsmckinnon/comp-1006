<?php include('../_config.php') ?>

<?php
  $_title = "Create a New User - Admin";
  $_active = "users";
?>

<?php include(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>Register a New User</h1>
    <hr>
    <small>
      <a href="./"><i class="fa fa-chevron-left"></i>&nbsp;Back to users...</a>
    </small>
  </header>

  <div class="row">
    <div class="col-sm-4">
      <img id="avatar" src="" alt="avatar" class="invisible border">
    </div>

    <div class="col-sm-8 border">
      <?php // Step 1: Include the _form partial ?>
    </div>
  </div>
</div>

<?php include(ROOT . '/partials/_footer.php') ?>