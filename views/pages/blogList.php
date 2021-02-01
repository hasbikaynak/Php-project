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
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach(getAllBlogs() as $blog): ?>
                <tr>
                  <th scope="row"><?= $blog['id'] ?></th>
                  <td><?= $blog['title'] ?></td>
                  <td> <img width="50" src="<?= BASE_URI. '/assets/images/'. $blog['img_url'] ?>"> </td>
                  <td>
                    <a href="<?= BASE_URI. '/blog-edit&blog='. $blog['id'] ?>" class="btn btn-info">Edit</a>
                    <a href="<?= BASE_URI. '/blog-delete&blog='. $blog['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
          </table>

        </div>
    </div>
</div>
