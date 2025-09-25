create table categorias(
id_categoria serial primary key,
desc_categoria varchar(255)
);

insert into categorias(id_categoria, desc_categoria) values
(1, 'Mercado'),
(2, 'Compras'),
(3, 'Alimentação'),
(4, 'Pet'),
(5, 'Assinaturas'),
(6, 'Transporte');


create table origens (
id_origem serial primary key,
desc_origem varchar(100),
tp_origem varchar(100)
);

insert into origens(id_origem, desc_origem, tp_origem) values
(1,'Dinheiro', 'Saida'),
(2,'Crédito', 'Saida'),
(3,'Débito', 'Saida'),
(4,'Salario', 'Entrada'),
(5,'Entrada avulsa', 'Entrada');

create table usuarios(
id_usuario serial primary key,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar(255) not null,
dt_cadastro date default(current_date)
)

INSERT INTO public.usuarios(nome, email, senha) VALUES
('Admin', 'Admin@gmail.com', 'admin');

create table entradas(
id_entrada serial primary key,
descricao varchar(255) not null,
valor double precision,
id_origem integer not null references origens(id_origem),
id_usuario integer not null references usuarios(id_usuario),
dt_entrada date
);

create table saidas(
id_saida serial primary key,
descricao varchar(255) not null,
valor double precision,
id_categoria integer not null references categorias(id_categoria),
id_origem integer not null references origens(id_origem),
id_usuario integer not null references usuarios(id_usuario),
dt_saida date,
parcelado varchar(1) default('N'),
qtd_parcelas integer
);
