<?php
    @$id = (int) $_GET["id"];
    @$acao = $_GET["acao"];
    
    if($id){
        $editora = consultar("editora", " id_editora = $id");
        
        $txt_editora = $editora[0]["editora"];
        $txt_ativo = $editora[0]["ativo_editora"];
        
    }
?>

<h1>CADASTRO DE EDITORAS</h1>
		<div class="cx-form">
		<div class="cx-pd">			

<form action="op/op_editora.php" method="post">
		 
	
  <label>
	<strong>Título da Editora</strong>
    <input type="text" name="txt_editora" id="txt_editora" value="<?php echo @$txt_editora ?>" size="110">
  </label>
  
<label>
	<strong>Ativo</strong>
	<select name="txt_ativo" class="tm3">
		<option value="S" >Sim</option>
		<option value="N" >Não</option>
  </select>
 
</label>

	
		<label>
		<div class="cx-but">
			<input type="hidden" name ="id" value="<?php echo @$id ?>">							
			<input type="hidden" name ="acao" value="<?php echo ($acao!='')?$acao:'Cadastrar' ?>">										
			<input type="submit"  value = "<?php echo ($acao!='')?$acao:'Cadastrar' ?>" class="but" >	
		</div>
		</label>
</form>

		</div>
		</div>		