<?php include_once(dirname(__DIR__) . '/_config.php') ?>

<?php
  // Check if the user is even authenticated first. If not, move them along
  if (session_status() === PHP_SESSION_NONE) session_start();
  not_admin_redirect(base_path);
?>

<?php
  // Get the users
  include_once(ROOT . '/includes/_connect.php');
  $conn = connect();
  // or change this to $users = $conn->query($sql); which will prepare, execute and fetchAll in one command
  $sql = "SELECT * FROM users ORDER BY created_at DESC"; // sql string
  $users = $conn->query($sql)->fetchAll(); // fetch all the records returned
?>

<?php include_once(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>
      List All Users
    </h1>
    <hr>
    <small>
      <a href="<?= base_path ?>/users/new.php">
        <i class="fa fa-plus"></i>
        Create a New User
      </a>
    </small>
  </header>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created On</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><a href="./show?id=<?= $user['id'] ?>"><?= $user['first_name'] ?> <?= $user['last_name'] ?></a></td>
          <td><?= $user['email'] ?></td>
          <td>
            <?= date("d/m/Y", strtotime($user['created_at'])) ?>
            <br>
            <?= date("g:i a", strtotime($user['created_at'])) ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?php include_once(ROOT . '/partials/_footer.php') ?>