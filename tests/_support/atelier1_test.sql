DROP TABLE IF EXISTS article;

CREATE TABLE IF NOT EXISTS `Article` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10, 2) NOT NULL
);

INSERT INTO article (name, price) VALUES
('HP Laptop', 1000.00),
('Dell Monitor', 200.00);
