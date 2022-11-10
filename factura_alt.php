<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Factura</title>

	<!-- Favicon -->
	<link rel="icon" href="./images/favicon.png" type="image/x-icon" />
	<!-- Stylesheet-->
		<link href="css/styles.css" rel="stylesheet" />
		
	
	<!-- Invoice styling -->
</head>
<?php
$date = date("d-m-Y");
$mod_date = strtotime($date . "+ 1 months");

?>

<body>
	<div class="invoice-box">
		<table>
			<tr class="top">
				<td colspan="2">
					<table>
						<tr>
							<td class="title">
								<img src="./images/logo.png" alt="Company logo" style="width: 100%; max-width: 300px" />
							</td>

							<td>
								Invoice #:
								000<br />
								Created:
								<?php echo ($date); ?><br />
								Due:
								<?php echo date("d-m-Y", $mod_date) ?><br />

							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="information">
				<td colspan="2">
					<table>
						<tr>
							<td>
								My Savings Bank.<br />
								Calle Falsa 123<br />
								Bogota, 12345
							</td>

							<td>
								Nombre cliente<br />
								Correo@cliente.com
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="heading">
				<td>Concepto</td>

				<td>Precio</td>
			</tr>

			<tr class="item">
				<td>Seguro Personal</td>

				<td>$300.000</td>
			</tr>

			<tr class="item">
				<td>Seguro Vehicular</td>

				<td>$75.000</td>
			</tr>

			<tr class="item last">
				<td>Seguro Funebre</td>

				<td>$100.000</td>
			</tr>

			<tr class="total">
				<td></td>

				<td>Total: $475.000</td>
			</tr>
		</table>
	</div>
	
</body>

</html>