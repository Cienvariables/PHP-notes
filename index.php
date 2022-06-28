<!-- // La manera más sencilla de instalar PHP en Windows es con un instalador con ciertas aplicaciones ya preparadas para el desarrollo. Uno de ellos es XAMPP de los más famosos entornos de desarrollo,
// que include además del intérprete PHP, un servidor Web (Apache) y una base de datos (MySQL).
// APACHE
// http://localhost/index.php -->

<!-- // variables: (aun sin tipad en Camel case), imprimir por pantalla
// $nombre = "Julia";

// echo "hola mundo, soy $nombre" . " ";
// echo "<br>";
// echo 'hola mundo con comillas simples, soy' . $nombre;



    $html = "<p class=\"paragrapgh\">Contenido del párrafo</p>";
// $frutas = ["fresa", "lima", "manzana", "roja" => "aguacate", 33 => "platano de Canarias", "papaya seria 34", 34 => "higo lo sobreescribe"];
// print_r($frutas);
// var_dump($frutas);

// echo $frutas[1] . " ";
// echo $frutas["roja"] . " ";
// echo $frutas[2] = "jshdkajhd" . " "; // Sobreescribe y crea.
// echo $frutas[] = "nuevo valor" . " "; // Sin clave esta se genera automaticamente
// var_dump($frutas[] = "nuevo valor" . " "); // sobreescribe y crea. Sin clave esta se genera automaticamente

// Embeber codigo PHP en medio de un HTML
// Desde la URL, le añado ? y clave=valor.VARIOS: & entre un argumento y otro. Curioso.
// $nombreURL = $_GET["nombreURL"];
// echo "Mi nombre URL es $nombreURL"; // Lo recojo. -->

<!-- 01. Crear un programa php que reciba el titulo como parámetro GET y añada el contenido dentro del h1 del html. -->

<?php
$tituloH1 = $_GET['tituloH1'];
$color1 = $_GET['color1'];
$alert = $_GET['alert']; ?>
<html lang="es">

<body>
  <h1 style="color :<?php $color1 ?>"> <?php echo $tituloH1; ?> </h1>
  <script>
    alert("<?php echo $alert; ?>")
  </script>
</body>

</html>

/*
Escapar las comillas dobles de dentro del texto. Para que no se lie con ellas

$html = "<p class=\"paragrapgh\">Aqui escapamos por los pelos</p>"; */


// OPERADORES ARITMETICOS
// $suma = 5 + 4;
// $resta = 90 - 34;
// $multiplicacion = 6 * 5;
// $division = 8 / 2;

// // El módulo es el resto de la divison entera de los dos números.
// $modulo = 8 % 5;
// $exponente = 3 ** 2;

// // Esto sería equivalente a $suma = $suma + 1
// $suma++;
// $resta--;

// // Esto sería equivalente a $suma = $suma + 5
// $suma += 5;