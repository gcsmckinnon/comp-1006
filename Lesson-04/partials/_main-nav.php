<!-- Step 1: Add the base path to all the urls -->
<!-- Step 2: Add the conditional active class to all the nav-item lis -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">SM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Ma House</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact.php">Contact Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/show.php?id=">My Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/users/new.php">Create a New User</a>
          <a class="dropdown-item" href="/users">View All Users</a>
        </div>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="/sessions/login.php" class="nav-link">
          <i class="fa fa-unlock"></i>&nbsp;Login
        </a>
      </li>
      <li class="nav-item">
        <a href="/users/new.php" class="nav-link">
          <i class="fa fa-user"></i>&nbsp;Register
        </a>
      </li>

      <li class="nav-item">
        <a href="/sessions/logout.php" class="nav-link">
          <i class="fa fa-lock"></i>&nbsp;Logout
        </a>
      </li>
    </ul>
  </div>
</nav>