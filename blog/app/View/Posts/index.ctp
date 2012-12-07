<!--<pre>
	<?php print_r($posts);?>
</pre>-->

<div class="page-header">
<h1>Listando as Postagens</h1>

<p>
	<?php echo $this->html->link("Novo Item", array('controller' => 'posts', 'action' => 'add'), 
						  array('class' => 'bnt btn-success')); ?>

</p>



<table class="table table-hover">
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Título</th>
        <th>Texto</th>
	<th>Criado em</th>
	<th>Atualizado em</th>
	<th colspan="3">Acoes</th>
    </tr>

    </thead>
		<tbody>
			<?php foreach($posts as $post):?>
				<tr>
					<td><?php echo $post["Post"]["id"]; ?> </td>
					<td><?php echo $post["Post"]["title"]; ?> </td>
					<td><?php echo $post["Post"]["body"]; ?> </td>
					<td><?php echo $post["Post"]["created"]; ?> </td>
					<td><?php echo $post["Post"]["modified"]; ?> </td>
					<td>
					      <!--<a href="/post/view/id">Visualizar</a>-->
					      <?php echo $this->html->link("Visualizar", array('controller' => 'posts', 'action' => 'view',
					      $post["Post"]["id"])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	
</table>


<!--Editando-->
<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
                <th>Action</th>
        <th>Created</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                </td>
                <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?')
            )?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
<?php endforeach; ?>

</table>

<!-- Excluindo -->
<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
                <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
        <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
        </td>
        <td>
        <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $post['Post']['id']),
            array('confirm' => 'Are you sure?'));
        ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>


