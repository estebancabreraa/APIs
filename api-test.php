<?php
 header('Access-Control-Allow-Origin: *'); 
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');

 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
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
