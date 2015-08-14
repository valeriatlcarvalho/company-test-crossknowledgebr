<form method="post" action="<?= DIR."/ajax/cadastro.php" ?>">
	<input type="hidden" name="id" id="id"/>
	
	<div>
		<label>Nome</label>
		<input type="text" name="nome" id="nome" maxlength="35"/>
	</div>
	
	<div>
		<label>Sobrenome</label>
		<input type="text" name="sobrenome" id="sobrenome" maxlength="70"/>
	</div>
	
	<div id="endereco">
		<div>
			<label>Logradouro</label>
			<input type="text" name="logradouro" id="logradouro" maxlength="180"/>
		</div>
		
		<div>
			<label>Bairro</label>
			<input type="text" name="bairro" id="bairro" maxlength="150"/>
		</div>
		
		<div>
			<label>Cidade</label>
			<input type="text" name="cidade" id="cidade" maxlength="150"/>
		</div>
		
		<div>
			<label>Estado</label>
			<input type="text" name="estado" id="estado" maxlength="2"/>
		</div>
	</div>
	<div>
		<button type="button" name="acao" value="salvar">Salvar</button>
		<button type="reset">Cancelar</button>
	</div>
</form>