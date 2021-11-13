<section id="margin-table">
    <table class="table btntable-bordered">
      <thead>
        <tr>
            <th>Id</th>
            <th>Address</th>    
            <th>Email</th>    
            <th>Telephone</th>    
            <th>Edit</th>
        </tr>
      </thead>
        <?php foreach($contacts as $contact) {?>   
      <tbody>
        <tr>
            <td><?php echo $contact->getId()?></td>     
            <td><?php echo $contact->getAddress()?></td>     
            <td><?php echo $contact->getEmail()?></td>     
            <td><?php echo $contact->getTelephone()?></td>     
            <td>
                 <a class="btn btn-primary" href="<?php echo App\Config\Config::url('/admin/footer-contact-edit-form?id='.$contact->getId());?>">Editar</a>
            </td>
        </tr>
      </tbody>
        <?php }?>

    </table>
</section>