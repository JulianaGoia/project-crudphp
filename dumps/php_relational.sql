CREATE DATABASE php_relational;

USE php_relational;

CREATE TABLE clients (
	id int not null auto_increment primary key,
    nome_cliente varchar (100) not null,
    cpf char (14) not null,
    email varchar (100)
);

INSERT INTO clients values
	(1, "Juliana", "19311033057", "juliana@email.com"),
    (2, "Flavio", "03753892025", "flavio@email.com"),
    (3, "Giovani", "14350070001", "giovani@email.com"),
    (4, "Rhaissa", "67537367000", "rhaissa@email.com"),
    (5, "Leonardo", "78923913049", "leonardo@email.com"),
    (6, "Karine", "46156002081", "karine@email.com"),
    (7, "Thiago", "15705567090", "thiago@email.com");

    CREATE TABLE products (
	id int not null auto_increment primary key,
    nome_produto varchar (250) not null,
    valor_unitario decimal (8,2) not null,
    cod_barras varchar (11) not null unique key
);

    INSERT INTO products values
	(1, "Teclado Mecânico", 140.90, "19423297597549697118"),
    (2, "Mouse sem fio", 68.51, "15648576671311849586"),
    (3, "Pendrive 64GB", 42.90, "55213687873244994879"),
    (4, "Monitor", 1399.90, "54334478266657436657"),
    (5, "Cadeira Gamer", 929.00, "53187213677771367842"),
    (6, "Webcam", 197.00, "27997862317922945254"),
    (7, "Microfone Gamer", 432.35, "71573997667327145954");

    CREATE TABLE orders (
	numero_pedido int not null auto_increment primary key,
    id_client int not null,
    id_product int not null,
    id_value decimal (8,2) unique key,
    data_pedido datetime not null,
    quantidade int not null,
    total decimal (8,2)
);

INSERT INTO orders values
	(1, now(), 2, null),
    (2, now(), 1, null),
    (3, now(), 5, null),
    (4, now(), 1, null),
    (5, now(), 3, null),
    (6, now(), 2, null),
    (7, now(), 2, null);

ALTER TABLE orders ADD COLUMN id_client INT AFTER numero_pedido;
ALTER TABLE orders ADD COLUMN id_product INT AFTER id_client;
ALTER TABLE orders ADD COLUMN id_value INT AFTER id_product;

ALTER TABLE orders ADD foreign key (id_client) references clients (id);
ALTER TABLE orders ADD foreign key (id_product) references products (id);
ALTER TABLE orders ADD foreign key (id_value) references products (valor_unitario);