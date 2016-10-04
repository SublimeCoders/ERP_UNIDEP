<h1>Estado de la asistencia</h1>
<?php
//by Carlo Salas
$entrada="9:00:00";
$llegada = "9:50:00";
$array_llegada = split(":", $llegada);
$array_entrada=split(":",$entrada);


echo $actual=date("H:i:s")."<br><br>";
//$array[0] es "8" SON LAS HORAS
//$array[1] es "31" SON LOS MINUTOS
$numero_llegada = $array_llegada[0].$array_llegada[1];
$numero_entrada = $array_entrada[0].$array_entrada[1];

$minutos=$numero_llegada-$numero_entrada;
echo $minutos." minutos";
if ($minutos>=15 && $minutos<=29){
  echo "<b>Tiene retardo :|</b>";
}
elseif ($minutos>=30) {
  echo "<b>Tiene Falta :(</b>";
}
else{
  echo "<b>Asistencia normal :)</b>";
}

// 100 minutos por clase
?>
<style>
  h1{
    color: #e0e0e0;
    background-color: #4b3534;
    padding: 20px;
  }
  b{color: #2f3b45;padding: 20px;}
  body{background-color: #e7e7e7;font-family: helvetica;padding: 20px;}
</style>
