<section id="margin-table">
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Banner</th>
            <th>Editar</th>
        </tr>
         <?php foreach($banners as $banner) { ?>
        <tr>
            <td><?php echo $banner->getId()?></td>
            <td>
                <image class="img-small rounded" src="<?php echo \App\Config\Config::url($banner->getUri()) ?>"/>
            </td>     
            <td>
                 <a class="btn btn-primary" href="<?php echo App\Config\Config::url('/admin/culture-banner-edit-form?id='.$banner->getId());?>">Editar</a>
            </td>   
        </tr>
         <?php }?>
    </table>
</section>