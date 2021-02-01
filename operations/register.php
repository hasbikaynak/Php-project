<?php


            $firstname        = $_POST['firstname'];
            $lastname         = $_POST['lastname'];
            $email            = $_POST['email'];
            $password         = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            $errors = [];

            if( empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password) )
            {
                $errors[] = 'Lütfen formu tam olarak doldurunuz !';
            }
            else
            {
                if( $password !== $confirm_password )
                {
                    $errors[] = 'Password ve Confirm Password eşleşmedi';
                }
                elseif( strlen($firstname) < 5 )
                {
                    $errors[] = 'Lütfen adınızı tam yazın';
                }
                else
                {

                    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
                    $statement = $db->prepare($sql);
                    $statement->execute([
                      'firstname' => $firstname,
                      'lastname'  => $lastname,
                      'email'     => $email,
                      'password'  => password_hash($password, PASSWORD_DEFAULT)
                    ]);

                    if( $statement->rowCount() == 1 )
                    {
                      $success = 'Başarılı bir şekilde kayıt oldunuz!';
                    }
                    else
                    {
                      $errors[] = 'Kayıt işlemi esnasında bir hata oluştu!';
                    }


                    /*
                    $data =  mysqli_query($db, $sql);



                    #if( $db->affected_rows !== -1 )
                    if( $data )
                    {
                        $success = 'Başarılı bir şekilde kayıt oldunuz!';
                    }
                    */
                }
            }




        ?>
