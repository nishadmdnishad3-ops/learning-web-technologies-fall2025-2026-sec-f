<?php
$amount = 1000;
$vat = $amount * 0.15 ;

echo "Amount: $amount <br>";
echo "VAT amount: $vat <br>";
echo "Total Amount With vat: " . ($amount + $vat);

?>