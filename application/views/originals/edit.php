<!-- <h2><?php echo $title; ?></h2> -->
<script type="text/javascript">
	function getContent(){
		document.getElementById("writing-area-title-editable-input").value = document.getElementById("writing-area-title-editable").innerHTML;
	}

</script>
<?php echo validation_errors(); ?>

<!-- <?php echo form_open('originals/edit/'.$originals_item['id']); ?>
	<table>
		<tr>
			<td><label for="header">Título</label></td>
			<td><input type="input" name="header" size="50"/></td>
		</tr>
		<tr>
			<td><label for="body">Texto</label></td>
			<td><textarea rows="10" type="input" name="body"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Finalizar edição do usuário"/></td>
		</tr>
	</table>
<?php echo form_close(); ?> -->

<div class="center font-default">
	<div class="writing-area">
		<div class="writing-area-title"><strong><?php echo $originals_item['header']; ?></strong></div>
		<div class="writing-area-title-editable" name="header" contenteditable="true"><?php echo $originals_item['header']; ?></div>
		<?php echo form_open('originals/edit/'.$originals_item['id'], 'onsubmit="return getContent()"'); ?>
		<br class="clear">
		<textarea name="body" rows="20"><?php echo $originals_item['body'];?></textarea>
		<input id="writing-area-title-editable-input" name="header" type="text" style="display:none">
		<br class="clear">
		<input type="submit" name="submit" value="Salvar" class="text-black">
		<?php echo form_close(); ?>
	</div>
</div>