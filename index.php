<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Números</title>
</head>
<body>
    <h1>Conversor de numeros - decimal (binario-octal-hexadecimal)</h1>
    <form method="post" action="">
        <label for="decimal">Ingresa el numero Decimal:</label>
        <input type="number" id="decimal" name="decimal" required>
        <br><br>
        <label for="conversion">Convertir a:</label>
        <select id="conversion" name="conversion" required>
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = $_POST['decimal'];
        $conversion = $_POST['conversion'];
        
        if ($conversion == "binario") {
            $resultado = decbin($decimal);
        } elseif ($conversion == "octal") {
            $resultado = decoct($decimal);
        } elseif ($conversion == "hexadecimal") {
            $resultado = dechex($decimal);
        }
        
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>
