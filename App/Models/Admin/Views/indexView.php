<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Programa Trilhas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/admin/sidebar.css')?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/admin/admin.css')?>" type="text/css"/> 
        <link rel="stylesheet" href="<?php echo App\Config\Config::url('/assets/bootstrap/css/bootstrap.css')?>" type="text/css"/> 
        <!--SCRIPTS-->

    </head>
    <body>
        <div class="wrapper">
        <!-- SIDEBAR -->    
        <?php $this->view('/Admin/Views/sidebarView')?>

        <!-- CONTENT -->
            <?php 
                if(isset($page)){
                    $data = isset($data)?$data:[];
                     $this->view($page, $data);
                }
            ?>
            
            </div>
        
        </div>
    </body>
    
            <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/js/Jquery.js')?>"></script> 
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/admin/js/sidebar.js')?>"></script> 
        <script type="text/javascript" src="<?php echo App\Config\Config::url('assets/bootstrap/js/bootstrap.js')?>"></script> 
</html>

