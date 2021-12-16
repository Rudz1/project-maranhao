<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/footer-pages-add'); ?>">Adicionar</a>
   </div>
   <div class="table-responsive">
   <table class="table  table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Nome da pagina</th>
            <th>Link</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($pages as $page) { ?>
        <tr>
            <td><?php echo $page->getId(); ?></td>
            <td><?php echo $page->getPage(); ?></td>         
            <td><?php echo $page->getLink(); ?></td>         
            
            <td>
                 <a class="btn btn-primary btn-sm" href="<?php echo App\Config\Config::url('/admin/footer-pages-edit?id='.$page->getId());?>">Editar</a>
            </td>
             <td>
                 <a class="btn btn-danger btn-sm" href="<?php echo App\Config\Config::url('/admin/footer-pages-delete?id='.$page->getId());?>">Deletar</a>
            </td>

        </tr>
         <?php }?>
    </table>
     </div>
</section>