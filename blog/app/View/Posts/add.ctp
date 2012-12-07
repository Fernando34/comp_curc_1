<h1>Adicionando postagens</h1>
<?php
echo $this->Form->create('Post');
#gerando input 
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
#fechando o formulario e gerando o botão
echo $this->Form->end('Encaminhar');