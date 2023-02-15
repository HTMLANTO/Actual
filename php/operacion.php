
<?php 
$factur = $_POST['factura'];
$rete = $_POST['rete'];
$recibo = $_POST['cobro'];


$resultado= $factur - $rete + $recibo;








echo "<script >
alert('Resultado de Pago del cliente:$resultado');
window.location.href='http://localhost/cobranza/#';
</script>";



?>


