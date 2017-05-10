<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/edit/'.$users_item['id']); ?>
	<table>
		<tr>
			<td><label for="name">Nome</label></td>
			<td><input type="input" name="name" size="50"/ value="<?php echo $users_item['name']?>"></td>
		</tr>
		<tr>
			<td><label for="lastname">Sobrenome</label></td>
			<td><input type="input" name="lastname" size="50" value="<?php echo $users_item['lastname']?>"/></td>
		</tr>
		<tr>
			<td><label for="email">Email</label></td>
			<td><input type="input" name="email" size="50" value="<?php echo $users_item['email']?>"/></td>
		</tr>
		<tr>
			<td><label for="login">Login</label></td>
			<td><input type="input" name="login" size="50" value="<?php echo $users_item['login']?>"/></td>
		</tr>
		<tr>
			<td><label for="password">Senha</label></td>
			<td><input type="input" name="password" size="50" value="<?php echo $users_item['password']?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Finalizar edição do usuário"/></td>
		</tr>
	</table>
</form>