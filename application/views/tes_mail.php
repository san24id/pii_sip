<form method="post" action="<?php echo site_url('Email/TesMail'); ?>">
	<h3>Email</h3>
	<table>
		<tr>
			<td>To</td>
			<td>:</td>
			<td><input type="text" name="tomail" /></td>
		</tr>
		<tr>
			<td>Subjek</td>
			<td>:</td>
			<td><input type="text" name="subjek" /></td>
		</tr>
		<tr>
			<td>Box</td>
			<td>:</td>
			<td><textarea name="box" cols="20" rows="5"></textarea></td>
		</tr>
	</table>

	    <input type="submit" name="email" value="Kirim">
</form>