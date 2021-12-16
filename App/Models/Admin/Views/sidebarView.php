
<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Administrador</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Bem vindo <?php echo $_SESSION['ADMIN_LOGGED'] ?></p>
        <li class="">
            <a href="#pageHome" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
            <ul class="collapse list-unstyled" id="pageHome">
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/home-logo-table') ?>">Logo</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/home-banner-table') ?>">Banner</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/home-images-table') ?>">Imagens</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageTourism" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pontos Turisticos</a>
            <ul class="collapse list-unstyled" id="pageTourism">
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/banner-tourism-table') ?>">Banner</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/tourism-content-table') ?>">Conteudo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageCulture" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cultura</a>
            <ul class="collapse list-unstyled" id="pageCulture">
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/culture-banner-table') ?>">Banner</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/culture-content-table') ?>">Conteudo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageFooter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Footer</a>
            <ul class="collapse list-unstyled" id="pageFooter">
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/footer-contact-table') ?>">Contact</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin/footer-pages-table') ?>">Pages</a>
                </li>

            </ul>
        </li>
    </ul>
    
     <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?php echo App\Config\Config::url('/admin') ?>" class="download">Inicio</a>
                </li>
                <li>
                    <a href="<?php echo App\Config\Config::url('/auth/logout') ?>" class="download">Sair</a>
                </li>
     </ul>
    
</nav>

<!-- Page Content  -->
<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Barra Lateral</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link btn-outline-secondary" href="<?php echo App\Config\Config::url('/') ?>" target="_blank">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn-outline-secondary" href="<?php echo App\Config\Config::url('/tourist-hotspots') ?>" target="_blank" >Pontos Turisticos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn-outline-secondary" href="<?php echo App\Config\Config::url('/culture') ?>" target="_blank">Cultura</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

