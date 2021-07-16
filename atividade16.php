<?php
$ensino = "Ead";
$formacao = array("php" => "Desenvolvimento php", "Infra" => "SysAdmin Linux");

//Não concatenadas
echo "<p>No $ensino da versatil você se torna {$formacao["php"]}";
echo "e pode se tornar também". $formacao["Infra"] . ".<p>";
?>