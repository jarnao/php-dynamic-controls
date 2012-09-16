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