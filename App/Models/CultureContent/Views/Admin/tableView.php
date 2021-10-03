<section id="margin-table">
    <div class="form-group text-right">
       <a class="btn btn-success" href="<?php echo \App\Config\Config::url('admin/culture-content-add'); ?>">Adicionar</a>
   </div>
   <div class="table-responsive">
   <table class="table  table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Imagem</th>
            <th>Texto</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
         <?php foreach($contents as $content) { ?>
        <tr>
            <td><?php echo $content->getId(); ?></td>
            <td><?php echo $content->getTitle(); ?></td>
            <td>
                <img class="img-small rounded" src="<?php echo \App\Config\Config::url($content->getUri()); ?>" alt="alt"/>
            </td>
            <td class="text-justify" ><?php
            if(strlen($content->getText()) > 100){
                echo substr($content->getText(), 0, 100).'...';
            }else{
                echo $content->getText(); 
              }  ?></td>
            
            
            <td>
                 <a class="btn btn-primary btn-sm" href="<?php echo App\Config\Config::url('/admin/culture-content-edit?id='.$content->getId());?>">Editar</a>
            </td>
             <td>
                 <a class="btn btn-danger btn-sm" href="<?php echo App\Config\Config::url('/admin/culture-content-delete?id='.$content->getId());?>">Deletar</a>
            </td>

        </tr>
         <?php }?>
    </table>
     </div>
</section>