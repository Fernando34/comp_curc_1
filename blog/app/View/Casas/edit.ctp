<h1>Alterando Casas</h1>
<?php
echo $this->Form->create('Casa');
echo $this->Form->input('endereco');
echo $this->Form->input('cor');
echo $this->Form->input('proprietario');
echo $this->Form->end('Editar');
?>