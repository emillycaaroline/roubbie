-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2024 às 03:43
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `nova_coluna` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `diario`
--

INSERT INTO `diario` (`id`, `titulo`, `data`, `conteudo`, `sentimento`, `created_at`, `user_id`, `nova_coluna`) VALUES
(22, 'Meu Dia', '2024-10-28', 'Hoje foi um dia produtivo.', 'feliz', '2024-10-28 23:34:58', 1, NULL),
(24, 'Dia Difícil', '2024-10-28', 'Tive um dia cansativo e estressante.', 'triste', '2024-10-29 02:45:00', 44, NULL),
(25, 'Um Dia Incrível', '2024-10-28', 'Consegui realizar todas as tarefas!', 'feliz', '2024-10-29 02:55:00', 45, NULL),
(28, 'hiiiii', '2024-10-29', 'fgnv', '', '2024-10-30 02:42:00', 0, NULL);

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
  `category` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `status`, `category`, `user_id`) VALUES
(86, 'bevent', '', '2024-10-22 22:20:00', '0000-00-00 00:00:00', 'pendente', 'evento', 40),
(87, 'Treino na Academia', '#FF5733', '2024-10-29 07:00:00', '2024-10-29 08:00:00', 'pendente', 'saúde', 43),
(88, 'Reunião de Projeto', '#33FF57', '2024-10-29 10:00:00', '2024-10-29 11:30:00', 'pendente', 'trabalho', 44),
(89, 'Jantar com Amigos', '#3357FF', '2024-10-29 19:00:00', '2024-10-29 21:00:00', 'pendente', 'social', 45),
(91, 'sbhksba', '', '2024-10-29 02:36:00', '0000-00-00 00:00:00', 'pendente', 'evento', 41),
(92, '1111111111111111111111', '', '2024-10-29 02:36:00', '0000-00-00 00:00:00', 'pendente', 'evento', 41);

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
(36, 'kayke', 'kayke@gmail.com', '$2y$10$lGFUd3MGTvA9bGQWyU/HRe75IfpMIZfZOtQuoMEuGWpDELLfg4YGO'),
(39, 'ludmilla silva', 'ludmilla@gmail.com', '$2y$10$Dtp5mNWnCGld2j8XaIdvTeKsFnX.zYfR16DNcBshUycsYPMGj5sJC'),
(40, 'brunna', 'brunna@gmail.com', '$2y$10$UI.qEe6S1eV4gZcufgzwUeJwkodg1SvNva7iEAKsMSB0Foqr/2W0m'),
(41, 'delac', 'delac@gmail.com', '$2y$10$eMVMRGC/.eckcHoRzCX1pOPidL2a443KOEgcX2JglqJYulmTWWeTO'),
(43, 'Larissa Santos', 'larissa@gmail.com', '$2y$10$H3H6U0YwfxEjY6jK9aExq.w4hM6ycHpOIQn34bP2ZxrTQ9Be1WlG'),
(44, 'Ricardo Almeida', 'ricardo@gmail.com', '$2y$10$H3H6U0YwfxEjY6jK9aExq.w4hM6ycHpOIQn34bP2ZxrTQ9Be1WlG'),
(45, 'Julia Costa', 'julia@gmail.com', '$2y$10$H3H6U0YwfxEjY6jK9aExq.w4hM6ycHpOIQn34bP2ZxrTQ9Be1WlG');

--
-- AUTO_INCREMENT para tabelas
--

ALTER TABLE `compromissos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `diario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `compromissos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `diario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restrições de chave estrangeira para tabelas
--

ALTER TABLE `events`
  ADD CONSTRAINT `fk_events_user` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`);

COMMIT;
