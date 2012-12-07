<h1>Adicionando Casas</h1>
<?php
//criando o formulario atraves do ajudante form
echo $this->Form->create('Casa');
echo $this->Form->input('endereco');
echo $this->Form->input('cor');
echo $this->Form->input('proprietario');
// fechando o formulario e gerando o botao submit
echo $this->Form->end('Salvar');
?>