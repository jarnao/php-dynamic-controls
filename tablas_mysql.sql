CREATE TABLE `calificacion` (
`idcalificacion` int(11) NOT NULL AUTO_INCREMENT,
`nombre_calificacion` varchar(20) DEFAULT NULL,
`peso` int(11) DEFAULT NULL,
PRIMARY KEY (`idcalificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8$$

CREATE TABLE `estudiante` (
`coduniv` varchar(10) NOT NULL,
`nombre_completo` varchar(50) DEFAULT NULL,
PRIMARY KEY (`coduniv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

CREATE TABLE `notas` (
`idnota` int(11) NOT NULL AUTO_INCREMENT,
`coduniv` varchar(10) DEFAULT NULL,
`idcalificacion` int(11) DEFAULT NULL,
`nota` int(11) DEFAULT NULL,
PRIMARY KEY (`idnota`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8$$

CREATE TABLE `promedios` (
`idpromedio` int(11) NOT NULL AUTO_INCREMENT,
`coduniv` varchar(10) DEFAULT NULL,
`promedio` int(11) DEFAULT NULL,
PRIMARY KEY (`idpromedio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8$$



INSERT INTO `calificacion` (`idcalificacion`, `nombre_calificacion`, `peso`) VALUES (1,'P1',10);
INSERT INTO `calificacion` (`idcalificacion`, `nombre_calificacion`, `peso`) VALUES (2,'P2',20);
INSERT INTO `calificacion` (`idcalificacion`, `nombre_calificacion`, `peso`) VALUES (3,'P3',30);
INSERT INTO `calificacion` (`idcalificacion`, `nombre_calificacion`, `peso`) VALUES (4,'P4',40);

INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000001','Jose Arnao');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000002','Leticia Sucacahua');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000003','Talia Quispe');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000004','William Saman');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000005','Paul Sanchez');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000006','Giovani Simon');
INSERT INTO `estudiante` (`coduniv`, `nombre_completo`) VALUES ('0000000007','Carmen Aliaga');
