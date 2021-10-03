<section class="container">
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/admin-user-edit-save?id=1')?>">

    <div class="form-group">
        <label>Nome de Usuario</label>
        <input class="form-control" type="text" name="username">
    </div> 
    <div class="form-group">
        <label>Senha</label>
        <input class="form-control" type="password" name="password">
    </div> 
    <div class="form-group">
        <label>Confirme a Senha</label>
        <input class="form-control" type="password" name="confirm">
    </div> 
    
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Editar</button>
    </div>
</form>
</section>
