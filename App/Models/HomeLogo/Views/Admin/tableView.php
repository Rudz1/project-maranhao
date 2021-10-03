<section id="margin-table">
    <table class="table btntable-bordered">
      <thead>
        <tr>
            <th>Id</th>
            <th>Logo Image</th>    
            <th>Edit</th>
        </tr>
      </thead>
        <?php foreach($logos as $logo) {?>   
      <tbody>
        <tr>
            <td><?php echo $logo->getId()?></td>
            <td>
                <image class="img-small rounded" src="<?php echo \App\Config\Config::url($logo->getUri()) ?>"/>
            </td>     
            <td>
                 <a class="btn btn-primary" href="<?php echo App\Config\Config::url('/admin/home-logo-edit-form?id='.$logo->getId());?>">Editar</a>
            </td>
        </tr>
      </tbody>
        <?php }?>

    </table>
</section>