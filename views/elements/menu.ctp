<div style="clear: both; height: 0; margin: 0; padding: 0;">&nbsp;</div>
<div id="menu">
<ul class="dropdown">
<?php
	$menu = array(
		'/' => 'sobre o evento',
		'como-chegar' => 'como chegar',
		'quem-somos' => 'quem-somos',
		'inscreva-se' => 'inscreva-se',
		'palestras' => 'palestras',
		'palestrantes' => 'palestrantes'
	);
?>
	<li><?php echo $this->Html->link('sobre o evento', '/'); ?></li>
	<li><?php echo $this->Html->link('como chegar', '/como-chegar'); ?></li>
	<li><?php echo $this->Html->link('quem somos', '/quem-somos'); ?></li>
	<li><?php echo $this->Html->link('inscreva-se', '/inscreva-se'); ?></li>
	<li><?php echo $this->Html->link('palestras', '/palestras'); ?></li>
	<li><?php echo $this->Html->link('palestrantes', '/palestrantes'); ?></li>
</ul>
</div>
<div style="clear: both; height: 0; margin: 0; padding: 0;">&nbsp;</div>