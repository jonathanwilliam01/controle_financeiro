<?php
$tb_categorias =
"create table categorias(
id_categoria serial primary key,
desc_categoria varchar(255)
);";

$ins_categorias=
"insert into categorias(id_categoria, desc_categoria) values
(1, 'Mercado'),
(2, 'Compras'),
(3, 'Alimentação'),
(4, 'Pet'),
(5, 'Assinaturas'),
(6, 'Transporte');";

$tb_origens=
"create table origens (
id_origem serial primary key,
desc_origem varchar(100),
tp_origem varchar(100)
);";

$ins_origens = 
"insert into origens(id_origem, desc_origem, tp_origem) values
(1,'Dinheiro', 'Saida'),
(2,'Crédito', 'Saida'),
(3,'Débito', 'Saida'),
(4,'Salario', 'Entrada'),
(5,'Entrada avulsa', 'Entrada');";

$tb_usuarios=
"create table usuarios(
id_usuario serial primary key,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar(255) not null,
dt_cadastro date default(current_date)
)";

$ins_usuarios=
"INSERT INTO public.usuarios(nome, email, senha) VALUES
('Admin', 'Admin@gmail.com', 'admin');";

$tb_entradas=
"create table entradas(
id_entrada serial primary key,
descricao varchar(255) not null,
valor double precision,
id_origem integer not null references origens(id_origem),
id_usuario integer not null references usuarios(id_usuario),
dt_entrada date
);";

$tb_saidas=
"create table saidas(
id_saida serial primary key,
descricao varchar(255) not null,
valor double precision,
id_categoria integer not null references categorias(id_categoria),
id_origem integer not null references origens(id_origem),
id_usuario integer not null references usuarios(id_usuario),
dt_saida date,
parcelado varchar(1) default('N'),
qtd_parcelas integer
);";

include_once __DIR__ . '/conexao.php';

try {
    $categorias = $pdo->prepare($tb_categorias); 
    $categorias->execute();

    $inserir_categorias = $pdo->prepare($ins_categorias);
    $inserir_categorias->execute();

    $origens = $pdo->prepare($tb_origens); 
    $origens->execute();

    $inserir_origens = $pdo->prepare($ins_origens);
    $inserir_origens->execute();

    $usuarios = $pdo->prepare($tb_usuarios); 
    $usuarios->execute();

    $inserir_usuarios = $pdo->prepare($ins_usuarios);
    $inserir_usuarios->execute();

    $entradas = $pdo->prepare($tb_entradas); 
    $entradas->execute();

    $saidas = $pdo->prepare($tb_saidas); 
    $saidas->execute();

    echo "Todas as tabelas foram criadas e populadas com sucesso!";

} catch (PDOException $e) {
    echo "Erro ao criar tabelas: " . $e->getMessage();
}
?>