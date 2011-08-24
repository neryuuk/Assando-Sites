<?php
class Inscricao extends AppModel {
	public $name = 'Inscricao';
	public $useTable = 'inscricoes';
	public $cacheQueries = true;
	public $order = array('created' => 'DESC');
	public $displayField = 'nome';
}
?>