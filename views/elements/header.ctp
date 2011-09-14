<div style="clear: both; height: 0; margin: 0; padding: 0;">&nbsp;</div>
<div id="menu">
<ul class="dropdown">
<?php if (isset($active)) { ?>
	<li <?php if($active == 'sobre') echo 'class="active"'; ?>><?php echo $this->Html->link('sobre o evento', '/'); ?></li>
	<li <?php if($active == 'como') echo 'class="active"'; ?>><?php echo $this->Html->link('como chegar', '/como-chegar'); ?></li>
	<li <?php if($active == 'quem') echo 'class="active"'; ?>><?php echo $this->Html->link('quem somos', '/quem-somos'); ?></li>
	<li <?php if($active == 'inscrever') echo 'class="active"'; ?>><?php echo $this->Html->link('inscreva-se', '/inscreva-se'); ?></li>
	<li <?php if($active == 'palestra') echo 'class="active"'; ?>><?php echo $this->Html->link('palestras', '/palestras'); ?></li>
	<li <?php if($active == 'palestrante') echo 'class="active"'; ?>><?php echo $this->Html->link('palestrantes', '/palestrantes'); ?></li>
<?php } else { ?>
	<li><?php echo $this->Html->link('sobre o evento', '/'); ?></li>
	<li><?php echo $this->Html->link('como chegar', '/como-chegar'); ?></li>
	<li><?php echo $this->Html->link('quem somos', '/quem-somos'); ?></li>
	<li><?php echo $this->Html->link('inscreva-se', '/inscreva-se'); ?></li>
	<li><?php echo $this->Html->link('palestras', '/palestras'); ?></li>
	<li><?php echo $this->Html->link('palestrantes', '/palestrantes'); ?></li>
<?php } ?>
</ul>
</div>
<div style="clear: both; height: 0; margin: 0; padding: 0;">&nbsp;</div>