  <footer class="page-footer font-small bg-dark text-light">

    <div style="background-color: #635a5a;">
      <div class="container">

        <div class="row py-4 d-flex align-items-center">

          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Conecte-se conosco nas redes sociais!</h6>
          </div>

          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <a href="https://www.facebook.com/andreluis.pereiradesoisa" target="_blank">
              <i class="bi bi-facebook white-text mr-4"> </i>
            </a>

            <a href="https://github.com/Rudz1" target="_blank">
              <i class="bi bi-github white-text mr-4"> </i>
            </a>
  
            <a href="https://www.linkedin.com/in/andr%C3%A9-luis-pereira-b251331a2/" target="_blank">
              <i class="bi bi-linkedin white-text mr-4"> </i>
            </a>

            <a href="https://www.instagram.com/andreluis.pereir/" target="_blank">
              <i class="bi bi-instagram white-text"> </i>
            </a>

          </div>

        </div>

      </div>
    </div>


    <div class="container text-center text-md-left mt-5">

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <img width="100%" height="200px" src="<?php echo \App\Config\Config::url(App\Models\HomeLogo\Controllers\Admin\AdminController::logo()) ?>" alt="">
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold">Paginas</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="/">Home</a>
          </p>
          <p>
            <a href="<?php echo \App\Config\Config::url('/tourist-hotspots')?>">Pontos Turisticos</a>
          </p>
          <p>
            <a href="><?php echo \App\Config\Config::url('/culture')?>">Cultura</a>
          </p>
          <p>
            <a href="<?php echo  \App\Config\Config::url('/contact')?>">Contato</a>
          </p>

        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold">Fontes</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="https://www.letras.mus.br/hinos-de-estados/1658615/" target="blank">letras</a>
          </p> 
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <h6 class="text-uppercase font-weight-bold">Contato</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <?php foreach (\App\Models\FooterContact\Controllers\Admin\AdminController::contact() as $contact) { ?>
          <p>
              <i class="bi bi-house-door mr-3"></i> <?php echo $contact->getAddress() ?>
          </p>
          <p>
            <i class="bi bi-envelope mr-3"></i> <?php echo $contact->getEmail() ?>
          </p>
          <p>
            <i class="bi bi-phone mr-3"></i> <?php echo $contact->getTelephone() ?>
          </p>
          <?php } ?>
        </div>

      </div>

    </div>

    <div class="footer-copyright text-center py-3">
        <p>André Luis Pereira</p>
    </div>

</footer>