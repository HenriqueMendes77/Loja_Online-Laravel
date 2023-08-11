DROP DATABASE IF EXISTS dblaravel;
CREATE DATABASE dblaravel;

USE dblaravel;

/*
CREATE TABLE tbCliente(
    idCliente int(9) NOT NULL AUTO_INCREMENT,
    nome varchar(250) NOT NULL,
    dtNasc date NOT NULL,
    estadoCivil enum('solteiro','casado','outro'),
    endereco varchar(250) NOT NULL,
    numero int(4) NOT NULL,
    complemento varchar(250),
    cep varchar(9) NOT NULL,
    cidade varchar(250) NOT NULL,
    estado varchar(250) NOT NULL,
    rg varchar(20) NOT NULL UNIQUE,
    cpf varchar(20) NOT NULL UNIQUE,
    email varchar(250) NOT NULL UNIQUE,
    fone varchar(20) NOT NULL,
    cel varchar(20) NOT NULL,
    senha varchar(250) NOT NULL,
    PRIMARY KEY(idCliente)
);
*/

CREATE TABLE tbCliente(
    idCliente int(9) NOT NULL AUTO_INCREMENT,
    nome varchar(250) NOT NULL,
    email varchar(250) NOT NULL,
    senha varchar(250) NOT NULL,
    PRIMARY KEY(idCliente)
);

CREATE TABLE tbCategoria(
    idCategoria int(5) NOT NULL AUTO_INCREMENT,
    categoria varchar(250) NOT NULL,
    PRIMARY KEY(idCategoria)
);

CREATE TABLE tbProduto(
    idProduto int(9) NOT NULL AUTO_INCREMENT,
    idCategoria int(5) NOT NULL,
    produto varchar(250) NOT NULL,
    quantidade int(4),
    valor float NOT NULL,
    descprod varchar(550),
    imagem varchar(250) DEFAULT 'img/produto.png',
    PRIMARY KEY(idProduto),
    CONSTRAINT `fk_idCategoria_produto` FOREIGN KEY (`idCategoria`) REFERENCES `tbCategoria` (`idCategoria`)
);

CREATE TABLE tbContato(
    idContato int NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    email varchar(40) NOT NULL,
    fone varchar(40) NOT NULL,
    assunto varchar(40) NOT NULL,
    mensagem varchar(500) NOT NULL,
    PRIMARY KEY(idContato)
);

CREATE TABLE tbPedido(
	idPedido int(5) NOT NULL AUTO_INCREMENT,
	idCliente int(9) NOT NULL,
    idCategoria int(5) NOT NULL,
    idProduto int(9) NOT NULL,
    dataPedido date NOT NULL,
    entregue boolean,
    PRIMARY KEY(idPedido),
    CONSTRAINT `fk_idCliente_pedido` FOREIGN KEY (`idCliente`) REFERENCES `tbCliente` (`idCliente`),
    CONSTRAINT `fk_idProduto_pedido` FOREIGN KEY (`idProduto`) REFERENCES `tbProduto` (`idProduto`),
    CONSTRAINT `fk_idCategoria_pedido` FOREIGN KEY (`idCategoria`) REFERENCES `tbCategoria` (`idCategoria`)
);

/*DADOS DO BANCO*/
/*INSERT INTO tbCliente VALUES
(NULL, 'Bruno Lima', '2005-03-31', 'solteiro', 'Rua da Mooca', '3129', 'Casa 3', '102937192', 'São Paulo', 'São Paulo', '3192818363', '192931813', 'brumencarini89@gmail.com', '26076341', '981046461', 'bruno123');*/

INSERT INTO tbCategoria VALUES
(NULL, 'Notebook'),
(NULL, 'Mouse'),
(NULL, 'Fone'),
(NULL, 'Projetor'),
(NULL, 'Tablet'),
(NULL, 'TV'),
(NULL, 'Relógio'),
(NULL, 'Eletrodoméstico'),
(NULL, 'Pelúcia'),
(NULL, 'PC Gamer'),
(NULL, 'Celular');

INSERT INTO tbProduto VALUES
(NULL, '1', 'Notebook gamer Dell G15', '202', 5697.00, 'O novo e aprimorado design térmico inspirado no Alienware oferece a refrigeração ideal, graças a duas entradas de ar, blades ultrafinos de ventilador*, tubos de cobre e quatro aberturas de ventilação estrategicamente colocadas. E com processadores Intel® i5 de 12 núcleos ou i7 de 14 núcleos de até 12ª geração, além de perfis de desempenho otimizados, você pode se deleitar com desempenho avançado e consistente durante todas as experiências gamers.', 'img/notebookG15.png'),
(NULL, '2', 'Mouse Classic Box Óptico Full Black USB - MO300', '180', 8.99, 'Supimpa, compra aí e da dinheiro pra nois', 'img/mouseclassic.png'),
(NULL, '3', 'Fone de Ouvido Sem Fio, HUAWEI Freebuds 4i, TWS, Bluetooth, Cancelamento de Ruído Ativo, Som com Qualidade, Carregamento Rápido, Preto - FREEBUDSPTO', '197', 299.00, 'Fone de Ouvido Sem Fio Huawei Free Buds 4I Pequenos em tamanho. Modernos no design. Com estojo de carga oval, o Huawei FreeBuds 4i possui um visual original, compacto e moderno. Leve, você consegue levá-lo para qualquer lugar.', 'img/fonehuawei.png'),
(NULL, '10', 'PC Gamer Fácil Intel Core I7, 16GB RAM, Nvidia GeForce Gtx 1050ti 4GB, SSD 480GB, Fonte 500w, Windows 10, Preto', '139', 3248.10, 'PC Gamer Fácil Intel Core I7, 16GB, Gtx 1050ti 4GB, SSD 480GB, Fonte 500w, Windows 10, Preto', 'img/pcfacil.png'),
(NULL, '10', 'PC Gamer Acer Predator Orion 5000 Intel Core i7-11700, RGB, NVIDIA GeForce RTX3070, 16GB RAM, SSD 1TB, Windows 11 Home, Preto - DG.E2QAL.006', '245', 10699.99, 'PC Gamer Acer Predator Orion 5000 Intel Core i7-11700, RGB, NVIDIA GeForce RTX3070, 16GB RAM, SSD 1TB, Windows 11 Home, Preto', 'img/pcacer.png'),
(NULL, '5', 'Tablet Samsung Galaxy A7 Lite 4G, 32GB, Android 11, Tela de 8.7, Grafite - SM-T225NZAPZTO', '243', 829.00, 'Galaxy Tab A7 Lite (4G) 32 GB, Projetado para ir aonde você for com gestos simples para usar com apenas uma mão e possui uma câmera para capturar seus momentos ao vivo Feito para ir aonde você for Não troque estilo por conveniência. O Galaxy Tab A7 Lite oferece os dois em uma estrutura fina. Com espessura de 8,0 mm e 371 g de peso, ele é super portátil e pode ser guardado com facilidade na bolsa sem pesar.', 'img/tableta7.png'),
(NULL, '6', 'Smart TV Samsung 50 Polegadas UHD 4K, 3 HDMI, 1 USB, Processador Crystal 4K, Tela sem limites, Visual Livre de Cabos, Alexa - UN50AU7700GXZD', '103', 2449.99, 'O processador Crystal 4K transforma tudo o que você assiste em resolução próxima à 4K. Todos os produtos UHD 4K da Samsung são certificados pela CEA (Consumer Eletronics Association) e DE (Digital Europe). Estas entidades estabeleceram critérios mínimos para certificar um produto como o UHD 4K, entre eles, garantir que o produto tenha em cada pixel a capacidade de reproduzir todas as cores.', 'img/tv50pol.png'),
(NULL, '3', 'Fone de Ouvido Sem Fio Sennheiser HD 250BT, Bluetooth 5.0, com Microfone, Preto - 509179', '80', 259.99, 'O HD 250BT foi inspirado na mesma experiência de áudio vivida pelos mais renomados Djs do mundo. A famosa tecnologia de transdutores da Sennheiser garante um áudio de qualidade com graves dinâmicos.', 'img/fonebluetooth.png'),
(NULL, '4', 'Projetor LG CineBeam Smart TV 140, UHD 4K, HDR10, 1500 ANSI Lumens, HDMI/USB, Bluetooth, Wi-Fi, Branco - HU70LA', '32', 5999.99, 'Projetor LG CineBeam Smart TV O sonho de ter um cinema em casa virou realidade O LG CineBeam HU70LA projeta uma impressionante tela até 140 polegadas, com uma resolução UHD 4K nítida, vívida e brilhante. São intensos 8,3 milhões de pixels e tecnologia XPR, assim o HU70LA da LG oferece detalhes e precisão impecáveis 4 vezes maior que o Full HD.', 'img/projetorlg.png'),
(NULL, '11', 'Smartphone Samsung Galaxy S22, 8GB RAM, 128GB, Câmera Tripla 50MP, Tela 6.1, Preto - SM-S901EZKRZTO', '106', 4499.00, 'Smartphone Samsung Galaxy S22, 8GB RAM, 128GB, Câmera Tripla 50MP, Tela 6.1, Preto - SM-S901EZKRZTO', 'img/samsungs22.png'),
(NULL, '7', 'Smartwatch Samsung Galaxy Watch 4, Bluetooth, 40mm, Preto - SM-R860NZKPZTO', '256', 979.00, 'Smartwatch Samsung Galaxy Watch 4, Bluetooth, 40mm, Preto.', 'img/smartwatch.png'),
(NULL, '3', 'Fone de Ouvido Samsung Galaxy Buds Pro, Cancelamento de Ruído, Violeta - SM-R190NZVPZTO', '299', 679.00, 'O Galaxy Buds Pro é um fone de ouvido totalmente sem fio, o que te dá maior liberdade atividades tanto no dia-a-dia, no lazer ou para o esporte, enquanto aproveita um som mais imersivo.', 'img/galaxybuds.png'),
(NULL, '11', 'Smartphone Samsung Galaxy S20 FE 128GB, 6GB RAM, Snapdragon 865, Câmera Tripla, Carregamento Super Rápido, Cloud Navy - SM-G780GZBRZTO', '111', 2324.80, 'Este é o smartphone para pessoas que querem tudo. Ouvimos vocês, os fãs, e agora não precisam mais ficar em dúvida sobre o que escolher. Este é o smartphone feito sob medida para fãs de todos os tipos. Então, se você é fã de fotografia, jogos ou adora deixar seu feed repleto de tudo que o inspira, nós reunimos a combinação definitiva de inovação S20.', 'img/samsungs20.png'),
(NULL, '10', 'PC Gamer OnPress OnGaming Intel Core i5-10400F, RGB, 8GB, GeForce GTX 1650, SSD 256GB, Linux, Preto - OGARM-X1065', '258', 4399.99, 'O Computador é equipado com uma Fonte de alimentação de 450W reais com 80 Plus Bronze, que traz energia estável para não ter nenhum problema enquanto joga. O Gabinete Gamer MID Tower traz um visual gamer robusto, além do Sistema Operacional Linux, garantindo todos os novos recursos.', 'img/pconpress.png'),
(NULL, '10', 'Cadeira Gamer Husky Gaming Snow, Preto, Cilindro de Gás Classe 4, Base em Metal, Roda em Nylon - HSN-BK', '140', 529.99, 'A Cadeira Gamer Husky Gaming Snow proporciona alto conforto e qualidade para as melhores horas do seu dia! Tudo isso aliado a um ótimo custo benefício.', 'img/cadeiragamer.png'),
(NULL, '3', 'Headset Gamer HyperX Cloud Stinger, Drivers 50mm, Múltiplas Plataformas, P2 e P3 - HX-HSCS-BK/NA', '135', 149.99, 'Completa e versátil, a linha de headsets Cloud foi projetada para as necessidades de qualquer nível de jogador. Independente do seu sistema, estilo de jogo e características este headset irá te surpreender.', 'img/headset.png'),
(NULL, '8', 'Robô Aspirador de Pó KaBuM! Smart 700, Preto, Mapeamento IR 360º, Controle via Aplicativo, Google Assistant e Alexa - KBSF003', '289', 1399.99, 'O Robô Aspirador de Pó IR 360º KaBuM! Smart 700 é uma revolução para o seu lar!', 'img/aspirador1.png'),
(NULL, '8', 'Robô Aspirador de Pó KaBuM! Smart 500, Preto - Recarregamento Automático, Filtro HEPA, Controle via Aplicativo - KBSF000', '258', 889.99, 'Controle seu Robô Aspirador de Pó KaBuM! Smart 500 diretamente se seu Smartphone através do App KaBuM! Smart. Pelo app você pode visualizar os níveis de bateria, alterar a potência de sucção, fazer agendamento de horários de funcionamento e diversas outras funções!', 'img/aspirador2.png'),
(NULL, '9', 'Polvo Reversível Bipolar de Pelúcia Humor Feliz e Bravo 2 em 1 TikTok Fofinho Macio - Rosa e Azul', '190', 9.19, 'Esse lindo polvo de pelúcia é muito engraçadinho e fofo. Use para demonstrar que está cheio de alegria e também para mostrar quando está bravo (a). Produto com cores vivas, material de excelente qualidade e muito macio. Perfeito para brincar e decorar seu ambiente.', 'img/polvopelucia.png'),
(NULL, '9', 'Urso de Pelúcia 21 cm Sentado Docinho Pérola', '178', 43.70, 'Para cada ocasião diferente, existe uma pelúcia que encanta. Seja para presentar um amor, um amigo, seja para ver o sorriso lindo estampado no rosto de uma criança ou até mesmo para se tornar o companheiro imseparável de alguém!', 'img/ursinhopelucia.jpg');
