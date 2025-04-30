-- Clean setup for test database
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Create articles table
CREATE TABLE IF NOT EXISTS articles (
  id int(11) NOT NULL AUTO_INCREMENT,
  reference varchar(255) NOT NULL,
  libelle varchar(255) NOT NULL,
  quantity int(11) NOT NULL DEFAULT 0,
  
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

