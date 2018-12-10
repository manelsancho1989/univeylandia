<?php
require_once '../classes/Taula.php';

$taula = new Taula ($_POST['numTaula'],$_POST['numCadira']);

$taula->inserirTaula();

echo('<pre>');
var_dump($taula);
echo('</pre>');

?>
