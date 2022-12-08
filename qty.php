
<!Doctype html>
<html>
<head>
	<title>Membuat From Input Qty Menggunakan Kondisi If Else</title>
        <style>
          table{border:2px solid grey;}
          input {border:none; width: 50px; text-align: center;}
          a {text-decoration: none;}
        </style>
</head>
<body>
	<table>
		<tr>
			<td>
				<a href="qty.php?kurang=<?php echo $qty ?>">-</a>
				<input type="text" name="qty" value="<?php echo $qty ?>">
				<a href="qty.php?tambah=<?php echo $qty ?>">+</a>
			</td>
		</tr>
	</table>
</body>	
</html>
