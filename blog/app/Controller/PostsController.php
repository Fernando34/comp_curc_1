<?php
	class PostsController extends AppController{
		public $helpers = array ('Html','Form');
		public $components = array ("session");

		//action 
		///posts/index		
		public function index(){
			$todasAsPostagens = $this->Post->find('all');

			//jogar para view
			$this->set('post', $todasAsPostagens);
		}

		//post/view/3
		public function view($id = null){
			//setar o Post com id=3			
			$this->Post->id = $id;

			//procurar no banco o item com id=3
			$p = $this->Post->read();

			//enviando para a view os campos do item
			$this->set('post', $p);			
		}

		//post/add
		public function add(){
			//se for enviado um POST pegar os dados de fora e salvar no banco
			if($this->request->is('post')){
				
				$dadosDoFOrmulario = $this->request->data;
				
				//tentar salvar os dados no banco
				//se conseguir salvar, mostrar MENSAGEM e REDIRECIONAR para o INDEX
				if(this->Post-save($dadosDoFormulario)){
					//mostrar mensagem
					$this->session->setFlash("A postagem foi inserida com sucesso");
					//redirecionar para o index					
					$this->redirect(array('action' => 'index'));
				}	
			}
		}

		public function edit($id = null) {
    		$this->Post->id = $id;
    			if ($this->request->is('get')) {
        			$this->request->data = $this->Post->read();
    			} else {
        			if ($this->Post->save($this->request->data)) {
            			$this->Session->setFlash('Your post has been updated.');
            			$this->redirect(array('action' => 'index'));
        			}
    			}
		}

		function delete($id) {
    		if (!$this->request->is('post')) {
       			throw new MethodNotAllowedException();
    		}
    			if ($this->Post->delete($id)) {
        			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
       				$this->redirect(array('action' => 'index'));
   				}
		}


	}

