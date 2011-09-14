<?php
echo $this->Session->flash('auth');
echo $this->Form->create('Usuario');
echo $this->Form->input('usuario');
echo $this->Form->input('senha');
echo $this->Form->end('Entrar');
?>