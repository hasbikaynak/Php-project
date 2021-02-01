
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

        </div>
    </div>
</div>
