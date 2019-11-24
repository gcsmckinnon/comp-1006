<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<?php not_auth_redirect(base_path . '/posts') ?>

<?php

  // Validate
  foreach(['title', 'comment'] as $field) {
    if (empty($_POST[$field])) {
      $formatted = str_replace("_", " ", $_POST[$field]);
      $formatted = ucwords($formatted);
      $errors[] = "{$formatted} is a required field.";
    }
  }

  // Handle errors
  $errors = [];
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    redirect(base_path . "/posts/{$_POST['id']}");
  }

  /*
    Sanitize our data before validating against
    the database
  */
  $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $_POST['comment'] = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
  
  // Include our connection and call our defined function
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Get the post using the id and user id as our clause
  $sql = "SELECT * FROM posts WHERE id = :id AND status = 'published'";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $_POST['post_id'], PDO::PARAM_INT);
  $stmt->execute();
  $post = $stmt->fetch();

  // Verify we have a post
  if (!$post) {
    $_SESSION['flash']['danger'][] = "Please provide a valid post id.";
    // Send them to posts because they're not editing a valid post they own
    redirect(base_path . "/posts");
  }

  /*
    Create the comment
  */
  $sql = "INSERT INTO comments
    (title, comment, user_id, post_id) VALUES (
      :title,
      :comment,
      {$_SESSION['user']['id']},
      :post_id
    )";

  // Prepare, bind and execute our SQL
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
  $stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
  $stmt->bindParam(':post_id', $_POST['post_id'], PDO::PARAM_INT);
  $stmt->execute();

  // Send bacn a success message
  $_SESSION['flash']['success'][] = "You have successfully created a new comment.";
  redirect(base_path . "/posts/show.php?id={$_POST['post_id']}");