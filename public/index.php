<?php
require_once "../clases/persona.php";

$amparo= new persona();
$amparo->saludar();

require_once "../clases/animal.php";

$animal= new animal();
$animal->perro();

?>