<?php
// Declaración de variable
$name = "Luis";

// php tiene tipado débil
$age = 39;
$newAge = $age + '1'; // Resultado es 40

// El signo + NO sirve como concatenador
$cadena = $name . ' tiene '   . $age . ' años';

// Creación de constantes
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');
const logo = '';

// Operadores ternearios
$edad = 18;
$mensaje = $edad >= 18 ? 'Eres mayor de edad' : 'Eres menor de edad';


$outputAge = match (true) {
    $age < 3  => 'Eres un bebé',
    $age < 11 => 'Eres un niño',
    $age < 18 => 'Eres un adolescente',
    default   => 'Eres adulto'
};

// Arrays
$frutas = ['manzana', 'pera', 'uva'];
$frutas[] = 'fresa'; // Agregar un elemento al final del array
$frutas[1] = 'banana'; // Modificar un elemento del array

?>


<h1>
    <!-- Forma corta -->
    <img src="<?= LOGO_URL ?>" alt="logo php" width="300">
    <?=
    "Hola $cadena!!";
    ?>
    <br>
    <?= $mensaje ?>
    <?= $outputAge ?>
    <?= 'Me gusta la ' . $frutas[0] ?>

    <ul>
        <?php foreach ($frutas as $key => $fruta) : ?>
            <li><?= $key . ' ' . $fruta ?></li>
        <?php endforeach; ?>
    </ul>
</h1>

<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: grid;
        place-items: center;
    }
</style>