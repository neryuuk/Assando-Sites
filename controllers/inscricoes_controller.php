<?php
class InscricoesController extends AppController {
	public $name = 'Inscricoes';
	public $uses = array('Inscricao');

	public function inscrever() {
		$this->set('active', 'inscrever');
		$this->set('title_for_layout', 'Inscreva-se | Dia da comunidade alemã');

		if (!empty($this->data) && $this->Inscricao->save($this->data)) {
			$this->redirect('/obrigado');
		}
	}
}
?>