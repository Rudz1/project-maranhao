<!-- SLIDE -->
<section id="slide row">

    <div class="container col-12">
        <?php foreach ($banners as $banner) { ?>
        <div class="mySlides row">
            <img src="<?php echo App\Config\Config::url($banner->getUri()) ?>">
        </div>
        <?php } ?>

        <div class="caption-container row">
            <p class="col-12" id="caption"></p>
        </div>

        <div class="row ">
            <?php foreach ($banners as $banner) { ?>
            <div class="column">
                <img class="demo cursor" src="<?php echo App\Config\Config::url($banner->getUri()) ?>"  alt="<?php echo $banner->getPlaceName() ?>">
            </div>
             <?php } ?>
        </div>
    </div>

</section> 
<!-- CONTENT -->
<section id="content container-fluid">
    <?php foreach($contents as $content) { ?>
    <div class="text row container-fluid">
        <div class="col-xl-3"></div>
        <div class="col-xl-6">
            <h2><?php echo $content->getTitle()?></h2>
            <p><?php echo $content->getText() ?></p>
        </div>
        <div class="col-xl-3"></div>
    </div>

    <div class="row container-fluid">
        <div class="col-xl-3"></div>
        <div class="col-xl-6 col-sm-6">
            <iframe width="100%" height="315" src="<?php echo $content->getLink() ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-xl-3"></div>
    </div>
    <?php } ?>

</section>
