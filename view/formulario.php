<form id="formulario" method="POST">

	<input type="hidden" name="id"/>
	
	<div>
		<input type="text" name="nome" maxlength="35"/>
		<label for="nome">Nome</label>
	</div>
	
	<div>
		<input type="text" name="sobrenome" maxlength="70"/>
		<label for="sobrenome">Sobrenome</label>
	</div>
	
	<div id="endereco">
		<div>
			<input type="text" name="logradouro" maxlength="180"/>
			<label for="logradouro">Logradouro</label>
		</div>
		
		<div>
			<input type="text" name="bairro" maxlength="150"/>
			<label for="bairro">Bairro</label>
		</div>
		
		<div>
			<input type="text" name="cidade" maxlength="150"/>
			<label for="cidade">Cidade</label>
		</div>
		
		<div>
			<input type="text" name="estado" maxlength="2"/>
			<label for="estado">Estado</label>
		</div>
	</div>

	<div>
		<button type="button" id="submit" name="acao" class="btn btn-acao" value="salvar">Salvar</button>
		<button type="reset" class="btn btn-reset">Cancelar</button>
	</div>

</form>