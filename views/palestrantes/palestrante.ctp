<?php if ($existe) {?>
<h2><?php echo $palestrante['Palestrante']['nome'] ?></h2>
<p><em><?php echo
	$this->Html->link(
		$palestrante['Palestrante']['site'],
		$palestrante['Palestrante']['site'],
		array('target' => '_blank')) ?></em></p>
<p><?php echo $palestrante['Palestrante']['descricao'] ?></p>
<h6>Palestras</h6>
<table class="Palestras">
<?php foreach($palestrante['Palestra'] as $palestras) { ?>
<tr>
	<td class="PalestraInicio"><?php echo substr($palestras["inicio"], 0, -3) ?></td>
	<td class="PalestraNome"><?php echo
		$this->Html->link(
			$palestras["nome"],
			"/palestra/" . Inflector::slug(strtolower(
			$palestras['nome']),'-') . "/" . $palestras['id']) ?></td>
</tr>
<?php } ?>
</table>
<?php } else {?>
<h2>Palestrante não encontrado</h2><br />
<?php }?>
<p><a href="javascript:window.history.back()">&lt; Voltar</a></p>