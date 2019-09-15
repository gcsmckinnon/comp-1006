<?php
  // Start the session

  // Assign the session variables

  // Clear the session variables so it's blank the next time
  // Get the users
  
  // or change this to $users = $conn->query($sql); which will prepare, execute and fetchAll in one command
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
  </head>

  <body>
    <div class="container">
      <header class="mt-5">
      </header>

      <?php ?>
        <table class="table table-striped">
          <thead>
            <tr>
            </tr>
          </thead>

          <tbody>
            <?php ?>
              <tr>
              </tr>
            <?php ?>
          </tbody>
        </table>
      <?php ?>
        <div class="alert alert-warning">
          <h4 class="alert-heading">
            NO USERS!
          </h4>
          <hr>
          <p>Perhaps you should create a new one...</p>
        </div>
      <?php ?>
    </div>

    <footer class="mb-5"></footer>
  </body>
</html>
