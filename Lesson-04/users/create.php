<?php
  // Add the connection script
  include_once("../_config.php");
  include_once(ROOT . "/includes/_connect.php");

  // Step 3: Create a message system



  /*
    Validation will ensure the user enters in our required
    fields and in the required format
  */
  // Step 3: Add an $errors[] array to store the error messages
  

  // Step 2: Verify the fields aren't empty using a foreach loop
  // Variable variables allow us to use strings to access a variable name
  // Format it into human readable
  // Add a new error to the array



  // Step 3: Verify that the email is in the correct format

  
  // Step 4: Verify that the password and password_confirmation match


  // Step 5: Return to the form if there are errors (we do this here because we don't want to run malicious code against our database)
  // count the array


  // redirect back to the form
  // we must exit or the script will continue to run

  /* End of validation */

  /*
    Sanitization will prevent data that isn't permitted
    from being entered into our database
  */
  // Step 6: Sanitize the email


  // Step 7: Sanitize the other two fields
  // (Below is a single line foreach statement. This can be done if the block only has one statement)

  /* End of sanitization */

  // Step 8: Users need to be unique, so check if the email already exists
  // a string containing our SQL
  // prepare the statement to avoid SQL injection attacks
  // bind the parameter (enforce it's a string)
  // execute our statement
  // fetch the results
  // close the connection cursor so it can await a new statement

  // Step 9: Check if the user exists and call an error if it does


  // Step 10: Return errors
  // count the array


  // redirect back to the form
  // we must exit or the script will continue to run


  // Step 11: Attempt to write the user to the database






  // a string containing our SQL

  // Get avatar
  $avatar = "http://api.adorable.io/avatars/300/{$_POST['email']}";

  // Step 12: Hash password


  // Step 13: Bind Parameters
  // prepare the statement
  // bind the parameter
  // bind the parameter
  // bind the parameter
  // bind the parameter
  // bind the parameter
  // execute

  // Close our connection
  $conn = null;

  // Step 14: Send back our success message
  
  // redirect to an index page
  // we must exit or the script will continue to run

  
  