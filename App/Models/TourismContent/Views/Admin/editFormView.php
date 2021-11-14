<section class="container">
    <?php if (isset($message)) { ?>
        <div class="alert alert-danger">
            <?php echo $message ?>
        </div>
    <?php } ?>
    <form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/tourism-content-edit-save?id=' . $contents->getId()) ?>">

        <div class="form-group">
            <label>Titulo</label>
            <input class="form-control" type="text" value="<?php echo $contents->getTitle() ?>" name="title">
        </div> 
        <div class="form-group">
            <label>Texto</label>
            <textarea class="form-control" name="text"><?php echo $contents->getText() ?></textarea>
        </div> 
        <div class="form-group">
            <label>Link do Video</label>
            <input class="form-control" type="text" value="<?php echo $contents->getLink() ?>" name="link">
        </div> 

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </form>
</section>
