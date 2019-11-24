<?php
  // Step 1: Get the user by the ID
  include_once("../includes/_connect.php");
  // sql string
  // prepare the sql and return the prepared statement

  // execute the statement
  // fetch the user record returned
?>

<?php include('../_config.php') ?>

<?php
  $_title = "My User Profile";
  $_active = "profile";
?>

<?php include(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>
      User - <?= $user['first_name'] ?> <?= $user['last_name'] ?>
    </h1>
    <hr>

    <!-- Only show the back link if the user is an administrator -->
    <?php // Step 2: Check if the user is an admin role ?>
      <small>
        <a href="./"><i class="fa fa-chevron-left"></i>&nbsp;Back to users...</a>
      </small>
    <?php // Step 3: end if ?>
  </header>
  
  <div class="row">
    <div class="col-4">
      <img src="<?= $user['avatar'] ?>">
    </div>

    <div class="col-4">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Name:</th>
            <td><?= $user['first_name'] ?> <?= $user['last_name'] ?></td>
          </tr>
          <tr>
            <th>Email:</th>
            <td><?= $user['email'] ?></td>
          </tr>
          <tr>
            <th>Created On:</th>
            <td>
              <?= date("d/m/Y", strtotime($user['created_at'])) ?>
              <br>
              <?= date("g:i a", strtotime($user['created_at'])) ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include(ROOT . '/partials/_footer.php') ?>
