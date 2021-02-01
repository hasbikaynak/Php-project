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
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach(getAllUsers() as $user): ?>
                <tr>
                  <th scope="row"><?= $user['id'] ?></th>
                  <td><?= $user['firstname'] ?></td>
                  <td><?= $user['lastname'] ?></td>
                  <td>
                    <a href="<?= BASE_URI. '?page=user-edit&user='. $user['id'] ?>" class="btn btn-info">Edit</a>
                    <a href="<?= BASE_URI. '?page=user-delete&user='. $user['id'] ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
          </table>

        </div>
    </div>
</div>
