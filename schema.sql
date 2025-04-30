-- DROP TABLE IF EXISTS article;

-- CREATE TABLE article (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     reference VARCHAR(255) NOT NULL,
--     libelle VARCHAR(255) NOT NULL,
--     quantity INT NOT NULL CHECK (quantity > 0)
-- );

DROP TABLE IF EXISTS article;

CREATE TABLE article (
  id INT AUTO_INCREMENT PRIMARY KEY,
    reference VARCHAR(50),
    libelle VARCHAR(50),
    quantity VARCHAR(50) NOT NULL
);

