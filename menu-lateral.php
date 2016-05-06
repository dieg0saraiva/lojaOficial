
<div class="lado-esq">
        <h1>Categorias</h1>

        
        <?php 
            $categorias = consultar("categoria","ativo_categoria='S' ");
            foreach ($categorias as $categoria){
                $id_cat = $categoria("id_categoria");
        ?>
        <ul>
            <h2><a href="<?php echo URL_BASE ?>categoria"><?php echo $categoria["categoria"]?> </a></h2>
            
            <li><a href="<?php echo URL_BASE ?>subcategorias">Samsung </a></li>

        </ul>
	<?php } ?>	
		
	
	</div>