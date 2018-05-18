CREATE DATABASE librovisitas;

use librovisitas;

CREATE TABLE `visitas` (
  `Usuario` varchar(30) NOT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

