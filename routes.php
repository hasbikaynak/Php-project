<?php

    /******************* GET *****************************/
    /*****************************************************/

    if( !isset($_GET['page']) )
    {
        $page = 'homepage';
    }
    else
    {
        switch( $_GET['page'] )
        {
            case 'homepage'    :      $page = 'homepage';  break;
            case 'register'    :      $page = 'register';  break;
            case 'login'       :      $page = 'login';     break;
            case 'admin'       :      $page = 'dashboard'; break;
            case 'user-list'   :      $page = 'userlist'; break;
            case 'user-edit'   :      $page = 'userEdit'; break;
            case 'add-user'    :      $page = 'addUser'; break;
            case 'add-blog'    :      $page = 'addBlog'; break;
            case 'user-delete' :
                 require_once 'operations/userDelete.php';
                 $page = 'userList';
            break;
            default :                $page = '404';

        }

    }


    /******************* POST *****************************/
    /*****************************************************/

    if( strtoupper( $_SERVER['REQUEST_METHOD'] ) === 'POST' )
    {
        if( isset( $_POST['modus'] ) )
        {
            switch( $_POST['modus'] )
            {
                case 'register' :       require_once 'operations/register.php';  break;
                case 'userEdit' :       require_once 'operations/userEdit.php';  break;
                case 'login'    :       require_once 'operations/login.php';     break;
                case 'logout'   :       require_once 'operations/logout.php';    break;
                case 'addBlog'   :      require_once 'operations/addBlog.php';    break;
            }
        }
    }
    /*
        echo '<pre>';
        print_r( $_SERVER );
        echo '</pre>';
    */

 ?>
