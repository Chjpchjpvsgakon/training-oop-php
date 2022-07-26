
<h1>Danh sach sinh vien</h1>

<button><a href="?action=create">Add SV</a></button>
<table border="1" width="100%">
	<tr>
		<th>Ma SV</th>
		<th>Ten SV</th>
		<th>Action</th>
	</tr>

<?php  foreach ($results as $each) { ?>
	<tr>
		<td><?php echo $each['ma_sv'] ?></td>
		<td><?php echo $each['ten_sv'] ?></td>
		<td><button><a href="?action=edit&ma_sv=<?php echo $each['ma_sv'] ?>">Edit</a></button><button><a href="?action=delete&ma_sv=<?php echo $each['ma_sv'] ?>">DELETE</a></button></td>
	</tr>
<?php } ?>
</table>