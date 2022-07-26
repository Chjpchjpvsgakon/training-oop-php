<h1>Danh sach lop</h1>

<button class="btn btn-info"><a href="?action=create&controller=lop">Add Class</a></button>
<table border="1" width="80%">
	<tr>
		<th>Ma lop</th>
		<th>Ten Lop</th>
		<th>Edit</th>
	</tr>

	<?php foreach ($results as $each){ ?>
	<tr>
		<td><?php echo $each['ma_lop'] ?></td>
		<td><?php echo $each['ten_lop'] ?></td>
		<td>
			<a href="?action=edit&controller=lop&ma_lop=<?php echo $each['ma_lop'] ?>">edit</a>
		</td>
	</tr>

	<?php } ?>
</table>