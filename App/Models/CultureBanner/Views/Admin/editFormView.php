
<section id="form">
    <?php if (isset($message)) { ?>
        <div class="alert alert-danger">
            <?php echo $message ?>
        </div>
    <?php } ?>
    <form class="form" method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/culture-banner-edit-save?id=' . $banners->getId()) ?>">
        <div class="form-group">
            <input class="form-control-file" type="file" name="banner_image">
        </div>      
        <div>
            <button class="btn btn-primary" type="submit">Editar Banner</button>
        </div>
    </form>
</section>