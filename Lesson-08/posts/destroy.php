<?php

  include_once(dirname(__DIR__) . '/_config.php');
  not_admin_redirect(base_path . '/posts');

  // Include our connection and call our defined function
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Get the post using the id and user id as our clause
  $sql = "SELECT * FROM posts WHERE id = :id AND user_id = {$_SESSION['user']['id']}";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
  $stmt->execute();
  $post = $stmt->fetch();

  // Verify we have a post
  if (!$post) {
    $_SESSION['flash']['danger'][] = "Please provide a valid post you own.";
    // Send them to posts because they're not editing a valid post they own
    redirect(base_path . "/posts");
  }

  /*
    Create the post
  */
  $sql = "DELETE FROM posts WHERE id = :id";

  // Prepare, bind and execute our SQL
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
  $stmt->execute();

  // Send bacn a success message
  $_SESSION['flash']['success'][] = "You have successfully delete the post.";
  redirect(base_path . "/posts");
