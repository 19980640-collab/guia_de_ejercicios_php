<?php
$compra = $_POST['compra'];
if($compra > 100){
 $descuento = $compra * 0.10;
}else{
 $descuento = 0;
}
$total = $compra - $descuento;
echo "Total: $total";
?>