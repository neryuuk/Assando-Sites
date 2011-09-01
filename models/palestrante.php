<?php
class Palestrante extends AppModel {
	public $name = 'Palestrante';
	public $cacheQueries = true;
	public $order = array('created' => 'DESC');
	public $displayField = 'nome';
	public $hasMany = 'Palestra';
}
?>