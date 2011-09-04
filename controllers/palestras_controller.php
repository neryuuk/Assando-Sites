<?php
class PalestrasController extends AppController {
	public $name = 'Palestras';

	public function index() {
		$palestras = $this->Palestra->find('all',array(
			'order' => 'Palestra.inicio ASC')
		);
		$this->set('palestras', $palestras);
	}
	public function adicionar() {
		if (!empty($this->data) && $this->Palestra->save($this->data)) {
			$this->redirect('/obrigado');
		}
	}
	public function palestra($id, $nome) {
		$this->Palestra->order = 'Palestra.id ASC';
		if ($this->Palestra->read()) {
			$palestra = $this->Palestra->read();
			$slugNome = Inflector::slug(strtolower($palestra['Palestra']['nome']),'-');
			if ($slugNome == $nome) {
				$this->set('existe', true);
				$this->set('palestra', $palestra);
			} else {
				$this->redirect("/palestra/$slugNome/" . $palestra['Palestra']['id']);
			}
		} else {
			$this->set('existe', false);
		}
	}
}
?>