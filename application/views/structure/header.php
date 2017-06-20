<html>
	<head>
		<title>CRUD LEEB</title>
		<link rel="stylesheet" href="<?= base_url("css/bootstrap.css");?>">
		<link rel="stylesheet" href="<?= base_url("css/style.css");?>">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  		<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8ty37uhxe7a15ws0wmjta4x3b8f7epmhaop65htl7i2fgrvo"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
  </script>
	</head>
	<body>
	<?php if($this->session->flashdata('login_success')){ ?>
		<div id="flashdata" class="alert alert-success"><?php echo $this->session->flashdata('login_error');?></div>
	<?php } else if($this->session->flashdata('login_error')){ ?>
		<div id="flashdata" class="alert alert-danger"><?php echo $this->session->flashdata('login_error');?></div>
	<?php } ?>

		<div class="navbar-background height-50" name="navbar">
			<div class="center font-default">
<!-- 				<ul class="navbar-links left">
			   	</ul> -->
			   	<ul class="navbar-links">
			   		<!-- INVARIÁVEIS -->
			   		<li class="left logo"><a href="<?php echo site_url('home'); ?>"><img class="logo" src="<?php echo site_url('../img/leeb3.png'); ?>" alt="Logo LEEB"></a></li>
			   		<li class="left"><a style="padding: 14px 16px" href="<?php echo site_url('home'); ?>">LEEB</a></li>
			   		<!-- !!!!!!!!!! -->
			   		<?php if($this->session->userdata('logged in')) { ?>
			   		<li class="right"><a href="#" onclick="window.location='<?php echo site_url('login/logout');?>'">Logout</a></li>
			   		<li class="left"><a href="<?php echo site_url('home');?>">Perfil</a></li>
			   		<li class="left"><a href="<?php echo site_url('originals');?>">Meus Textos</a></li>
			   		<?php } else { ?>
			   		<li class="right"><a href="<?php echo site_url('users/create'); ?>">Criar Conta</a></li>
			   		<li class="right"><a href="<?php echo site_url('users/login'); ?>">Entrar</a></li>
			   		<?php } ?>
			   	</ul>
<!-- 			<br class="clear">
			<br class="clear">
					CRUD Puro
					<p><a href="<?php echo site_url('home'); ?>">Home</a><br>
					<a href="<?php echo site_url('users/login'); ?>">Login</a> |
					<a href="<?php echo site_url('users/create'); ?>">Adicionar Usuário</a> |
					<a href="<?php echo site_url('users'); ?>">Visualizar Usuário</a> |
					<a href="<?php echo site_url('originals/create'); ?>">Adicionar Texto</a> |
				</div>
			</div> -->
<br class="clear">
<script>
	setTimeout(function(){
		document.getElementById('flashdata').className = 'flashdata';
	}, 2000);
</script>