<form action="?action=update" method="POST">
	<input type="hidden" name="masv" value="<?php echo $each_sv['ma_sv']?>">
	<label>Code SV</label>
	<input type="text" name="codesv" value="<?php echo $each_sv['ma_sv']?>" >
	<label for="">Name SV</label>
	<input type="text" name="namesv" value="<?php echo $each_sv['ten_sv']?>">
	<button type="submit">Edit</button>
</form>