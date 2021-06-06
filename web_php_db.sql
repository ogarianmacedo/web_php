CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` date NOT NULL,
  `modificado` date NOT NULL,
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_categoria` (`nome`, `criado`, `modificado`) VALUES
('Eletrônicos', '2021-06-03', '0000-00-00'),
('Acessórios', '2021-06-03', '0000-00-00'),
('Instrumentos', '2021-06-04', '0000-00-00');

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `resumo` varchar(500) NOT NULL,
  `descricao` text NOT NULL,
  `valor` float NOT NULL,
  `tag` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `situacao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `criado` date NOT NULL,
  `modificado` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_produto` (`nome`, `resumo`, `descricao`, `valor`, `tag`, `description`, `arquivo`, `situacao_id`, `categoria_id`, `criado`, `modificado`) VALUES
('Contra Baixo Elétrico 4 Cordas', 'Contra Baixo El&eacute;trico 4 Cordas Auburn Music AUBCB411 Jazz Bass Preto', 'Sabemos que a m&uacute;sica &eacute; uma forma de expressar os sentimentos e por isso desenvolvemos instrumentos que representem eles com a melhor qualidade poss&iacute;vel. Os instrumentos Auburn Music s&atilde;o produzidos com cuidado e aten&ccedil;&atilde;o aos detalhes, com isso eles significam muito mais.&nbsp;O corpo do baixo &eacute; forjado em madeira de qualidade e desenhado para os m&uacute;sicos que querem conforto ao tocar o instrumento.&nbsp;O Contrabaixo &eacute; resistente para garantir o desempenho do m&uacute;sico, possui tamb&eacute;m um captador de &aacute;udio de alto padr&atilde;o, garantindo um &aacute;udio profissional.&nbsp;A afina&ccedil;&atilde;o &eacute; essencial para reproduzir os acordes com sucesso.', 1850.99, 'contra baixo', 'contra baixo', 'baixo.jpg', 5, 3, '2021-06-04', '2021-06-04'),
('Bateria Nagano Concert', 'Bateria Nagano Concert Full Lacquer BM Black Mist + Ferragem', 'A s&eacute;rie CONCERT vem conquistando o mercado gra&ccedil;as ao seu conjunto de requisitos obrigat&oacute;rios para bateristas de diversos estilos e realidades de trabalho. Tudo baseado em qualidade, sonoridade, ergonomia, design e pre&ccedil;o acess&iacute;vel. Os tambores da s&eacute;rie CONCERT s&atilde;o constru&iacute;dos com uma combina&ccedil;&atilde;o de folhas de Birch e Basswood. A sonoridade &eacute; clara, macia e focada, sem sobras de harm&ocirc;nicos e excelente resolu&ccedil;&atilde;o das baixas frequ&ecirc;ncias. S&atilde;o baterias para utiliza&ccedil;&atilde;o em v&aacute;rios tipos de din&acirc;micas e espa&ccedil;os ac&uacute;sticos. O processo de afina&ccedil;&atilde;o &eacute; r&aacute;pido e f&aacute;cil, al&eacute;m de poderem ser microfonadas em qualquer situa&ccedil;&atilde;o ac&uacute;stica com &oacute;timos resultados. O som &eacute; f&aacute;cil, redondo e imediato. Muitas empresas de loca&ccedil;&atilde;o e &aacute;udio vem escolhendo os modelos CONCERT gra&ccedil;as a sua SONORIDADE. Hoje, somos a BATERIA OFICIAL do festival &quot;VILLA MIX&quot;. O maior festival SERTANEJO do Brasil. S&atilde;o 02 linhas completos com possibilidade de expans&atilde;o: CONCERT LACQUER e CONCERT CELLULOID. A configura&ccedil;&atilde;o FULL &eacute; composta por Bumbo de 22&quot;x18&quot; com 20 afinadores e peles com anel abafador em ambos os lados, Caixa 14&quot;x6.5&quot; com 10 afinadores , autom&aacute;tico de a&ccedil;&atilde;o lateral e peles &quot;coated&quot; (porosas). Uma caixa com sonoridade cheia, sensibilidade de esteira, defini&ccedil;&atilde;o de ataque e um &quot;rim shot&quot; consider&aacute;vel. Os Toms s&atilde;o de 10&quot;x08&quot; e 12&quot;x09&quot; montados com sistema de suspens&atilde;o tipo &quot;Rims&quot;, adapters Multi-Clamp cromados e tom holders &quot;joint ball&quot; incluindo uma trava de mem&oacute;ria. A fixa&ccedil;&atilde;o dos toms nas estantes de prato, possibilita uma infinidade de regulagens, al&eacute;m de um ganho na sonoridade geral dos tambores. S&atilde;o 02 surdos de 14&quot;?x14&quot; e 16&quot;x16&quot;. A sonoridade cl&aacute;ssica dos surdos de ch&atilde;o em uma combina&ccedil;&atilde;o moderna e profissional. Com pequenas altera&ccedil;&otilde;es na afina&ccedil;&atilde;o, estes surdos podem soar muito ressonantes ou bem focados, com uma &oacute;tima resolu&ccedil;&atilde;o nos graves e no peso final.', 4030.99, 'bateria', 'bateria', 'bateria.jpg', 5, 3, '2021-06-04', '2021-06-04');

CREATE TABLE `tb_situacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `criado` date NOT NULL,
  `modificado` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_situacao` (`nome`, `criado`, `modificado`) VALUES
('Em Estoque', '2021-06-03', '0000-00-00'),
('Esgotado', '2021-06-03', '0000-00-00');

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_acesso` varchar(50) NOT NULL,
  `criado` date NOT NULL,
  `modificado` date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_usuario` (`nome`, `email`, `usuario`, `senha`, `nivel_acesso`, `criado`, `modificado`) VALUES
('Administrador', 'admin@email.com', 'admin', '123456', 'ADMINISTRADOR', '2021-06-03', '2021-06-04'),
('Usuário', 'user@email.com', 'user', '123456', 'USUARIO', '2021-06-04', '0000-00-00');
