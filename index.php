<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
if (isset($_POST['crear'])) {
	try {
		ob_start();
		include dirname(__FILE__).'/factura_alt.php';
		$content = ob_get_clean();
	
		$html2pdf = new Html2Pdf('L', 'A6');
		//$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($content);
		$html2pdf->output('factura.pdf');
	} catch (Html2PdfException $e) {
		$html2pdf->clean();
	
		$formatter = new ExceptionFormatter($e);
		echo $formatter->getHtmlMessage();
	}
}else {
	require_once 'factura_alt.php';
	
}
?>
<form action="" method="post">
		<input type="submit" value="Crear PDF" name="crear">
</form>	


