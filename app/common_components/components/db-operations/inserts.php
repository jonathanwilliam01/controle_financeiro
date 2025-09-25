<?php
include_once __DIR__ . '/../../../conexao.php';
include_once __DIR__ . '/../saidas.php';

if(isset($_POST['salvar_saida'])){
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        $origem    = $_POST['origem'];

$insere_saida =
"insert into saidas(descricao, valor, id_categoria, id_origem, id_usuario) values
('$descricao', $valor, $categoria, $origem, 1)
;";

$ins_saida = $pdo->prepare($insere_saida); 
$ins_saida->execute();
}

?>