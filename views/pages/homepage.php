<div class="container">
    <div class="row">
        <div class="col-md-12">
          Homepage
            <?php if( isset( $_SESSION['is_logged'] ) ){
                if( $_SESSION['is_logged'] ) { ?>
                <h1> Welcome <?= $_SESSION['user']['firstname']; ?> </h1>
            <?php }else{ ?>
                <h1> Homepage </h1>
            <?php } } ?>
        </div>
    </div>
</div>
