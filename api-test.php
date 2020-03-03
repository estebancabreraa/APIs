<?php
  $data = array();
  $username = sanitize_text_field($_POST['username']);

  if ($username == "esteban.cabrera.a") {
    $data["username"] = $username;
    $data["result"] = true;
  }else {
    $data["username"] = $username;
    $data["result"] = false;
  }

  // return all our data to an AJAX call
  echo json_encode($data, JSON_PRETTY_PRINT);
?>
