

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(10) UNSIGNED NOT NULL,
  `paciente_id_paciente` int(10) UNSIGNED NOT NULL,
  `medico_id_medico` int(10) UNSIGNED NOT NULL,
  `data_consulta` date DEFAULT NULL,
  `hora_consulta` time DEFAULT NULL,
  `descricao_consulta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `paciente_id_paciente`, `medico_id_medico`, `data_consulta`, `hora_consulta`, `descricao_consulta`) VALUES
(1, 0, 3, '2024-11-11', '09:45:00', 'testea'),
(3, 0, 3, '2222-02-22', '12:22:00', 'aa'),
(4, 0, 3, '2024-11-29', '11:48:00', 'Q2QSS'),
(5, 0, 3, '2222-02-22', '12:22:00', 'AAAAAA'),
(6, 9, 3, '0222-02-22', '12:22:00', 'aaaaaaaaaaaaaaaaaaa'),
(7, 11, 4, '2222-02-22', '12:02:00', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `nome_medico` varchar(100) DEFAULT NULL,
  `crm_medico` varchar(10) DEFAULT NULL,
  `especialidade_medico` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(10) UNSIGNED NOT NULL,
  `nome_paciente` varchar(100) DEFAULT NULL,
  `cpf_paciente` varchar(14) DEFAULT NULL,
  `data_nasc_paciente` date DEFAULT NULL,
  `sexo_paciente` char(1) DEFAULT NULL,
  `fone_paciente` varchar(20) DEFAULT NULL,
  `email_paciente` varchar(100) DEFAULT NULL,
  `endereco_paciente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------



CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` char(1) NOT NULL
);

