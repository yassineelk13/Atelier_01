DROP TABLE IF EXISTS article;

CREATE TABLE article (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10, 2)
);

INSERT INTO article (name, price) VALUES
('HP Laptop', 1000.00),
('Dell Monitor', 200.00);
