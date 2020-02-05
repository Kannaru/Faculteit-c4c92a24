<?php
echo("Van welk getal wil je de faculteit weten?".PHP_EOL);
$nummer = readline();

$var1 = 1;

for($i = 1; $i <=$nummer; $i++){
    $var1 = $var1 * $i;    
}
echo("de Vaculteit van $nummer is $var1")

?>


