<?php

  include('../_config.php');
  include(ROOT . '/includes/_connect.php');

  // Step 1: Create a message system
  
  

  // Step 2: Validate the user supplied email
  

  // Step 3: Sanitize the user supplied email
  

  /*
    You'll notice we're not passing the password to our SQL query.
    This is intentional. The password can contain illegal characters
    in order to make it more secure. Because of this, we can't sanitize
    it. Because we can't sanitize it we don't want to pass it to the database.
    Instead we'll just evaluate the returned user against the password they're
    attempting.
  */
  // Step 4: Check if the user exists in the database
  // using variables to properly bind
  // preparing our sql
  // binding our parameter
  // executing the sql statement
  // forces the return to be a boolean value

  // Step 5: Check the user exists and the password is correct
  // password_verify will evalute the password against the hash and see if they match
  // Security by obscurity! Don't give more information than absolutely necessary

  // redirect back to the form
  // we must exit or the script will continue to run


  // Step 6: Set a session variable to verify the user is authenticated
  unset($user['password']);
  $_SESSION['user'] = $user;

  // Step 7: Return the user to their profile page

  // redirect to an index page
  // we must exit or the script will continue to run