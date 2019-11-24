<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<?php
  // If the user is attempting to edit and their not authenticated
  // or they're attempting to edit another user and they're not an admin
  if (isset($_action) && (!AUTH || ($_GET['id'] !== $_SESSION['user']['id'] && !ADMIN))) {
    redirect(base_path);
  } else if (!isset($_action) && AUTH && !ADMIN) { // If the user is attempting to create
    // Only admins can create new users while logged in
    redirect(base_path);
  }
?>

<?php $form_data = $form_data ?? null ?>

<form action="<?= $_action ?? base_path . "/users/create.php" ?>" method="post">
  <div class="row">
    <?php if (isset($_action)): ?>
      <input type="hidden" class="form-control" id="id" name="id" value="<?= $form_data['id'] ?>">
    <?php endif ?>

    <div class="form-group col">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="<?= $form_data['first_name'] ?? null ?>">
    </div>

    <div class="form-group col">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="<?= $form_data['last_name'] ?? null ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?= $form_data['email'] ?? null ?>">
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="form-group">
    <label for="password_confirmation">Password:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<!-- Below is a script that will grab a new avatar and load it when you change your email address -->
<script>
  const emailField = document.querySelector('[name="email"]');
  const avatar = document.querySelector('#avatar');
  email.addEventListener('change', function () {
    const email = emailField.value;
    avatar.src = `http://api.adorable.io/avatars/300/${email}`;
    avatar.classList.remove('invisible');
  });
</script>