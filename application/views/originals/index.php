<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
	<tr>
		<td><strong>Texto</strong></td>
		<td><strong>Id</strong></td>
		<td><strong>Opções</strong></td>
	</tr>
<?php foreach($originals as $originals_item) { ?>
		
		<tr>
			<td><?php echo $originals_item['header']; ?></td>
			<td><?php echo $originals_item['id']; ?></td>
			<td>
				<a href="<?php echo site_url('originals/edit/'.$originals_item['id']); ?>">Editar</a> | 
				<a href="<?php echo site_url('originals/delete/'.$originals_item['id']); ?>" onClick="return confirm('Você tem certeza que quer deleter o usuário?')">Deletar</a>
			</td>
		</tr>
<?php } ?>
</table>
