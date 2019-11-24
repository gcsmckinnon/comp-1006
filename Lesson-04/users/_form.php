<!-- Step 1: Add the action and HTTP method to the form attributes -->
<form>
  <div class="row">
    <div class="form-group col">
      <label for="first_name">First Name:</label>
      <!-- Step 2: Add the name attribute to the input element -->
      <!-- Step 3: Add the default value if it exists -->
      <!-- Step 4: Add the client-side validation option -->
      <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
    </div>

    <div class="form-group col">
      <label for="last_name">Last Name:</label>
      <!-- Step 2: Add the name attribute to the input element -->
      <!-- Step 3: Add the default value if it exists -->
      <!-- Step 4: Add the client-side validation option -->
      <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <!-- Step 2: Add the name attribute to the input element -->
    <!-- Step 3: Add the default value if it exists -->
    <!-- Step 4: Add the client-side validation option -->
    <input type="text" class="form-control" id="email" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <!-- Step 2: Add the name attribute to the input element -->
    <!-- Step 4: Add the client-side validation option -->
    <input type="password" class="form-control" id="password">
  </div>

  <div class="form-group">
  <!-- Step 2: Add the name attribute to the input element -->
  <!-- Step 4: Add the client-side validation option -->
    <label for="password_confirmation">Password:</label>
    <input type="password" class="form-control" id="password_confirmation">
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