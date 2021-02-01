<head>
        <title>Project</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">My Project</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?= BASE_URI. '?page=homepage' ?>">Homepage </a>
                                    </li>
                                    <?php if( isset($_SESSION['is_logged']) ){ ?>
                                        <?php if( $_SESSION['is_logged'] ){  ?>
                                            <li class="nav-item">
                                                <form action method="POST">
                                                    <input type="hidden" name="modus" value="logout">
                                                    <button type="submit" name="submit" class="nav-link">Logout</button>
                                                </form>                                            
                                            </li>                                            

                                        <?php }}else{ ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= BASE_URI. '?page=login' ?>">Login</a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= BASE_URI. '?page=register' ?>">Register</a>
                                            </li>                                          
                                        
                                        <?php } ?>
                                </ul>
           
                            </div>
                        </nav>
                    </div>
                </div>
 
            </div>
           
        </header>