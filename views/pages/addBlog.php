<?php
if( isLogged() == false )
{
  header('location:'. BASE_URI. '?page=homepage' );
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
          <h1> Add Blog </h1>
          <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="title">Tittle</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Blog başlığı yazınız">
              </div>
              <div class="form-group">
                  <label for="content">Content</label>
                  <textarea name="content" class="form-control" id="content"></textarea>
              </div>
              <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="img_url" class="form-control" id="image">
              </div>

              <input type="hidden" value="addBlog" name="modus">
              <input type="hidden" value="<?= $_SESSION['user']['id'] ?>" name="created_by">
              <button type="submit" name="submit" class="btn btn-primary mt-15">Submit</button>
          </form>


        </div>
    </div>
</div>
