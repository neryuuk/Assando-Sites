<?php
class Palestra extends AppModel {
	public $name = 'Palestra';
	public $cacheQueries = true;
	public $order = array('created' => 'DESC');
	public $displayField = 'nome';
	public $belongsTo = 'Palestrante';
}
?>