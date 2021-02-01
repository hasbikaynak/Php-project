<?php



$title     = $_POST['title'];
$content   = $_POST['content'];
$createdBy = $_POST['created_by'];

if( empty($title) ||  empty($content) )
{
  $errors[] = 'Lütfen formu eksiksiz doldurunuz !';
}
else
{
  if( isset( $_FILES['img_url'] ) && $_FILES['img_url']['size'] > 0)
  {
    ############### FILE UPLOAD ###########################
    $temp_img = $_FILES['img_url']['tmp_name'];
    $newName = uniqid(). '.jpg';
    move_uploaded_file($temp_img, BASE_DIR. '/assets/images/'. $newName);

    ################## DB SAVE #####################################

    $sql = 'INSERT INTO blog (title, content, img_url, created_by) VALUES (:title, :content, :img_url, :created_by)';
    $statement = $db->prepare($sql);
    $statement->execute([
      'title'     => $title,
      'content'   => $content,
      'img_url'   => $newName,
      'created_by'=> $createdBy
    ]);

    if( $statement->rowCount() == 1 )
    {
      $success = 'KAyıt işlemi başarılı';
    }
    else
    {
      $errors[] = 'Kayıt işlemi esnasında bir sorun oluştu !';
    }

  }
  else
  {
    $errors[] = 'Lütfen fotoğraf seçiniz !';
  }
}
