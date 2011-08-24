<?php $this->pageTitle = 'Dia da Comunidade Alemã'; ?>
<?php echo $this->Html->docType('xhtml-trans') . PHP_EOL; ?>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<?php echo ltrim($this->Html->css('main')); ?>
<?php echo $this->Html->meta('favicon.ico', './favicon.ico', array('type' => 'icon')) . PHP_EOL;?>
<title><?php echo $title_for_layout . PHP_EOL; ?></title>
</head>
<body>
<div class="wraper">
	<?php echo $this->element('menu') . PHP_EOL; ?>
	<p id="top_left">&nbsp;</p>
	<div class="middle_content"><?php echo $content_for_layout . PHP_EOL; ?></div>
	<div id="footer"><?php echo $this->element('footer') . PHP_EOL; ?></div>
	<?php // echo $this->element('footer', array('param'=>' - Passei parametro')); ?>
</div>
</body>
</html>