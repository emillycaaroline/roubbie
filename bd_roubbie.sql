-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/10/2024 às 19:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `diario`
--

CREATE TABLE `diario` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `conteudo` text NOT NULL,
  `sentimento` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Reunião de Projeto', '#ff5733', '2024-09-10 09:00:00', '2024-09-10 11:00:00'),
(2, 'Aniversário da Maria', '#33ff57', '2024-09-15 18:00:00', '2024-09-15 22:00:00'),
(3, 'qla', '#000000', '2024-10-09 00:00:00', '2024-10-09 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(12, 'João da Silva', 'joao.silva@example.com', 'senha123'),
(13, 'Maria Oliveira', 'maria.oliveira@example.com', 'senha456'),
(14, 'vianda', 'vianda@gmail.com', '$2y$10$4FRYyu/rGom6ynpS70/0Feh2ispPMGWULnIbYc1WbmYdX1AMynu42'),
(15, 'amanda', 'mad@gmail.com', '$2y$10$yy2YIJ0xHlBMFO7DmINAzeQwB3KaOVgNTdXsNQiVpflkeYJ8hsRiq'),
(16, '', '', '$2y$10$dZk8t2mjAGyJs29kmFZPPuAifkIafeLN44uHU3ttj6ZgXaef8OlsK'),
(17, 'caique sopi', 'daoarda@gmail.com', '$2y$10$eXvR8LzL0dTjP7idOFkfeOLiL3VaxdsPbmevhfvKQAY5AwYslz0xa'),
(18, 'ana silva', 'ana@gmail.com', '$2y$10$pT1wGnlGjXGQQzyHutO4a.XLEZO.3mOlQw6YxMqCAd.RccOaDZOJi'),
(19, 'nhoho', 'ahna@gmail.com', '$2y$10$RWI49TAaroTXzoeWviAJCOH95f6WCMbr2SgxXnooqmk56Ff3uvl9u'),
(20, 'bruna santos', 'bruna@gmail.com', '$2y$10$YRtX0neNXREYv.N/vE/VGeJo13HAOf1zKvsIRUS.FUFaNWHPluUiG'),
(21, 'igor santos', 'igor@gmail.com', '$2y$10$CoTjJQtEmQtOCJKpIZxk5eCtwgr0Vp8oKTf65LlZj0ofr13Y9U6ea'),
(22, 'kol', 'kol@gmail.com', '$2y$10$kIOQiEfX4wbFN31ysXj3B.5d8kDxp3zUMxdIAc3z3YtqXwzQHXefe');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `diario`
--
ALTER TABLE `diario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `diario`
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
