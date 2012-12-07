
<div class="page-header">
	<h1>Casas</h1>
</div>
<p>
	<?php echo $this->Html->link("Nova Casa",
		array('controller' => 'Casas', 'action' => 'add'),
		array('class' => 'btn btn-success'));
	?>
</p>

<table class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Endereço</th>
			<th>Cor</th>
			<th>Proprietario</th>
			<th>Criado</th>
			<th>Atualizado</th>
			<th colspan="3">Ações</th>
		</tr>
	</thead>	
	<tbody>
	<?php foreach ($casas as $casa): ?>
		<tr>
			<td><?php echo $casa["Casa"]["id"]; ?></td>
			<td><?php echo $casa["Casa"]["endereco"]; ?></td>
			<td><?php echo $casa["Casa"]["cor"]; ?></td>
			<td><?php echo $casa["Casa"]["proprietario"]; ?></td>
			<td><?php echo $casa["Casa"]["created"]; ?></td>
			<td><?php echo $casa["Casa"]["modified"]; ?></td>
			<td>	
				<?php echo $this->Html->link("Visualizar",
					array('controller' => 'casas', 'action' => 'view',
					$casa["Casa"]["id"]),
					array('class' => 'btn')); 
				?>
				
				<?php echo $this->Html->link("Editar",
					array('controller' => 'casas', 'action' => 'edit',
					$casa["Casa"]["id"]),
					array('class' => 'btn btn-primary'));
				?> 	
				
				<?php echo $this->Form->postLink("Remover",
					array('controller' => 'casas', 'action' => 'delete',
					$casa["Casa"]["id"]),
					array('class' => 'btn btn-danger')); 
				?>
        </td>
			</td>		
		</tr>
	<?php endforeach; ?>
	
	</tbody>

</table>

