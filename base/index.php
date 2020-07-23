<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo PHP</title>
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="contenedor">
            <h1>Aprendiendo PHP</h1>
            <div class="contenido">
            
                <?php // Ejercicio 1 y 2
                    echo "Ej 1 y 2" . "<br>";

                    $variable = 100;

                    if($variable == 100) {
                        echo "La variable es igual a 100";
                    }
                    else {
                        echo "La variable es distinta de 100";
                    }

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 3
                    echo "Ej 3" . "<br>";

                    $variable = 158;


                    if(0 == 0) {
                        $variable = 1;
                    }
                    elseif() {
                        
                    }
                    else {

                    }



                    if($variable >= 100 && $variable <= 300) {
                        echo "La variable se encuentra entre 100 y 300.";
                    }
                    else {
                        echo "La variable no se encuentra entre 100 y 300.";
                    }

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 4 y 5
                    echo "Ej 3 y 4" . "<br>";

                    $variable = 400;

                    if($variable >= 100 && $variable <= 300) {
                        echo "La variable se encuentra entre 100 y 300.";
                    }
                    elseif($variable >= 500 && $variable <= 800) {
                        echo "La variable se encuentra entre 500 y 800.";
                    }
                    else {
                        echo "La variable no se encuentra ni entre 100 y 300 ni entre 500 y 800.";
                    }

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 6
                    echo "Ej 6" . "<br>";

                    $variable = 999;
                    
                    if($variable < 100) {
                        echo "La variable es menor a 100.";
                    }
                    elseif($variable >= 100 && $variable <= 300) {
                        echo "La variable se encuentra entre 100 y 300.";
                    }
                    elseif($variable >= 300 && $variable <= 500) {
                        echo "La variable se encuentra entre 300 y 500 pero no es válida.";
                    }
                    elseif($variable >= 500 && $variable <= 800) {
                        echo "La variable se encuentra entre 500 y 800.";
                    }
                    else {
                        echo "La variable es mayor a 800.";
                    }

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 8
                    echo "Ej 8" . "<br>";

                    $number_list = Array();
                    $min_number = 1;
                    $max_number = 10;

                    //add numbers to Array
                    for($i = $min_number; $i <= $max_number; $i++) {
                        $number_list[] = $i;
                    }
                    //print the numbers
                    foreach($number_list as $number) {
                        echo $number . "<br>";
                    }

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 9
                    echo "Ej 9" . "<br>";

                    $number_list = Array();
                    $min_number = 1;
                    $max_number = 10;
                    $total = 0;
                    
                    //add numbers to Array
                    for($i = $min_number; $i <= $max_number; $i++) {
                        $number_list[] = $i;
                    }
                    //print the numbers
                    foreach($number_list as $number) {
                        echo $number . "<br>";
                    }
                    //total sum
                    foreach($number_list as $number) {
                        $total += $number;
                    }
                    echo "<br>" . "La suma de ellos es: " . $total;

                    echo "<hr>";
                ?>
                <br>
                <?php // Ejercicio 10, 11, 12, 13 y 14
                    echo "Ej 10, 11, 12, 13 y 14" . "<br>";

                    $number_list = Array();
                    $number_even = Array();
                    $number_odd = Array();
                    $min_number = 1;
                    $max_number = 20;
                    $total = 0;

                    //add numbers to Array
                    for($i = $min_number; $i <= $max_number; $i++) {
                        $number_list[] = $i;
                    }




                    //separating the even numbers and odd numbers in diffrent Arrays
                    foreach($number_list as $number) {
                        if($number % 2 == 0) {
                            $number_even[] = $number;
                        }
                        else {
                            $number_odd[] = $number;
                        }
                    }




                    //total sum - even
                    foreach($number_even as $number) {
                        $total += $number;
                    }
                    //print even numbers
                    echo "Los números pares son: ";
                    for($i = 0; $i < count($number_even); $i++) {
                        echo $number_even[$i];
                        if($i == (count($number_even) - 1)) {
                            break;
                        }
                        else {
                            echo " - ";
                        }
                    }
                    echo "<br>" . "La suma de ellos es: " . $total;




                    //total sum - odd
                    $total = 0;
                    foreach($number_odd as $number) {
                        $total += $number;
                    }
                    //print odd numbers
                    echo "<br>" . "Los números impares son: ";
                    for($i = 0; $i < count($number_odd); $i++) {
                        echo $number_odd[$i];
                        if($i == (count($number_odd) - 1)) {
                            break;
                        }
                        else {
                            echo " - ";
                        }
                    }
                    echo "<br>" . "La suma de ellos es: " . $total;
                    



                    //total all numbers
                    $total = 0;
                    foreach($number_list as $number) {
                        $total += $number; 
                    }
                    echo "<br>" . "La suma de TODOS es: " . $total;

                    echo "<hr>";
                ?>

                    
            </div>
        </div>
    </body>
</html>
