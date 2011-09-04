<h2>Palestras</h2>
<table class="Palestras">
<?php foreach($palestras as $value) { ?>
<tr>
	<td class="PalestraInicio"><?php echo substr($value["Palestra"]["inicio"], 0, -3) ?></td>
	<td class="PalestraNome"><?php echo
		$this->Html->link(
			$value["Palestra"]["nome"],
			"/palestra/" . Inflector::slug(strtolower(
			$value['Palestra']['nome']),'-') . "/" . $value['Palestra']['id']) ?></td>
</tr>
<?php } ?>
</table>