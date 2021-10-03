<section class="container-fluid">
    <div class="row">
        <div class="col-xl-1"></div>
        <div id="carouselExampleSlidesOnly" class="col-xl-10 carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block  home_img" src="<?php echo \App\Config\Config::url($banners[0]->getUri()) ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block home_img" src="<?php echo \App\Config\Config::url($banners[1]->getUri()) ?>">
                </div>
                <div class="carousel-item">
                    <img class="d-block home_img" src="<?php echo \App\Config\Config::url($banners[2]->getUri()) ?>">
                </div>
            </div>
        </div>
        <div class="col-xl-1"></div>
    </div>

    <div>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <h2><i class="bi bi-file-earmark-music"></i>Hino do Maranhão</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2"></div> 
            <div class="col-xl-2">
                <p>Entre o rumor das selvas seculares<br>
                    Ouviste um dia no espaço azul, vibrando<br>
                    O troar das bombardas nos combates<br>
                    E, após, um hino festival, soando<br>
                    Salve Pátria, Pátria amada!<br>
                    Maranhão, Maranhão, berço de heróis<br>
                    Por divisa tens a glória<br>
                    Por nume, nossos avós
                </p>   
            </div>
            <div class="col-xl-2"></div>
            <div class="col-xl-6 col-sm-2">
                <iframe width="100%" height="365" src="https://www.youtube.com/embed/k6cqeSGpFLI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

        <div class="row"> 
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>Era a guerra, a vitória, a morte e a vida<br>
                    E, com a vitória, a glória entrelaçada<br>
                    Caía do invasor a audácia estranha<br>
                    Surgia do direito a luz dourada</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10"> 
                <p>Salve Pátria, Pátria amada!<br>
                    Maranhão, Maranhão, berço de heróis<br>
                    Por divisa tens a glória<br>
                    Por nume, nossos avós</p>
            </div>
         
        </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>Reprimiste o flamengo aventureiro<br>
                    E o forçaste a no mar buscar guarida<br>
                    E dois séculos depois, disseste ao luso<br>
                    A liberdade é o sol que nos dá vida</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>Salve Pátria, Pátria amada!<br>
                    Maranhão, Maranhão, berço de heróis<br>
                    Por divisa tens a glória<br>
                    Por nume, nossos avós</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-2">
                <p>Quando as irmãs os braços estendeste<br>
                    Foi com a glória a fulgir do teu semblante<br>
                    Sempre envolta na tua luz celeste<br>
                    Pátria de heróis, tens caminhado avante</p>
            </div>
              <?php foreach ($images as $image) { ?>
            <img class="col-xl-2 col-sm-2 " src="<?php echo  \App\Config\Config::url($image->getUri()) ?>" alt="">
            <?php } ?>
        </div> 
        
         

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>Salve Pátria, Pátria amada!<br>
                    Maranhão, Maranhão, berço de heróis<br>
                    Por divisa tens a glória<br>
                    Por nume, nossos avós</p>
            </div>
        </div>  

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>E na estrada esplandecente do futuro<br>
                    Fitas o olhar, altiva e sobranceira<br>
                    Dê-te o porvir as glórias do passado<br>
                    Seja de glória tua existência inteira</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-10">
                <p>Salve Pátria, Pátria amada!<br>
                    Maranhão, Maranhão, berço de heróis<br>
                    Por divisa tens a glória<br>
                    Por nume, nossos avós</p>
            </div>
        </div>
    </div>

</section>