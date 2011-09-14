<?php
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	
	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
		$browser_version = $matched[1];
		$browser = 'ie';
	} elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
		$browser_version = $matched[1];
		$browser = 'opera';
	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version = $matched[1];
		$browser = 'firefox';
	} elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version = $matched[1];
		$browser = 'chrome';
	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version = $matched[1];
		$browser = 'safari';
	} else {
		// browser unknown
		$browser_version = 0;
		$browser= 'none';
	}

	echo $this->Html->docType('xhtml-trans') . PHP_EOL . '<html>' . PHP_EOL . '<head>' . PHP_EOL;
	echo $this->Html->charset() . PHP_EOL;
	echo ltrim($this->Html->css('korsakov/main')) . PHP_EOL;
	echo ltrim($this->Html->css('korsakov/menu')) . PHP_EOL;
	if ($browser == 'firefox')
		echo ltrim($this->Html->css('korsakov/firefox')) . PHP_EOL;
	echo $this->Html->meta('favicon.ico', '/cakephp/favicon.ico', array('type' => 'icon')) . PHP_EOL;

?>
<title><?php echo $title_for_layout; ?></title>
</head>
<body>
<div class="wraper">
<?php echo $this->element('menu') . PHP_EOL; ?>
<div id="top_left">&nbsp;</div>
<div class="middle_content"><?php echo $content_for_layout . PHP_EOL; ?></div>
<div id="footer"><?php echo $this->element('footer') . PHP_EOL; ?></div>
<?php // echo $this->element('footer', array('param'=>' - Passei parametro')); ?>
</div>
</body>
</html>