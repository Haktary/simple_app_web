<?php


function add_message()
{
  global $conn;
  $envoie = True;
  // get post 
  $nom = $_POST["nom"];
  $email = $_POST["email"]; 
  $tel = $_POST["tel"];
  $message = $_POST["message"];
  /* integriter des donnee email et tel */ 
  if (!preg_match('/^\\S+@\\S+\\.\\S+$/', $email)) {
    $envoie = False ;
    $response=array(
      'erreur' => 'email erreur de saisie'
    );

  }
  if (!preg_match('#^0[6-7]{1}\d{8}$#', $tel)) {
    $envoie = False ;
    $response=array(
      'erreur' => 'tel erreur de saisie'
    );
  }
  /* enlevée les balise (protection xss) */ 
  $nom = strip_tags($nom);
  $email = strip_tags($email);
  $tel = strip_tags($tel);
  $message = strip_tags($message);

  /* si les data son intègre */ 
  if ($envoie == True) {
    // prep de la sql (protection sql)
    $stmt = $conn->prepare("INSERT INTO message(nom, email, tel, message) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $email, $tel, $message);
    
    if ($stmt->execute()) {
      // function mail need to config your server smtp 
      $to = "info@bulko.net";
      $subject = "receive message";
      $txt = $nom . $email . $tel . $message ; 
      $headers = "From: webmaster@example.com";
      // envoie du mail 
      $mail = mail($to,$subject,$txt,$headers); 
      $stmt->close();
      $response=array(
        'status' => 1,
        'status_message' =>'Message enregistrer.'
      );
      header('Content-Type: application/json');
      echo json_encode($response);

    } else {
      $stmt->close();
      $response=array(
        'status' => 0,
        'status_message' =>'probleme message not save'
      );
      header('Content-Type: application/json');
      echo json_encode($response);
    }

    

  } else {
      header('Content-Type: application/json');
      echo json_encode($response);
  }
  

}

?>
