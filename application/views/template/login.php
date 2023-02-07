<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-5/css/all.css">
    <title>Login</title>
</head>
<body>


    <div class="page">

        <div class="body">


            <div class="container">
                
                <div class="row">

                        <div class="col-md-7">
                            <div id="backimg">
                                <img src="<?php echo base_url(); ?>assets/images/background.jpg" class="img-responsive" alt="Responsive image" >
                            </div>
                        </div>
    
                        <div class="col-md-5 ">
                            <div class="formulaire">
                                <div id="name"><h3>Sign In</h3></div>
                                        <div class="inpout">
                                        <form action="welcome/check" method="post">
                                            <div class="input-group input-group" id="divmail">
                                                <span class="input-group-addon" id="sizing-addon3"><i class="far fa-user-circle"></i></span>        
                                                <input type="email" class="form-control" name="email" required="required" placeholder="Email" aria-describedby="sizing-addon1" id="username">
                                            </div>

                                            <div class="input-group input-group" id="divpass">
                                                <span class="input-group-addon" id="sizing-addon3"><i class="far fa-eye-slash"></i></span>        
                                                <input type="password" class="form-control" name="mdp" required="required" placeholder="Password" aria-describedby="sizing-addon1" id="password">
                                            </div>
                                        </div>

                                        <div class="btn-group btn-group" role="group" aria-label="...">
                                            <button type="button,submit" class="btn btn-default" id="btn_connect">Se connecter</button>
                                        </div>
                                        </form>
                                    <div id="suggestion">Or sign in with</div>

                                    <div id="many_btn">

                                        <div class="btn-group btn-group">
                                            <div class="btn-group btn-group" role="group" aria-label="...">
                                                <button type="button" class="btn btn-default" id="btn_instagram"><i class="fab fa-instagram"></i><span class="icon_logo">Instagram</span></button>
                                            </div>
                                        </div>

                                        <div class="btn-group btn-group">
                                            <div class="btn-group btn-group" role="group" aria-label="...">
                                                <button type="button" class="btn btn-default" id="btn_facebook"><i class="fab fa-facebook-f"></i><span class="icon_logo">Facebook</span></button>
                                            </div>
                                        </div>

                                        <div class="btn-group btn-group">
                                            <div class="btn-group btn-group" role="group" aria-label="...">
                                                <button type="button" class="btn btn-default" id="btn_twitter"><i class="fab fa-twitter"></i><span class="icon_logo">Twitter</span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sign_up">Don't have an account yet ? <a href="page/inscription.php">Sign up now</a></div>
                            </div>
                        </div>
                </div>
            </div>




        </div>
 




    </div>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.css"></script>
</body>
</html>