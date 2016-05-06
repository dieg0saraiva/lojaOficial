<?php
    @$id = (int) $_GET["id"];
    @$acao = $_GET["acao"];
    
    if($id){
        $produto = consultar("produto", " id_produto = $id");
        
        $id_categoria       = $produto[0]["id_categoria"];
        $id_subcategoria    = $produto[0]["id_subcategoria"];
        $id_editora         = $produto[0]["id_editora"];
        $txt_produto        = $produto[0]["produto"];
        $txt_preco_alto     = $produto[0]["preco_alto"];
        $txt_preco          = $produto[0]["preco"];
        $txt_descricao      = $produto[0]["descricao"];
        $txt_detalhes       = $produto[0]["detalhes"];
        $txt_imagem         = $produto[0]["imagem"];
        $txt_destaque       = $produto[0]["destaque"];
        $txt_ativo          = $produto[0]["ativo_produto"];
        
    }
?>

<h1>CADASTRO DE PRODUTOS</h1>
		<div class="cx-form">
		<div class="cx-pd">		

<form action="op/op_produto.php" method="post">
		
<label class="esq">
	<strong>Categoria</strong>
    <select name="txt_id_categoria">
	<option>Selecione uma categoria</option>
                <?php
                    $categorias = consultar("categoria");
                    foreach ($categorias as $categoria){
                        $cod_categoria = $categoria["id_categoria"];
                        
                        if($cod_categoria == @$id_categoria)
                                $selecionado = "selected";
                        else 
                            $selecionado = "";
                        
                        echo "<option value=$cod_categoria $selecionado>$categoria[categoria]</option>";
                    }
                ?>
      </select>
  </label>
 
<label class="dir">
	<strong>Subategoria</strong>
    <select name="txt_id_subcategoria">
	<option>Selecione uma Subcategoria</option>
                <?php
                    $subcategorias = consultar("subcategoria");
                    foreach ($subcategorias as $subcategoria){
                        $cod_subcategoria = $subcategoria["id_subcategoria"];
                        
                        if($cod_subcategoria == @$id_subcategoria)
                                $selecionado = "selected";
                        else 
                            $selecionado = "";
                        
                        echo "<option value=$cod_subcategoria $selecionado>$subcategoria[subcategoria]</option>";
                    }
                ?>
      </select>
  </label>
 
<label class="esq">
	<strong>Editora</strong>
    <select name="txt_id_editora">
	<option>Selecione uma editora</option>
                <?php
                    $editoras = consultar("editora");
                    foreach ($editoras as $editora){
                        $cod_editora = $editora["id_editora"];
                        
                        if($cod_editora == @$id_editora)
                                $selecionado = "selected";
                        else 
                            $selecionado = "";
                        
                        echo "<option value=$cod_editora $selecionado>$editora[editora]</option>";
                    }
                ?>
      </select>
  </label>
   <label class="dir">
	<strong>Ativo</strong>
	<select name="txt_ativo" class="tm3">
		<option value="S" >Sim</option>
		<option value="N" >Não</option>
	</select>
</label> 

     <label class="dir">
	<strong>Destaque</strong>
	<select name="txt_destaque" class="tm3">
		<option value="S" >Sim</option>
		<option value="N" >Não</option>
	</select>
</label> 
	
  <label>
	<strong>Título do produto</strong>
    <input type="text" name="txt_titulo_produto" id="txt_titulo_produto" value="<?php echo @$txt_produto ?>" size="109"/>
  </label>
  
   <label>
	<strong>Buscar imagem</strong>
    <input type="file" name="txt_imagem" id="txt_imagem" value="" size="109"/>
  </label>
  
   <label>
	<strong>Imagem</strong>
    <input type="text" name="txt_imagem_produto" id="txt_imagem_produto" value="" size="109"/>
  </label>
  <label class="esq">
	<strong>Preço anterior</strong>
    <input type="text" name="txt_preco_alto" id="txt_preco_alto" value="<?php echo @$txt_preco_alto ?>" size="109" />
  </label>
   <label class="dir">
	<strong>Valor atual</strong>
    <input type="text" name="txt_preco" id="txt_preco" value="<?php echo @$txt_preco ?>" size="109" />
  </label>  

	
<label>
        <strong>Descrição</strong>
        <textarea  name="txt_descricao" id="txt_descricao"  class="ckeditor" rows="15" cols="70"> <?php echo @$txt_descricao ?>  </textarea>
</label>

<label>
        <strong>Detalhes</strong>
        <textarea  name="txt_detalhes" id="txt_detalhes"  class="ckeditor" rows="15" cols="70"> <?php echo @$txt_detalhes ?>  </textarea>
</label>

	
		<label>
		<div  class="cx-but">
			<input type="hidden" name ="id" value="<?php echo @$id ?>">							
			<input type="hidden" name ="acao" value="<?php echo ($acao!='')?$acao:'Cadastrar' ?>">										
			<input type="submit" name= "logar" id="logar" value = "<?php echo ($acao!='')?$acao:'Cadastrar' ?> " class="but" >		
		</div>				
		</label>
</form>

		</div>
		</div>