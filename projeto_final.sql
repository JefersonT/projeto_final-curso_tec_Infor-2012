-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de GeraÁ„o: Out 11, 2012 as 02:01 PM
-- Vers„o do Servidor: 5.0.45
-- Vers„o do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `projeto_final`
-- 
CREATE DATABASE `projeto_final` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto_final`;

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `adm`
-- 

CREATE TABLE `adm` (
  `id` int(12) NOT NULL auto_increment,
  `nome` varchar(80) NOT NULL,
  `login` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `foto` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `adm`
-- 

INSERT INTO `adm` (`id`, `nome`, `login`, `senha`, `foto`) VALUES 
(1, 'Usuario Primario', 'primario', '4977', '[1]usuario.png');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `admp`
-- 

CREATE TABLE `admp` (
  `id` int(10) NOT NULL auto_increment,
  `foto` varchar(200) default NULL,
  `nome` varchar(80) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Extraindo dados da tabela `admp`
-- 

INSERT INTO `admp` (`id`, `foto`, `nome`, `login`, `senha`) VALUES 
(7, '[3]usuario_p2.png', 'Usuario Primario', 'primario', '4977');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `cadastrar_produto`
-- 

CREATE TABLE `cadastrar_produto` (
  `id` int(11) NOT NULL auto_increment,
  `foto` varchar(200) NOT NULL,
  `produto` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `preco` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Extraindo dados da tabela `cadastrar_produto`
-- 

INSERT INTO `cadastrar_produto` (`id`, `foto`, `produto`, `marca`, `peso`, `preco`) VALUES 
(6, 'choccolate.jpg', 'Caixa de Chocolate', 'Garoto', '500g', 5),
(7, 'coca_cola.jpg', 'Refrigerante', 'Coca Cola', '2L', 5),
(8, 'seda.jpg', 'Shampoo', 'Seda', '300ml', 8),
(9, 'leite_em_po.jpg', 'Leite em p√≥', 'Ninho', '400g', 3),
(10, 'leite_condensado.jpg', 'Leite condensado', 'Mo√ßa', '200ml', 2);

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `comentarios`
-- 

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Extraindo dados da tabela `comentarios`
-- 

INSERT INTO `comentarios` (`id`, `nome`, `email`, `mensagem`) VALUES 
(4, 'J.T', 'jtf.10@hotmail.com', 'Agora sim o site esta ficando show de bola...'),
(11, 'Cicrano', 'cici@hotmail.com', 'Pucha, como esta legau ese site do H&C.'),
(14, 'nataly', 'nat@hotmail.com', 'Muito legal...'),
(15, 'O criador', 'ocriador@hotmail.com', 'o meu site esta ficando d mais com todos os bancos q eu estou croando e colocando no meu site, sem contar o sistema de login e senha q eu coloquei.');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `duvidas`
-- 

CREATE TABLE `duvidas` (
  `id` int(10) NOT NULL auto_increment,
  `nome` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pergunta` longtext NOT NULL,
  `resposta` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Extraindo dados da tabela `duvidas`
-- 

INSERT INTO `duvidas` (`id`, `nome`, `email`, `pergunta`, `resposta`) VALUES 
(2, 'Cicrano', 'cici@hotmail.com', 'Quem foi o desenvolvedor deste site?', 'foi o Jeferson Torres.'),
(3, 'Jo√£o Timbo', 'joti@hotmail.com', 'Como esse site funciona?', 'Funciona com banco de dados em php.kkk'),
(4, 'Luis Marcos', 'luma@hotmail.com', 'cara este site foi desenvolvido com o alxilio de que programa?', 'foi digitado todo no adobe dreamweaver. afdfdsfas fsadfdsagadsgaq agfasgfsad fasfaq fds '),
(5, 'sghjkl', 'vghasdfghjk', 'dfrecfew cre vce rvcfevwre vwrev rew vc w?', 'dsxuctrcf cx6rfd ytyufduyduy t  ');
