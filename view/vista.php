<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Base de datos bd_autopartes</h1>
	<h1>Tabla carro</h1>
	<h1>Christian Alcantara</h1>
	<table border="1">
		<tr>
			<td><strong>Marca</strong></td>
			<td><strong>Modelo</strong></td>
			<td><strong>Año</strong></td>
			<td><strong>Color</strong></td>
			<td><strong>Tipo</strong></td>
			<td><strong>Cilindros</strong></td>
			<td><strong>Precio</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["marca"]; ?></td>
						<td><?php echo $pd[$i]["modelo"]; ?></td>
						<td><?php echo $pd[$i]["año"]; ?></td>
						<td><?php echo $pd[$i]["color"]; ?></td>
						<td><?php echo $pd[$i]["tipo"]; ?></td>
						<td><?php echo $pd[$i]["cilindros"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>