<form id="formulario" method="POST">

	<input type="hidden" name="id"/>

	<div class="group-button">
		<button type="button" id="submit" name="acao" class="salvar" value="salvar">Salvar</button>
		<button type="reset" class="btn btn-reset">Cancelar</button>
	</div>
	
	<div class="group">
		<label for="nome">Nome</label>
		<input type="text" name="nome" maxlength="35"/>
	</div>
	
	<div class="group">
		<label for="sobrenome">Sobrenome</label>
		<input type="text" name="sobrenome" maxlength="70"/>
	</div>
	
	<div id="endereco">
		<div class="group">
			<label for="logradouro">Logradouro</label>
			<input type="text" name="logradouro" maxlength="180"/>
		</div>
		
		<div class="group">
			<label for="bairro">Bairro</label>
			<input type="text" name="bairro" maxlength="150"/>
		</div>
		
		<div class="group">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" maxlength="150"/>
		</div>
		
		<div class="group">
			<label for="estado">Estado</label>
			<input type="text" name="estado" maxlength="2"/>
		</div>
	</div>

</form>