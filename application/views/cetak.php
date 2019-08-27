<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak</title>
</head>
<body>
	<center>
		<table border="1" cellpadding="10" width="100%">
			<thead>
				<tr>
					<th>header 1</th>
					<th>header 2</th>
					<th>header 3</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ( $barang as $item ) : ?>
				<tr>
					<td> <?php echo $item->nama; ?> </td>
					<td><?php echo $item->harga; ?></td>
					<td><?php echo $item->ket; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</center>
</body>
</html>	