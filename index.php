<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora de Propinas</title>
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    <body>
        <div class="formulario">
            <form action="processes/calculo.proc.php" method="post">
                <h1>Calculadora de Propinas</h1>
                <p>Total de la cuenta:</p>
                <input type="number" name="cuenta" min="1" step="0.01">
                <p>¿Que tal el servicio?</p>
                <select name="servicio" class="servicio">
                    <option value="0.3">30% Excelente</option>
                    <option value="0.2">20% Bueno</option>
                    <option value="0.1" selected>10% Normal</option>
                    <option value="0.05">5% &nbsp; Mala</option>
                </select>
                <p>¿Cuantas personas van a pagar?</p>
                <input type="number" name="personas" value=1 min="1">
                <input type="submit" value="Calcular" name="calcular" id="enviar">
            </form
        </div>

        <?php
        if(isset($_GET['resultado']))
        {
            $resultado=$_GET['resultado'];
            echo "<h3>Propina = $resultado por persona</h3>";
        }
        ?>
    </body>
</html>