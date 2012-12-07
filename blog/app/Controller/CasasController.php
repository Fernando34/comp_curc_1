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
    if ($this->request->is('casa')) {
        $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash('Your post has been saved.');
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
    	if (!$this->request->is('casa')) {
        	throw new MethodNotAllowedException();
    	}
    	if ($this->Casa->delete($id)) {
        //    $this->Session->setFlash('Casa removida com sucesso');
        	$this->Session->setFlash('A casa: ' . $id . ' foi removida!');
        	$this->redirect(array('action' => 'index'));
    	}
	}	
	
	
	public function isAuthorized($user) {
    if (!parent::isAuthorized($user)) {
        if ($this->action === 'add') {
            // All registered users can add posts
            return true;
        }
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = $this->request->params['pass'][0];
            return $this->Post->isOwnedBy($postId, $user['id']);
        }
    }
    return false;
}

}
?>