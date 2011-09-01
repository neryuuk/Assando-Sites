<h2>Inscreva-se no evento</h2>
<?php
	function newLine($value) {
		$replacee = "><";
		$replaceBy = ">\n<";
		return str_replace($replacee,$replaceBy,$value);
	}

	$formFields = array(
		$this->Form->create('Inscricao',array(
			'url' => array(
				'controller' => 'inscricoes',
				'action' => 'inscrever'))),
		$this->Form->input('nome', array(
			'error' => array(
				'notEmpty' => __('O Nome é obrigatório', true)),
			'label' => 'Nome :',
			'class' => 'form_field',
			'tabindex' => '110',
			'div' => array(
				'class' => 'form_fields'),
			'maxlength' => '50')),
//		$this->Form->error('nome'),
		$this->Form->input('email', array(
			'label' => 'E-mail :',
			'class' => 'form_field',
			'tabindex' => '120',
			'div' => array(
				'class' => 'form_fields'),
			'maxlength' => '100')),
//		$this->Form->error('email'),
		$this->Form->input('telefone', array(
			'label' => 'Telefone :',
			'class' => 'form_field',
			'tabindex' => '130',
			'div' => array(
				'class' => 'form_fields'),
			'maxlength' => '10')),
//		$this->Form->error('telefone'),
		$this->Form->input('endereco', array(
			'label' => 'Endereço :',
			'class' => 'form_field',
			'tabindex' => '140',
			'div' => array(
				'class' => 'form_fields'),
			'maxlength' => '100')),
//		$this->Form->error('endereco'),
		$this->Form->submit('inscreva-me', array(
			'class' => 'InscricaoInscreverFormSubmit',
			'tabindex' => '150',
			'div' => array(
				'class' => 'InscricaoInscreverFormSubmit'))));
		foreach($formFields as $value) {
			echo newLine($value) . PHP_EOL;
//			echo $value . PHP_EOL;
		}
		echo $this->Form->end();
?>