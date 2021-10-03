<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Programa Trilhas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/header.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/content.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/slide.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/contact.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/css/login.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/bootstrap/css/bootstrap.css')?>" type="text/css"/>
        <!--SCRIPTS-->
 
     
    </head>
    <body id="body">
        
        <!-- HEADER -->
        <?php      
                $this->view('Public/Views/headerView');
        ?>
       
        <!-- CONTENT -->
            <?php 
                if(isset($page)){
                    $data = isset($data)?$data:[];
                     $this->view($page, $data);
                }
            ?>
        
        <!-- FOOTER -->
        <?php $this->view('Public/Views/footerView')?>
        
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/js/Jquery.js')?>"></script>
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/js/main.js')?>"></script>
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/js/slide.js')?>"></script>
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/bootstrap/js/bootstrap.js')?>"></script>
    </body>
</html>

