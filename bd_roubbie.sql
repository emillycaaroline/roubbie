-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/10/2024 às 17:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_roubbie`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `usuario_id`) VALUES
(44, 'Reunião de Projeto', '#ff5733', '2024-09-10 09:00:00', '2024-09-10 11:00:00', 12),
(45, 'Aniversário da Maria', '#33ff57', '2024-09-15 18:00:00', '2024-09-15 22:00:00', 13),
(46, 'teste ful', '#356ef3', '2024-09-06 21:43:00', '2024-09-07 21:43:00', NULL),
(47, 'teste fulhiy', '#356ef3', '2024-09-03 21:48:00', '2024-09-13 21:49:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(16, '', '', '$2y$10$dZk8t2mjAGyJs29kmFZPPuAifkIafeLN44uHU3ttj6ZgXaef8OlsK'),
(17, 'caique sopi', 'daoarda@gmail.com', '$2y$10$eXvR8LzL0dTjP7idOFkfeOLiL3VaxdsPbmevhfvKQAY5AwYslz0xa'),
(12, 'João da Silva', 'joao.silva@example.com', 'senha123'),
(15, 'amanda', 'mad@gmail.com', '$2y$10$yy2YIJ0xHlBMFO7DmINAzeQwB3KaOVgNTdXsNQiVpflkeYJ8hsRiq'),
(13, 'Maria Oliveira', 'maria.oliveira@example.com', 'senha456'),
(14, 'vianda', 'vianda@gmail.com', '$2y$10$4FRYyu/rGom6ynpS70/0Feh2ispPMGWULnIbYc1WbmYdX1AMynu42');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
