<section id="form">
<form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/footer-contact-edit-save?id='.$contact->getId())?>">
    <div class="form-group">
        <label>Endereço</label>
        <input class="form-control" type="text" name="address" value="<?php echo $contact->getAddress() ?>">
    </div>      
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $contact->getEmail() ?>">
    </div>      
    <div class="form-group">
        <label>Telefone</label>
        <input class="form-control" type="tel" name="telephone" value="<?php echo $contact->getTelephone() ?>">
    </div>      
    <div>
        <button class="btn btn-primary" type="submit">Editar Contato</button>
    </div>
</form>
</section>