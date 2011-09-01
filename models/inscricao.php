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
			'message' => 'O Nome é obrigatório'
		),
		'email' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notEmpty',
				'message' => 'O E-mail é obrigatório'
			),
			array(
				'rule' => 'email',
				'message' => 'E-mail inválido'
			),
			array(
				'rule' => 'isUnique',
				'message' => 'E-mail já cadastrado'
			)
		),
		'telefone' => array(
			array(
				'allowEmpty' => false,
				'required' => true,
				'rule' => 'notEmpty',
				'message' => 'O Telefone é obrigatório'
			),
			array(
				'rule' => 'numeric',
				'message' => 'Telefone inválido'
			)
		),
		'endereco' => array(
			'allowEmpty' => false,
			'required' => true,
			'rule' => 'notEmpty',
			'message' => 'O Endereço é obrigatório'
		)
	);
}
?>