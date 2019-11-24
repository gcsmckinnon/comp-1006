<?php include('../_config.php') ?>

<?php
  // Step 8: Check if the user is authenticated and is an administrator
  // Check if the user is even authenticated first. If not, move them along


?>

<?php
  // Step 1: Get the users
  // Include the connect script

  // or change this to $users = $conn->query($sql); which will prepare, execute and fetchAll in one command
  // sql string
  // prepare the sql and return the prepared statement
  // execute the statement
  // fetch all the records returned
?>

<?php
  // Step 2: Define the $_title and $_active link


?>

<!-- Step 3: Include the _header.php file -->
<?php ?>

<div class="container">
  <header class="mt-5">
    <h1>
      Users
    </h1>
    <hr>
    <small>
      <a href="./new.php"><i class="fa fa-plus"></i>&nbsp;New user...</a>
    </small>
  </header>

  <?php // Step 4: Check to see if any users exist ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Created On</th>
        </tr>
      </thead>

      <tbody>
        <!-- Iterate over the users and display their details -->
      </tbody>
    </table>
  <?php // Step 5: If not, display a different message ?>
    <div class="alert alert-warning">
      <h4 class="alert-heading">
        NO USERS!
      </h4>
      <hr>
      <p>Perhaps you should create a new one...</p>
    </div>
  <?php // Step 6: End the if ?>
</div>

<?php // Step 7: Include the footer ?>