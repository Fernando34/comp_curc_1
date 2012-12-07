<?php
	class HelloController extends AppController{
		
		//action 
		//hello/index
		public function index(){
			//echo "Hello Word";
			
			//enviando o conteudo da variavel para a VIEW
			$nomeCompleto = "Fernando Santin";
			$this->set('nome', $nomeCompleto);
		}	

		//hello/sobremim
		public function sobremim(){
	
		}

		//hello/contato
		public function contato(){
	
		}
	
		//hello/teste
		public function teste(){
		
		}

	}
?>
