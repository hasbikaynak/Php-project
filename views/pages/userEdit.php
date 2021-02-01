<?php
  if( isLogged() == false )
  {
    header('location:'. BASE_URI. '?page=homepage' );
  }

  if( isset($_GET['user']) && is_numeric($_GET['user']) )
  {
    $userId = $_GET['user'];
    $user = getUser($userId);
  }
  else
  {
    header('location:'. BASE_URI. '?page=homepage' );
    die();
  }

?>

<div class="container mt-30">
    <div class="row">
        <div class="col-md-3">
           <?php include 'navbar.php'; ?>
        </div>
        <div class="col-md-9">

          <?php if( !empty($errors) ): ?>    <!--  Hata var mı ? -->
              <div class="alert alert-danger" role="alert">
                  <ul>
                      <?php foreach( $errors as $error ): ?>
                          <li> <?php echo $error; ?> </li>
                      <?php endforeach; ?>
                  </ul>

              </div>
          <?php endif; ?>

          <?php if( isset($success) ): ?> <!-- Başarı mesajı var mı ?   -->
              <div class="alert alert-success" role="alert">
                  <?php echo $success; ?>
              </div>
          <?php endif; ?>
          <h1> Edit User </h1>
          <form action="" method="POST">
              <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" value="<?= $user['firstname'] ?>" name="firstname" class="form-control" id="firstname" placeholder="Lütfen isminizi yazın!">
              </div>
              <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" value="<?= $user['lastname'] ?>" name="lastname" class="form-control" id="lastname" placeholder="Lütfen soyisminizi yazın!">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" value="<?= $user['email'] ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <input type="hidden" value="<?= $user['id'] ?>" name="user_id">
              <input type="hidden" value="userEdit" name="modus">
              <button type="submit" name="submit" class="btn btn-primary mt-15">Submit</button>
          </form>


        </div>
    </div>
</div>
