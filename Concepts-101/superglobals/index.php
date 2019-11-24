<!-- Step 4: Create a set of opening and closing PHP tags -->

  // Step 9: Resume the session (if it hasn't already been resumed)
  

  // Step 5: If the post superglobal isn't empty
  
    
    // Step 6: Dump the post superglobal
    

    // Step 12: Assign the values of post to session if the session is empty
    
  

  // Step 7: If the get superglobal isn't empty
  
    // Step 8: Dump the get superglobal
    

  // Step 10: If the session superglobal isn't empty
  
    // Step 11: Dump the session superglobal
    

  // Step 13: If the 'clear_session' parameter exists
  
    // Step 14: Clear the session
    


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Superglobals</title>
  </head>

  <body>
      <!-- Step 1: Create attributes so the form will post to this page -->
      <form>
        <!-- Step 2: Capture the first and last names in the following input fields (missing an attribute) -->
        <div>
          <label for="first_name">First Name:</label>
          <input type="text">
        </div>
        <div>
          <label for="last_name">Last Name:</label>
          <input type="text">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      </form>

      <div>
        <!-- Step 3: Create a link that contains the query parameters 'first_name', 'last_name', and 'age' and their appropriate values -->
        <a href="index.php">Click Me</a>
      </div>

      <div>
        <!-- Step 15: Create a query parameter that will set a variable called 'clear_session' -->
        <a href="index.php">Clear Session</a>
      </div>

      <div>
        <a href="index.php">No GET params</a>
      </div>
  </body>
</html>