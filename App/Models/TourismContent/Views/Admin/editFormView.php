<section class="container">
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/tourism-content-edit-save?id='.$contents->getId())?>">

    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" type="text" placeholder="<?php echo $contents->getTitle() ?>" name="title">
    </div> 
    <div class="form-group">
        <label>Texto</label>
        <textarea class="form-control" name="text" rows="5" cols="10"></textarea>
    </div> 
    <div class="form-group">
        <label>Link do Video</label>
        <input class="form-control" type="text" placeholder="Pegue o link direto do iframe do YouTube" name="link">
    </div> 
    
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Editar</button>
    </div>
</form>
</section>
