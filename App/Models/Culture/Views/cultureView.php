<section id="content_culture" class="container-fluid">
    <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-10 col-sm-10">
            <img class="image_top_culture" src="<?php echo App\Config\Config::url($banners[0]->getUri()) ?>" alt=""> 
        </div>
        <div class="col-xl-1"></div> 
    </div>
    
    <?php foreach($contents as $content) {?>
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-6"><h2><?php echo $content->getTitle() ?></h2></div>
        <div class="col-xl-3"></div>
    </div>
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-6 col-sm-6"><img class="image_culture" src="<?php echo $content->getUri() ?>" alt=""></div>
        <div class="col-xl-3"></div>
    </div>
    <div class="text_culture row">
        <div class="col-xl-3"></div>
        <div class="col-xl-6">
            <p><?php echo $content->getText() ?></p>
        </div>
        <div class="col-xl-3"></div>
    </div>
    <?php }?>
</section>