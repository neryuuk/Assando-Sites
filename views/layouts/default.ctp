<?php echo $this->Html->docType('xhtml-trans') . PHP_EOL; ?>
<html>
<head>
<?php
	echo $this->Html->charset() . PHP_EOL;
	echo ltrim($this->Html->css('main')) . PHP_EOL;
	echo $this->Html->meta('favicon.ico', './favicon.ico', array('type' => 'icon')) . PHP_EOL;
?>
<title><?php echo $title_for_layout; ?></title>
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