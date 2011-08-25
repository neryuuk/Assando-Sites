<h2>Inscreva-se no evento</h2>
<form id="form_inscricao" method="post">
	<div class="form_fields">
		<label for="Nome">Nome :</label>
		<input name="Nome" type="text" class="form_field" value="" maxlength="50" />
	</div>
	<div class="form_fields">
		<label for="Email">E-mail :</label>
		<input name="Email" type="text" class="form_field" value="" maxlength="100" />
	</div>
	<div class="form_fields">
		<label for="Telefone">Telefone :</label>
		<input name="Telefone" type="text" class="form_field"  value="" maxlength="10" onkeydown="numberOnly()" />
	</div>
	<div class="form_fields">
		<label for="Endereco">Endere&ccedil;o :</label>
		<input name="Endereco" type="text" class="form_field"  value="" maxlength="100" />
	</div>
	<div id="form_submit">
		<input name="Inscrever" type="submit" value="inscreva-me" id="form_submit" />
	</div>
</form>