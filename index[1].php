<?php 
$name="miguel";
$edad=99;
$activo=true; 
$comprobador_cadena=is_string($name);  
define('LOGO_URL','https://tapizados.cl/wp-content/uploads/2024/02/tapizados.png.webp');
const NOMBRE = 'sauron';
$isOld = $edad > 40;
$isSuperOld = $edad > 100;

$cuentaedad = $isSuperOld
? 'Eres mas viejo que matusalen'
: 'Todavia de falta para ser matusalen';

if ($isOld) {
    echo "<h2>Eres vejuco!</h2>";
} else {
    echo "<h2>Eres joven felicidades</h2>";
}

$cuentaedad2 = match (true)
{
    $edad < 2 => "eres un bebe",
    $edad < 10 => "eres un niño",
    $edad < 18 => "eres un adolescente",
    $edad < 50 => "eres un adulto",
    $edad < 100 => "eres un viejo",
    $edad < 150 => "eres el maestro roshi",
    default => "eres mas viejo que el diablo",
};

$bestLanguages = ["php","python"];
$bestLanguages[] = "js";
$bestLanguages[]= "golang";

$person = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["PHP","JS","JAVA"],
];


$person["name"]= "pheralb";


?>


<ul>
    <?php foreach ($bestLanguages as $key => $language) :?>
             <li> <?=$key . " " . $language?></li>
    <?php endforeach; ?>
    
</ul>
<p>pero no se olviden de <?=$bestLanguages[3];?> </p>

<h2>El cuenta edad mas avanzado dice que: <?=$cuentaedad2?></h2>
<h2><?=$cuentaedad?></h2>
<h1>
<?="Hola mundo";?>
<br>
<?="Mi nombre es {$name} y es del tipo " . gettype($name) . " y activo es ".gettype($activo);?>

<!-- {$name} es una interpolacion de variable -->
</h1>
<img src="<?=LOGO_URL?>" alt="phplogo" width="200">
<p><?=NOMBRE?></p>

<style>
:root {
    color-scheme: dark;
}


body {
    display: grid;
    place-content: center;
}

</style>