-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 02:10
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
-- Estrutura para tabela `compromissos`
--

CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` text DEFAULT NULL,
  `status` enum('pendente','concluido') DEFAULT 'pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `compromissos`
--

INSERT INTO `compromissos` (`id`, `titulo`, `data`, `descricao`, `status`) VALUES
(1, 'Reunião de Trabalho', '2024-10-23 10:00:00', 'Reunião sobre o projeto X', 'pendente'),
(2, 'Consulta Médica', '2024-10-24 14:00:00', 'Consulta com o Dr. Y', 'pendente'),
(3, 'Reunião de Trabalho', '2024-10-23 10:00:00', 'Reunião sobre o projeto X', 'pendente'),
(4, 'Consulta Médica', '2024-10-24 14:00:00', 'Consulta com o Dr. Y', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `diario`
--

CREATE TABLE `diario` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `conteudo` text NOT NULL,
  `sentimento` enum('feliz','triste','neutro','ansioso') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `diario`
--

INSERT INTO `diario` (`id`, `titulo`, `data`, `conteudo`, `sentimento`, `created_at`) VALUES
(16, 'Exemplo de anotação', '2024-10-15', 'Escreva aqui...', '', '2024-10-17 01:14:37'),
(17, 'anotação diferente', '2024-10-22', 'sla foi legal', '', '2024-10-22 22:29:55');

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
  `status` enum('pendente','concluído','realizado','cancelado') DEFAULT 'pendente',
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `status`, `category`) VALUES
(73, 'Judo Class', '#FF5733', '2024-10-23 09:00:00', '2024-10-23 10:30:00', 'pendente', 'judo'),
(74, 'Judo Competition', '#FF5733', '2024-10-30 11:00:00', '2024-10-30 14:00:00', 'pendente', 'judo'),
(75, 'Task A', '#28A745', '2024-10-23 10:00:00', '2024-10-23 11:00:00', 'pendente', 'tarefa'),
(76, 'Task B', '#28A745', '2024-10-24 14:00:00', '2024-10-24 15:00:00', 'pendente', 'tarefa'),
(77, 'Show Event 1', '#007BFF', '2024-10-25 17:00:00', '2024-10-25 20:30:00', 'pendente', 'evento'),
(78, 'Show Event 2', '#007BFF', '2024-10-26 18:00:00', '2024-10-26 21:30:00', 'pendente', 'evento'),
(79, 'Commitment 1', '#FFC107', '2024-10-27 14:00:00', '2024-10-27 15:30:00', 'pendente', 'compromissos'),
(80, 'Commitment 2', '#FFC107', '2024-10-28 16:00:00', '2024-10-28 17:30:00', 'pendente', 'compromissos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `inicio` datetime NOT NULL,
  `fim` datetime NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `status` enum('pendente','concluída') DEFAULT 'pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, 'kol', 'kol@gmail.com', '$2y$10$kIOQiEfX4wbFN31ysXj3B.5d8kDxp3zUMxdIAc3z3YtqXwzQHXefe'),
(23, 'bethania silva', 'beth@gmail.com', '$2y$10$tCtaMZWYL48MuIt1ufiZ.eE.vST2eCGWcq5BPECk1vYV5BnW0dp/.'),
(24, 'yago', 'yago@gmail.com', '$2y$10$GinAqaEGnej5CLxC.P6P2Ojv04XbEv/krJaMoFUux9rAPRlx6WJDq'),
(25, 'hb', 'betklklknlh@gmail.com', '$2y$10$s5c1kXYQtNWSTTNFOhVq7.C13y78EerVYWllTc9gru8BXjGBY/Taa'),
(26, 'gal', 'gall@gmail.com', '$2y$10$hTs14uHKVax7/s0.AxfSnuW5YHI/HAmlo9rKzCmBe.YCIFoRsCJAq');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compromissos`
--
ALTER TABLE `compromissos`
  ADD PRIMARY KEY (`id`);

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
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
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
-- AUTO_INCREMENT de tabela `compromissos`
--
ALTER TABLE `compromissos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `diario`
--
ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
