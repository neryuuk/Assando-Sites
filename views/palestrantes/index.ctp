<h2>Palestrantes</h2>
<div>
<?php foreach($palestrantes as $value) { ?>
	<p><?php echo
		$this->Html->link(
			$value['Palestrante']['nome'],
			"/palestrante/" . Inflector::slug(strtolower(
			$value['Palestrante']['nome']),'-') . "/" . $value['Palestrante']['id']) ?></p>
<?php } ?>
</div>