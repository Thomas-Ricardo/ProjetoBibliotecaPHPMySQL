CREATE DATABASE `biblioteca_mario_de_andrade`;

CREATE TABLE `emprestimos` (
  `id_emprestimo` int(11) UNSIGNED  NOT NULL AUTO_INCREMENT,
  `usuario_emp` varchar(140) NOT NULL,
  `livro_emprestado` varchar(140) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `quantidade_emp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `livros` (
  `id_livro` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_livro` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `tema` varchar(40) DEFAULT NULL,
  `data_pub` date DEFAULT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `quantidade` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) UNSIGNED  NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(140) NOT NULL,
  `data_nasc` date NOT NULL,
  `escolaridade` tinyint(4) DEFAULT NULL,
  `endereco` varchar(140) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `genero` tinyint(4) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;