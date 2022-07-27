<?php
  function add_message()
  {
    global $conn;
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
    $query="INSERT INTO message(nom, email, tel, message) VALUES('".$nom."', '".$email."', '".$tel."', '".$message."')";
    if(mysqli_query($conn, $query))
    {
      $response=array(
        'status' => 1,
        'status_message' =>'Message enregistrer.'
      );
    }
    else
    {
      $response=array(
        'status' => 0,
        'status_message' =>'ERREUR!.'. mysqli_error($conn)
      );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }
?>
