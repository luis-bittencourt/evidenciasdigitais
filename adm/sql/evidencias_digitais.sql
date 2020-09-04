CREATE DATABASE IF NOT EXISTS BD_3Digs;

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `CODIGO` int(5) NOT NULL AUTO_INCREMENT,
  `TIPO_USUARIO` varchar(15) DEFAULT NULL,
  `NOME_USUARIO` varchar(50) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `SEXO` char(1) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  `USUARIO_REGISTRO` int(5) DEFAULT NULL,
  `IP_REGISTRO` varchar(50) DEFAULT NULL,
  `REGISTRO_DATAHORA` datetime DEFAULT NULL,
  `USUARIO_UPDATE` int(5) DEFAULT NULL,
  `IP_UPDATE` varchar(50) DEFAULT NULL,
  `UPDATE_DATAHORA` datetime DEFAULT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`CODIGO`, `TIPO_USUARIO`, `NOME_USUARIO`, `CPF`, `SEXO`, `DATA_NASCIMENTO`, `EMAIL`, `SENHA`, `USUARIO_REGISTRO`, `IP_REGISTRO`, `REGISTRO_DATAHORA`, `USUARIO_UPDATE`, `IP_UPDATE`, `UPDATE_DATAHORA`) VALUES
(1, 'ADM', 'Luís Fernando da Silva Bittencourt', '555.075.300-68', 'M', '1967-11-23', 'bittencourt.lf@gmail.com', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2019-12-13 00:00:00', NULL, '::1', '2020-01-16 12:16:41'),
(2, 'CLIENTE', 'Daniele Sorio', '653.750.250-00', 'F', '1970-09-03', 'danielesorio@hotmail.com', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2019-12-16 12:42:49', NULL, NULL, NULL),
(3, 'CLIENTE', 'Fulano de Tal', '380.163.310-17', 'M', '2000-01-07', 'fulano@gmail.com', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2019-12-16 13:20:13', NULL, NULL, NULL),
(4, 'CLIENTE', 'Pedro Assis de Paula', '239.765.520-97', 'M', '1987-11-23', 'assis@hotmail.com', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2020-01-14 18:37:09', NULL, NULL, NULL),
(5, 'CLIENTE', 'João Francisco Oscar', '411.910.210-68', 'M', '1978-11-11', 'joao@joao.com.br', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2020-01-16 12:44:54', NULL, NULL, NULL),
(6, 'CLIENTE', 'Almirante barros e saliva', '958.550.440-50', 'M', '1985-12-23', 'barros@almirante.com', '894a9644390dbcac3ddd1b6c1bc4cd57', NULL, '::1', '2020-03-30 22:15:14', NULL, NULL, NULL);
COMMIT;