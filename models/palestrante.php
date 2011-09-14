<?php
class Palestrante extends AppModel {
	public $name = 'Palestrante';
	public $cacheQueries = true;
	public $order = array('Palestrante.id' => 'ASC');
	public $displayField = 'nome';
	public $hasMany = 'Palestra';
}
?>