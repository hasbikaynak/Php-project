<?php



    $email    = $_POST['email'];
    $password = $_POST['password'];
    $errors   = [];

    if( empty($email) || empty($password) )
    {
       $errors[] = 'Lütfen formu tam olarak doldurunuz !';
    }
    else
    {
        $sql = 'SELECT * FROM users WHERE email=:email';

        $statement = $db->prepare($sql);
        $statement->execute([
            'email' => $email
        ]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if( empty($user) )
        {
            $errors[] = 'Kullanıcı bulunamadı !';
        }
        else
        {
            if( password_verify($password, $user['password']) )
            {
                $_SESSION['user'] = $user;
                $_SESSION['is_logged'] = 1;
                header('location:'. BASE_URI. '?page=admin' );
                die();
            }
            else
            {
                $errors[] = 'Lütfen şifrenizi doğru giriniz !';
            }
        }


    }
