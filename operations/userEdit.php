<?php

  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $email     = $_POST['email'];
  $userId    = $_POST['user_id'];

  if( empty($firstname) || empty($lastname) || empty($email)  )
  {
    $errors[] = 'Lütfen formu eksiksiz doldurunuz!';
  }
  else
  {
    $sql = 'UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email WHERE id = :id';
    $statement = $db->prepare($sql);
    $statement->execute([
      'firstname' => $firstname,
      'lastname'  => $lastname,
      'email'     => $email,
      'id'        => $userId
    ]);

    if( $statement->errorInfo()[0] == 00000 )
    {
      $success = 'Kayıt başarılı bir şekilde düzenlendi';
    }
    else
    {
      $errors[] = 'Kayıt düzenleme esnasında bir hata oluştu!';
    }

  }
