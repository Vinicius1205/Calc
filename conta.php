<?php
header('Content-Type: application/json');

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = 'erro';
            }
            break;
        default:
            $resultado = 'erro';
            break;
    }

    echo json_encode(['resultado' => "$num1 $operacao $num2 = $resultado"]);
} else {
    echo json_encode(['resultado' => 'erro']);
}
?>
