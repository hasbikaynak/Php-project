            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-6 mt-60 bg-light p-30">
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
                        <h1> Register Form </h1>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Lütfen isminizi yazın!">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Lütfen soyisminizi yazın!">
                            </div>                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                            </div>                            
                            <input type="hidden" value="register" name="modus">
                            <button type="submit" name="submit" class="btn btn-primary mt-15">Submit</button>
                        </form>                        
                    </div>
                </div>
            </div>