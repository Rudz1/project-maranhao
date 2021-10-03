
<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/tourism-content-add'); ?>">Adicionar</a>
   </div>
   <div class="table-responsive">
   <table class="table  table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Texto</th>
            <th>Link</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($contents as $content) { ?>
        <tr>
            <td><?php echo $content->getId(); ?></td>
            <td><?php echo $content->getTitle(); ?></td>
            <td class="text-justify" >
            <?php
            if(strlen($content->getText()) > 100){
                echo substr($content->getText(), 0, 100).'...';
            }else{
                echo $content->getText();
            } ?>
            </td>
            
            <td>
            <?php
            if(strlen($content->getLink()) > 50){
                echo substr($content->getLink(), 0, 50).'...';
            }else{
                echo $content->getLink();     
            } ?>
            </td>
            
            <td>
                 <a class="btn btn-primary btn-sm" href="<?php echo App\Config\Config::url('/admin/tourism-content-edit?id='.$content->getId());?>">Editar</a>
            </td>
             <td>
                 <a class="btn btn-danger btn-sm" href="<?php echo App\Config\Config::url('/admin/tourism-content-delete?id='.$content->getId());?>">Deletar</a>
            </td>

        </tr>
         <?php }?>
    </table>
     </div>
</section>