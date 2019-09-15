<?php
  // Start the session

  // Assign the session variables

  // Clear the session variables so it's blank the next time
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Register a New User</title>
  </head>

  <body>
    <div class="container">
      <header class="mt-5">
      </header>

      <div class="row">
        <div class="col-sm-4">
          <img id="avatar" src="" alt="avatar" class="invisible border">
        </div>

        <div class="col-sm-8 border">
          <form>
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <footer class="mb-5"></footer>
    <script>
      const emailField = document.querySelector('[name="email"]');
      const avatar = document.querySelector('#avatar');
      email.addEventListener('change', function () {
        const email = emailField.value;
        avatar.src = `http://api.adorable.io/avatars/300/${email}`;
        avatar.classList.remove('invisible');
      });
    </script>

  </body>
</html>
