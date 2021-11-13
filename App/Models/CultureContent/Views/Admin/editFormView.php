<section class="container">
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/culture-content-edit-save?id='.$contents->getId())?>">

    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" type="text" value="<?php echo $contents->getTitle() ?>" name="title">
    </div>
    
    <div class="form-group">
        <input class="form-control-file" type="file" name="image">
    </div>      
 
    <div class="form-group">
        <label>Texto</label>
        <textarea class="form-control" name="text" rows="5" cols="10"><?php echo $contents->getText() ?></textarea>
    </div> 
    
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Editar</button>
    </div>
</form>
</section>
