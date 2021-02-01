<?php

if( isset($_GET['user']) )
{
  $userId = $_GET['user'];

  $sql = 'DELETE FROM users WHERE id = :id';
  $statement = $db->prepare($sql);
  $statement->execute([
    'id' => $userId
  ]);

  if( $statement->rowCount() == 1 )
  {
    $success = 'Kayıt başarılı bir şekilde silindi';
  }
  else
  {
    $errors[] = 'Silme işlemi esnasında bir hata oluştu!';
  }
  
}
else
{
  header('location:'. BASE_URI. '?page=homepage' );
}
