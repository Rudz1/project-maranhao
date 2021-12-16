<section class="container">

    <?php if (isset($message)) { ?>
        <div class="alert alert-danger">
            <?php echo $message ?>
        </div>
    <?php } ?>

    <form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/footer-pages-add-save') ?>">

        <div class="form-group">
            <label>Nome da pagina</label>
            <input class="form-control" type="text" name="page">
        </div>
        <div class="form-group">
            <label>Link</label>
            <input class="form-control" type="text" name="link">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </form>
</section>
