<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/banner-tourism-add'); ?>">Adicionar</a>
   </div>
   <div class="table-responsive">
   <table class="table  table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Turismo Banner Imagem</th>
            <th>Local</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($banners as $banner) { ?>
        <tr>
            <td><?php echo $banner->getId()?></td>
            <td>
                <img class="img-small rounded" src="<?php echo \App\Config\Config::url($banner->getUri()) ?>"/>
            </td>
            <td><?php echo $banner->getPlaceName()?></td>
            <td>
                 <a class="btn btn-primary btn-sm" href="<?php echo App\Config\Config::url('/admin/banner-tourism-edit?id='.$banner->getId());?>">Editar</a>
            </td>
             <td>
                 <a class="btn btn-danger btn-sm" href="<?php echo App\Config\Config::url('/admin/banner-tourism-delete?id='.$banner->getId());?>">Deletar</a>
            </td>

        </tr>
         <?php }?>
    </table>
     </div>
</section>