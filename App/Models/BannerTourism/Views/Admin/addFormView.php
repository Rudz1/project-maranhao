<section class="container">
    <?php if(isset($message)) {?>
    <div class="alert alert-danger">
        <?php echo $message ?>
    </div>
    <?php } ?>
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/banner-tourism-add-save')?>">
    <div class="form-group">
        <label>Imagem</label>
        <input class="form-control-file" type="file" name="image">
    </div> 
    <div class="form-group">
        <label>Nome do Local</label>
        <input class="form-control" type="text" name="place_name">
    </div> 
    
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </div>
</form>
</section>
