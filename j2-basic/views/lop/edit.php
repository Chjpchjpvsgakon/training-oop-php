<form method="post" action="?action=update&controller=lop">
	<input type="hidden" name="ma_lop" value="<?php echo $each['ma_lop'] ?>">
	<label>Class Name</label>
	<input type="text" name="ten_lop" id="classname" value="<?php echo $each['ten_lop'] ?>">

	<button type="submit" class="btn alert-primary">Update</button>
</form>