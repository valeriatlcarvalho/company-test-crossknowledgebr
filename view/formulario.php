<form id="cadastro" method="POST">
	<input type="hidden" name="id" id="id"/>
	
	<div>
		<input type="text" name="nome" id="nome" maxlength="35"/>
		<label for="nome">Nome</label>
	</div>
	
	<div>
		<input type="text" name="sobrenome" id="sobrenome" maxlength="70"/>
		<label for="sobrenome">Sobrenome</label>
	</div>
	
	<div id="endereco">
		<div>
			<input type="text" name="logradouro" id="logradouro" maxlength="180"/>
			<label for="logradouro">Logradouro</label>
		</div>
		
		<div>
			<input type="text" name="bairro" id="bairro" maxlength="150"/>
			<label for="bairro">Bairro</label>
		</div>
		
		<div>
			<input type="text" name="cidade" id="cidade" maxlength="150"/>
			<label for="cidade">Cidade</label>
		</div>
		
		<div>
			<input type="text" name="estado" id="estado" maxlength="2"/>
			<label for="estado">Estado</label>
		</div>
	</div>
	<div>
		<button type="submit" id="acao" name="acao" value="salvar">Salvar</button>
		<button type="reset">Cancelar</button>
	</div>
</form>