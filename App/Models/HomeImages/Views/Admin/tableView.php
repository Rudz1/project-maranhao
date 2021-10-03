<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/home-images-add-form'); ?>">Adicionar</a>
   </div>
   <div class="table-responsive">
   <table class="table  table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Imagens</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($images as $image) { ?>
        <tr>
            <td><?php echo $image->getId()?></td>
            <td>
                <img class="img-small rounded" src="<?php echo \App\Config\Config::url($image->getUri()) ?>"/>
            </td>
            <td>
                 <a class="btn btn-primary btn-sm" href="<?php echo App\Config\Config::url('/admin/home-images-edit-form?id='.$image->getId());?>">Editar</a>
            </td>
             <td>
                 <a class="btn btn-danger btn-sm" href="<?php echo App\Config\Config::url('/admin/home-images-delete?id='.$image->getId());?>">Deletar</a>
            </td>

        </tr>
         <?php }?>
    </table>
     </div>
</section>