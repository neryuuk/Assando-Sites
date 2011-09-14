<?php
class PalestrantesController extends AppController {
	public $name = 'Palestrantes';

	public function index() {
		$this->set('active', 'palestrante');
		$this->set('title_for_layout', 'Palestrantes | Dia da comunidade alemã');

		$palestrantes = $this->Palestrante->find('all',array(
			'order' => 'Palestrante.nome ASC')
		);
		$this->set('palestrantes', $palestrantes);
	}
	public function adicionar() {
		if (!empty($this->data) && $this->Palestrante->save($this->data)) {
			$this->redirect('/obrigado');
		}
	}
	public function palestrante($id, $nome) {
		$this->set('active', 'palestrante');
		$this->Palestrante->order = 'Palestrante.id ASC';
		if ($this->Palestrante->read()) {
			$palestrante = $this->Palestrante->read();
			$slugNome = Inflector::slug(strtolower($palestrante['Palestrante']['nome']),'-');
			if ($slugNome == $nome) {
				$this->set('existe', true);
				$this->set('palestrante', $palestrante);
			} else {
				$this->redirect("/palestrante/$slugNome/" . $palestrante['Palestrante']['id']);
			}
		} else {
			$this->set('existe', false);
		}
		$title = 'Palestrante: ' . $palestrante['Palestrante']['nome'] . ' | Dia da comunidade alemã';
		$this->set('title_for_layout', $title);
	}
}
?>