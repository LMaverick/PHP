
    <h1>Calculadora de IMC</h1>

    <?php
    // Variáveis para armazenar peso e altura (valores de exemplo)
    $peso = 70; // Peso em quilogramas
    $altura = 1.73; // Altura em metros

    // Calcular o IMC (Índice de Massa Corporal)
    $imc = $peso / ($altura * $altura);

    // Exibir o resultado
    echo "Seu peso é: $peso kg<br>";
    echo "Sua altura é: $altura m<br>";
    echo "Seu IMC é: " . number_format($imc, 2) . "<br>";

    // Determinar a categoria de peso
    if ($imc < 18.5) {
        echo "Você está abaixo do peso.";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "Seu peso está dentro da faixa saudável.";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "Você está com sobrepeso.";
    } else {
        echo "Você está obeso.";
    }
    ?>