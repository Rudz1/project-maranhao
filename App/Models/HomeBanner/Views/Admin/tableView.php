<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/home-banner-add-form'); ?>">Adicionar</a>
   </div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Home Banner Imagem</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($banners as $banner) { ?>
        <tr>
            <td><?php echo $banner->getId()?></td>
            <td>
                <image class="img-small rounded" src="<?php echo \App\Config\Config::url($banner->getUri()) ?>"/>
            </td>     
            <td>
                 <a class="btn btn-primary" href="<?php echo App\Config\Config::url('/admin/home-banner-edit-form?id='.$banner->getId());?>">Editar</a>
            </td>   
            <td>
                 <a class="btn btn-danger" href="<?php echo App\Config\Config::url('/admin/home-banner-delete?id='.$banner->getId());?>">Deletar</a>
            </td>   
        </tr>
         <?php }?>
    </table>
</section>