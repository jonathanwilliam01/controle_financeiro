<?php
$consulta_categorias=
"SELECT * FROM CATEGORIAS";
$categorias = $pdo->prepare($consulta_categorias); 
$categorias->execute();

$consulta_origens_saida=
"SELECT * FROM ORIGENS where tp_origem = 'Saida'";
$origens = $pdo->prepare($consulta_origens_saida); 
$origens->execute();

?>