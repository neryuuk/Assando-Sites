<?php if ($existe) {?>
<h2><?php echo $palestra['Palestra']['nome'] ?></h2>
<p><em><?php echo
	$this->Html->link(
		$palestra['Palestrante']['nome'],
		"/palestrante/" . Inflector::slug(strtolower(
		$palestra['Palestrante']['nome']),'-') . "/" . $palestra['Palestrante']['id']) ?></em></p>
<p><?php echo $palestra['Palestra']['descricao'] ?></p>
<p><strong>Horário:</strong> Das <?php echo
substr($palestra['Palestra']['inicio'], 0, -3) . ' às ' .
substr($palestra['Palestra']['termino'], 0, -3) ?></p>
<?php } else {?>
<h2>Palestra não encontrada</h2><br />
<?php }?>
<p><a href="javascript:window.history.back()">&lt; Voltar</a></p>