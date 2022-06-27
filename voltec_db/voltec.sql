-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 18:59
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `voltec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrousel`
--

CREATE TABLE `carrousel` (
  `id` int(11) NOT NULL,
  `imgCarrousel` varchar(255) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrousel`
--

INSERT INTO `carrousel` (`id`, `imgCarrousel`, `data`) VALUES
(29, '423d051d8142dcf407dfbbe263541a35.jpg', '2022-06-16 01:51:12'),
(30, '6f1ed85e882675d0ab64d1d2e85342fe.jpg', '2022-06-16 01:51:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `imgFeedback` varchar(255) NOT NULL,
  `nomePessoa` varchar(255) NOT NULL,
  `testemunho` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id`, `imgFeedback`, `nomePessoa`, `testemunho`, `data`) VALUES
(6, 'c99294d8b3c0a1233f70745746fa435a.png', 'Pedro Sérgio', 'Empresa de qualidade, não me decepcionou, uma equipe de peso e produtos incríveis...\r\n', '2022-06-15 02:12:25'),
(7, '778c2d4c5f49048c5456f37806c56a82.png', 'Marcus Pessoa', 'Gostei muito da empresa, produtos de excelente qualidade somado ao bom atendimento dos funcionários!', '2022-06-15 02:11:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `novidade`
--

CREATE TABLE `novidade` (
  `id` int(11) NOT NULL,
  `imgNovidade` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `novidade`
--

INSERT INTO `novidade` (`id`, `imgNovidade`, `titulo`, `descricao`, `data`) VALUES
(5, 'f5e5c0b64c58c258f7189fa9a009da8f.jpg', 'Novos Nobreaks', '<b>Contrary</b> to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-06-16 01:45:49'),
(6, '128815282a59fd7ee4c8e7944191c92c.jpg', 'Novo Modelo APC BZ600BI-BR', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-06-16 01:25:09'),
(8, 'cf7c7a85e2db972223f3ba92795dc7ee.jpg', 'NHS Compact Plus III Chega com melhor Preço de Mercado', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', '2022-06-16 01:26:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `imgProduto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `imgProduto`, `nome`, `descricao`, `data`) VALUES
(14, '836983a98537a1f020bd3cfa037fbcdf.jpg', 'Lorem Ipsum', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', '2022-06-16 01:59:07'),
(15, 'da5c25968d951e3dd54453a9599ddba1.jpg', 'Lorem Ipsum', '<p>ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay.<br></p>', '2022-06-16 02:05:33'),
(16, '61f49f3f43d393973eed1b8eda5028db.jpg', 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nayipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay&nbsp;ipsum dolor sit amet consecteur lascent for florem the nay</p>', '2022-06-16 02:04:39');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `novidade`
--
ALTER TABLE `novidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `novidade`
--
ALTER TABLE `novidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
