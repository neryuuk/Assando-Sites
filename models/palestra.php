<?php
class Palestra extends AppModel {
	public $name = 'Palestra';
	public $cacheQueries = true;
	public $order = array('Palestra.id' => 'ASC');
	public $displayField = 'nome';
	public $belongsTo = 'Palestrante';
}
?>