<div class="center font-default">
	<div class="container-login">
		<?php if(!$this->session->userdata('logged in')) { ?>
		<h1>Login</h1>
		<?php echo form_open('login/authenticate');?>
			<div class="login-box">
				<p class="left">Usuário</p>
				<div class="col-xs-5">
				<input type="text" name="login" id="login" class="form-control" maxlength="255">
				</div>
			</div>
			<div class="login-box">
				<p class="left">Senha</p>
				<div class="col-xs-5">
				<input type="password" name="password" id="password" class="form-control" maxlength="255">
				</div>
			</div>
			<input type="submit" class="btn btn-primary" content="Login">
		<?php echo form_close(); ?>
		<?php } else { ?>
		<?php echo form_open('login/logout');?>
		<input type="submit" class="btn btn-primary" content="Logout" value="Logout">
		<?php echo form_close();

		} ?>
	</div>
</div>