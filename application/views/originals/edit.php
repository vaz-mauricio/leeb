<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('originals/edit/'.$originals_item['id']); ?>
	<table>
		<tr>
			<td><label for="header">Título</label></td>
			<td><input type="input" name="header" size="50"/></td>
		</tr>
		<tr>
			<td><label for="body">Texto</label></td>
			<td><input type="input" name="body" size="50"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Finalizar edição do usuário"/></td>
		</tr>
	</table>
</form>