<header class="container-fluid">  
    <div id="top" class="row d-flex align-items-center">
         <?php foreach (\App\Models\FooterContact\Controllers\Admin\AdminController::contact() as $contact) { ?>
        <div class="col-xl-4  mb-2 d-flex justify-content-center">
            <a  class="bi bi-whatsapp"href="https://web.whatsapp.com/" target="_blank"><?php echo $contact->getTelephone() ?></a>  
        </div>
        <div class="col-xl-4 mb-2 d-flex justify-content-center">
            <a class="bi bi-envelope-fill"href="https://mail.google.com/" target="_blank"><?php echo $contact->getEmail() ?></a>
        </div> 
         <?php } ?>
        <div  id="mobile-buttons" class="col-xl-4 mb-2 d-flex justify-content-center ">
            <button class="btn btn-outline-secondary" onclick="fontBigger()" id="">A+</button>
            <button class="btn btn-outline-secondary" onclick="fontLower()" id="">A-</button>
            <button type="button" class="btn btn-outline-secondary teste">Escuro</button>
        </div>    
    </div>
    <div id="header" class="header row d-flex align-items-center">
        <div class="col-xl-3 col-sm-3 mb-2">
            <img class="img-fluid rounded" src="<?php echo \App\Config\Config::url(App\Models\HomeLogo\Controllers\Admin\AdminController::logo()) ?>" alt="">
        </div>
        <div class="col-xl-5 col-sm-2 mb-2">

        </div>
        <div id="navbar" class="col-xl-4">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div>
                    <img  id="navlogo" class="navbar-brand"  src="<?php echo \App\Config\Config::url(App\Models\HomeLogo\Controllers\Admin\AdminController::logo()) ?>"alt="">
                </div>  
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo \App\Config\Config::url('/')?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo \App\Config\Config::url('/tourist-hotspots')?>">Pontos Turisticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo \App\Config\Config::url('/culture')?>">Cultura</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo  \App\Config\Config::url('/contact')?>">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>