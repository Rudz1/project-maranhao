<section id="form">
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/home-logo-edit-save?id='.$logos->getId())?>">
    <div class="form-group">
        <input class="form-control-file" type="file" name="logo_image">
    </div>      
    <div>
        <button class="btn btn-primary" type="submit">Editar Logo</button>
    </div>
</form>
</section>