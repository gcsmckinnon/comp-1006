<?php

  include_once(dirname(__DIR__) . '/_config.php');
  not_admin_redirect(base_path . '/posts');

  $errors = []; // For errors

  /*
    Validate you have all the required fields:
    title, status, and the user_id (content can be blank)
  */
  foreach(['title', 'status'] as $field) {
    if (empty($_POST[$field])) {
      $formatted = str_replace("_", " ", $_POST[$field]);
      $formatted = ucwords($formatted);
      $errors[] = "{$formatted} is a required field.";
    }
  }

  // If there are errors, let the user know
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    redirect(base_path . "/posts/new.php");
  }

  /*
    Sanitize our data before validating against
    the database
  */
  $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $_POST['status'] = filter_var($_POST['status'], FILTER_SANITIZE_STRING);

  /*
    Sanitizing the HTML is a little trickier. We can't use
    filter_var() because it will strip out ALL tags
    including HTML tags. Instead we'll use preg_replace
    which will allow us to strip out only the script tags.
  */
  $_POST['content'] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $_POST['content']);

  /*
    Create the post
  */
  $sql = "INSERT INTO posts
    (title, status, content, user_id) VALUES (
      :title,
      :status,
      :content,
      {$_SESSION['user']['id']}
    )";

  // Include our connection and call our defined function
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Prepare, bind and execute our SQL
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
  $stmt->bindParam(':status', $_POST['status'], PDO::PARAM_STR);
  $stmt->bindParam(':content', $_POST['content'], PDO::PARAM_STR);
  $stmt->execute();
  $post_id = $conn->lastInsertId();

  // Send bacn a success message
  $_SESSION['flash']['success'][] = "You have successfully created a new post.";
  redirect(base_path . "/posts/show.php?id={$post_id}");
