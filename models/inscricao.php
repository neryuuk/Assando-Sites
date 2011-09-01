<?php
class Inscricao extends AppModel {
	public $name = 'Inscricao';
	public $useTable = 'inscricoes';
	public $cacheQueries = true;
	public $order = array('created' => 'DESC');
	public $displayField = 'nome';
	public $validate = array(
		'nome' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notEmpty',
			'message' => 'O Nome � obrigat�rio'
		),
		'email' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notEmpty',
				'message' => 'O E-mail � obrigat�rio'
			),
			array(
				'rule' => 'email',
				'message' => 'E-mail inv�lido'
			),
			array(
				'rule' => 'isUnique',
				'message' => 'E-mail j� cadastrado'
			)
		),
		'telefone' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notEmpty',
				'message' => 'O Telefone � obrigat�rio'
			),
			array(
				'rule' => 'numeric',
				'message' => 'Telefone inv�lido'
			)
		),
		'endereco' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notEmpty',
			'message' => 'O Endere�o � obrigat�rio'
		)
	);
}
?>