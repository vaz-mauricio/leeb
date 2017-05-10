<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
	<tr>
		<td><strong>Usuário</strong></td>
		<td><strong>Id</strong></td>
		<td><strong>Opções</strong></td>
	</tr>
<?php foreach($users as $users_item) { ?>
		
		<tr>
			<td><?php echo $users_item['name']; ?></td>
			<td><?php echo $users_item['id']; ?></td>
			<td>
				<a href="<?php echo site_url('users/edit/'.$users_item['id']); ?>">Editar</a> | 
				<a href="<?php echo site_url('users/delete/'.$users_item['id']); ?>" onClick="return confirm('Você tem certeza que quer deleter o usuário?')">Deletar</a>
			</td>
		</tr>
<?php } ?>
</table>
