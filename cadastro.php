<div class="conteudo margin-topo">
	<!-- menu lateral-->
	<?php include"menu-lateral.php"?>
	
	<div class="lado-dir">
	<title class="migalha">Loja Virtual / Cadastro</title>
	<div class="base-cadastro">
		
		<form action="op_cliente.php" method="post">
		<h1><span>Dados para acesso</span></h1>	
			<label>
				<strong>Nome:</strong>
				<input type="text" name="txt_cliente" value="">
			</label>
			<label class="fl">
				<strong>Senha:</strong>
				<input type="text" name="txt_senha" value="">
			</label>
			<label class="fl">
				<strong>Email:</strong>
				<input type="text" name="txt_email" value="">
			</label>
			
			
			
			<div class="limpar">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			</div>
			
			
			<h1><span>Dados pessoais</span></h1>
			<label>
				<strong>Endereço:</strong>
				<input type="text" name="txt_endereco" value="">
			</label>
			<label>
				<strong>Bairro:</strong>
				<input type="text" name="txt_bairro" value="">
			</label>
			
			<label class="fl">
				<strong>CEP:</strong>
				<input type="text" name="txt_cep" value="">
			</label>
			<label class="fl">
				<strong>Cidade:</strong>
				<input type="text" name="txt_cidade" value="">
			</label>
			
			<label class="fl">
				<strong>Telefone:</strong>
				<input type="text" name="txt_fone" value="">
			</label>
			<label class="fl">
				<strong>UF:</strong>
				<input type="text" name="txt_uf" value="">
			</label>
			
			<label>
				<!--<input type="text" name="txt_uf" value="">-->
				<input type="submit" class="cadastrar">
			</label>
		</form>
	</div>
	</div>
</div>