<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Programa Trilhas</title>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/login.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/bootstrap/css/bootstrap.css') ?>" type="text/css"/>
        <!--SCRIPTS-->


    </head>
    <body id="body-login">

        <div class="row">
            <div class="col-md-6 mx-auto p-0">
                <div class="card">
                    <div class="login-box">
                        <div class="login-snip"> 

                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                            <label for="tab-1" class="tab">Login</label> 
                            <input id="tab-2" type="radio" name="tab" class="sign-up">
                            <label for="tab-2" class="tab"></label>

                            <div class="login-space">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/auth/login-verify') ?>">
                                    <div class="login">
                                        <div class="group"> 
                                            <label for="user" class="label">Username</label> 
                                            <input id="user" name="username" type="text" class="input" placeholder="Enter your username">
                                        </div>
                                        <div class="group"> 
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Enter your password"> 
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Entrar">
                                        </div>
                                        <div class="hr"></div>
                                        <?php if (isset($message)) { ?>
                                            <div class="alert alert-danger">
                                                <?php echo $message ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </form> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/js/Jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/bootstrap/js/bootstrap.js') ?>"></script>
    </body>
</html>

