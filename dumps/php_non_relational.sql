CREATE DATABASE php_non_relational;

use php_non_relational;

CREATE TABLE orders (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    numero_pedido INT NOT NULL,
    nome_cliente VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email NCHAR(100),
    dt_pedido smalldatetime NOT NULL,
    cod_barras VARCHAR(20) NOT NULL,
    nome_produto VARCHAR(100) NOT null,
    valor_unitario DECIMAL(8,2) NOT NULL,
    quantidade INT NOT NULL
);

INSERT INTO orders values
	(DEFAULT, 1, "Juliana", "19311033057", "juliana@email.com", now(), "19423297597549697118", "Teclado Mecânico", 140.90, 10),
    (DEFAULT, 2, "Flavio", "03753892025", "flavio@email.com", now(), "15648576671311849586", "Mouse sem fio", 68.51, 25),
    (DEFAULT, 3, "Giovani", "14350070001", "giovani@email.com", now(), "55213687873244994879", "Pendrive 64GB", 42.90, 100),
    (DEFAULT, 4, "Rhaissa", "67537367000", "rhaissa@email.com", now(), "54334478266657436657", "Monitor", 1399.90, 5),
    (DEFAULT, 5, "Leonardo", "78923913049", "leonardo@email.com", now(), "53187213677771367842", "Cadeira Gamer", 929.00, 12),
    (DEFAULT, 6, "Karine", "46156002081", "karine@email.com", now(), "27997862317922945254", "Webcam", 197.00, 50),
    (DEFAULT, 7, "Thiago", "15705567090", "thiago@email.com", now(), "71573997667327145954", "Microfone Gamer", 432.35, 8);

select * from orders;