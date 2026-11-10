<?php
$pedidos = [250.00, 320.00, 100.00, 150.00, 450.00, 80.00, 299.99, 300.00];

echo "<h2>Cálculo de Frete para 8 Pedidos</h2>";

for ($i = 0; $i < 8; $i++) {
    $valorCompra = $pedidos[$i];
    
    if ($valorCompra >= 300.00) {
        $frete = 0.00;
        $statusFrete = "Frete Grátis";
    } elseif ($valorCompra >= 150.00) {
        $frete = 15.00;
        $statusFrete = "R$ 15,00";
    } else {
        $frete = 25.00;
        $statusFrete = "R$ 25,00";
    }
    
    $numeroPedido = $i + 1;
    echo "Pedido $numeroPedido: Valor da compra = R$ " . number_format($valorCompra, 2, ',', '.') . 
            " | Frete = <strong>{$statusFrete}</strong><br>";
}
?>