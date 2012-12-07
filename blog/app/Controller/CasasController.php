<?php
	class CasasController extends AppController{
		public $helpers = array ('Html','Form');
		public $components = array("Session");
		public $name = 'Casas';
	

	public function index() {
        $this->set('casas', $this->Casa->find('all'));
    }

    function view($id = null){
		$this->Casa->id = $id;
		$this->set('casa', $this->Casa->read()); 
	}

	public function add() {
        if ($this->request->is('post')) {
            if ($this->Casa->save($this->request->data)) {
                $this->Session->setFlash('Casa Inserida com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($id = null) {
    	$this->Casa->id = $id;
    	if ($this->request->is('get')) {
        	$this->request->data = $this->Casa->read();
    	} else {
        	if ($this->Casa->save($this->request->data)) {
            	$this->Session->setFlash('Dados Alterados com sucesso!');
            	$this->redirect(array('action' => 'index'));
        	}
    	}
	}
	public function delete($id) {
    	if (!$this->request->is('post')) {
        	throw new MethodNotAllowedException();
    	}
    	if ($this->Casa->delete($id)) {
        //    $this->Session->setFlash('Casa removida com sucesso');
        	$this->Session->setFlash('A casa: ' . $id . ' foi removida!');
        	$this->redirect(array('action' => 'index'));
    	}
	}	

}
?>