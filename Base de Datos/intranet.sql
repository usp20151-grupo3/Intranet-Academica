-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2015 a las 21:01:03
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `intranet`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `activar_usuario`(IN `idusu` INT(11))
    NO SQL
    SQL SECURITY INVOKER
update usuario 
set estado = '1' 
where idusuario = idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_correo`(IN `idper` INT(11), IN `cor` VARCHAR(50))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set email = cor 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_direccion`(IN `idper` INT(11), IN `dir` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set direccion = dir 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_persona`(IN `idp` INT(11), IN `nom` VARCHAR(30), IN `ape` VARCHAR(30), IN `dni` CHAR(8), IN `sex` CHAR(1), IN `dir` VARCHAR(100), IN `tel` CHAR(15), IN `cor` VARCHAR(50), IN `est` CHAR(1))
    NO SQL
update persona 
set nombre = nom,
apellido = ape,
dni = dni,
sexo = sex,
direccion = dir,
telefono = tel,
email = cor,
estado = est 
where idpersona = idp$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_pregunta`(IN `idusu` INT(11), IN `preg` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
update usuario 
set pregunta = preg 
where idusuario = idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_respuesta`(IN `idusu` INT(11), IN `resp` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
update usuario 
set respuesta = resp 
where idusuario = idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_telefono`(IN `tel` CHAR(15), IN `idper` INT(11))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set telefono = tel 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `baja_grupo_usuario`(IN `idr` INT(11))
    NO SQL
    SQL SECURITY INVOKER
update rol 
set estado = '0'
where idrol = idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `baja_usuario`(IN `idusu` INT(11))
    NO SQL
    SQL SECURITY INVOKER
update usuario 
set estado = '0' 
where idusuario = idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_persona`(IN `idp` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from persona where idpersona = idp$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_alumno`(IN `ida` INT, IN `idp` INT, IN `cod` CHAR(10), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update alumno 
set 
idpersona = idp,
codigo = cod,
estado = est 
where idalumno = ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_apoderado_x_idalumno`(IN `idp` INT(11), IN `ida` INT(11), IN `par` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update apoderado 
set 
idpersona = idp,
parentesco = par,
estado = est 
where idalumno = ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_apoderado_x_suid`(IN `idp` INT(11), IN `ida` INT(11), IN `par` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update apoderado 
set 
idalumno = ida,
parentesco = par,
estado = est
where idpersona = idp$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_asistencia`(IN `idm` INT(11), IN `est` CHAR(1), IN `jus` VARCHAR(100), IN `com` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
update asistencia 
set 
estado = est,
justificacion = jus,
comentario = com 
where idmatricula = idm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_curso`(IN `idc` INT(11), IN `nom` CHAR(50), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update curso 
set 
descripcion = nom,
estado = est 
where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_curso_grupo_a_docente_x_idcurso`(IN `idc` INT(11), IN `idt` INT(11), IN `idg` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update docentecurso 
set 
idtrabajador = idt,
idgrupo = idg,
estado = est 
where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_curso_grupo_a_docente_x_idgrupo`(IN `idc` INT(11), IN `idg` INT(11), IN `idt` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update docentecurso 
set 
idcurso = idc,
idtrabajador = idt,
estado = est 
where idgrupo = idg$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_curso_grupo_a_docente_x_idtrabajador`(IN `idc` INT(11), IN `idt` INT(11), IN `idg` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update docentecurso 
set 
idcurso = idc,
idgrupo = idg,
estado = est 
where idtrabajador = idt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_matricula`(IN `idm` INT(11), IN `ida` INT(11), IN `idp` INT(11), IN `idg` INT(11), IN `niv` CHAR(1), IN `gra` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update matricula 
set 
idalumno = ida,
idpersona = idp,
idgrupo = idg,
nivel = niv,
grado = gra,
estado = est 
where idmatricula = idm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_persona`(IN `id` INT(11), IN `nom` VARCHAR(30), IN `ape` VARCHAR(30), IN `doc` CHAR(8), IN `sex` CHAR(1), IN `dir` VARCHAR(100), IN `tel` CHAR(15), IN `cor` VARCHAR(50), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set 
nombre = nom,
apellido = ape,
dni = doc,
sexo = sex,
direccion = dir,
telefono = tel,
email = cor,
estado = est
where idpersona = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_trabajador`(IN `idt` INT(11), IN `idp` INT(11), IN `cod` CHAR(10), IN `rol` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update trabajador 
set 
idpersona = idp,
codigo = cod,
rol = rol,
estado = est 
where idtrabajador = idt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nombre_persona_usuario`(IN `user` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select persona.nombre, persona.apellido 
from usuario 
inner join persona 
on usuario.idpersona = persona.idpersona
where usuario.usuario = user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_acceso`(IN `idusu` INT(11), IN `ip` VARCHAR(15))
    NO SQL
    SQL SECURITY INVOKER
insert into historial (idusuario,ipacceso) values (idusu,ip)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_alumno`(IN `idp` INT(11), IN `cod` CHAR(10), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into alumno (idpersona,codigo,estado)
values (idp,cod,est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_apoderado`(IN `idp` INT(11), IN `ida` INT(11), IN `par` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into apoderado 
values (idp,ida,par,est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_asistencia`(IN `idm` INT(11), IN `est` CHAR(1), IN `jus` VARCHAR(100), IN `com` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
insert into asistencia 
values (getdate(),idm,est,just,com)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_curso`(IN `des` VARCHAR(50), IN `cod` CHAR(16), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into curso (descripcion, codigo, fecharegistro, estado) 
values (des, cod, now(), est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_curso_y_alumno_a_docente`(IN `idc` INT(11), IN `idt` INT(11), IN `idg` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into docentecurso 
values (idc,idt,idg,getdate(),est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_docente`(IN `idp` INT(11), IN `cod` CHAR(10), IN `idr` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into trabajador (idpersona, codigo, idrol, estado) 
values (idp, cod, idr, est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_grupo_usuario`(IN `des` CHAR(30), IN `fecvig` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into rol (descripcion, fechaalta, fechavigencia, estado)
values (`des`, now(), fecvig, est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_matricula`(IN `ida` INT(11), IN `idp` INT(11), IN `idg` INT(11), IN `niv` CHAR(1), IN `gra` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into matricula 
values (null,ida,idp,idg,niv,gra,getdate(),est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_persona`(IN `nom` VARCHAR(30), IN `ape` VARCHAR(30), IN `doc` CHAR(8), IN `sex` CHAR(1), IN `dir` VARCHAR(100), IN `tel` CHAR(15), IN `cor` VARCHAR(50), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
INSERT INTO persona  (nombre,apellido,dni,sexo,direccion,telefono,email,estado) 
VALUES (nom,ape,doc,sex,dir,tel,cor,est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_trabajador`(IN `idp` INT(11), IN `cod` CHAR(10), IN `rol` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into trabajador 
values (null,idp,cod,rol,est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_usuario`(IN `idper` INT(11), IN `rol` INT(11), IN `usu` VARCHAR(20), IN `pass` VARCHAR(50), IN `preg` VARCHAR(100), IN `res` VARCHAR(100), IN `fec` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
INSERT INTO `usuario` (`idpersona`, `idrol`, `usuario`, `password`, `pregunta`, `respuesta`, `fechaalta`, `fechavigencia`, `estado`) VALUES (idper, rol, usu, pass, preg, res, now(), fec, est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_alumno`()
    NO SQL
    SQL SECURITY INVOKER
select alumno.idalumno, persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_curso`()
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion, codigo, fecharegistro, case estado when '1' 
then 'Activo' when '0' then 'Inactivo' end as estado from curso$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_curso_x_id`(IN `idc` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion 
from curso 
where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_docente`()
    NO SQL
    SQL SECURITY INVOKER
select trabajador.idtrabajador, persona.nombre, persona.apellido, trabajador.codigo, case trabajador.estado when '1' then 'Activo' when '0' 
then 'Inactivo' end as estado from trabajador 
inner join persona 
on persona.idpersona = trabajador.idpersona 
where trabajador.idrol = 3$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_docente_x_curso`()
    NO SQL
    SQL SECURITY INVOKER
SELECT curso.descripcion, persona.nombre, persona.apellido
FROM docentepersona 
INNER JOIN curso
ON docentepersona.idcurso = curso.idcurso
INNER JOIN trabajador
ON docentepersona.idtrabajador = trabajador.idtrabajador
INNER JOIN persona
ON trabajador.idpersona = persona.idpersona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_grupo_usuario`(IN `idr` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from rol where idrol = idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_nota_x_grado`(IN `gra` INT(11))
    NO SQL
    SQL SECURITY INVOKER
SELECT matricula.grado, persona.nombre, persona.apellido, curso.descripcion, nota.promediofinal
FROM matricula
INNER JOIN alumno 
ON matricula.idalumno = alumno.idalumno
INNER JOIN persona
ON alumno.idpersona = persona.idpersona
INNER JOIN nota
ON matricula.idmatricula = nota.idmatricula
INNER JOIN curso
ON nota.idcurso = curso.idcurso
WHERE matricula.grado = gra$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_nota_x_periodo_x_idalumno`(IN `idalu` INT(11))
    NO SQL
    SQL SECURITY INVOKER
SELECT matricula.grado, persona.nombre, persona.apellido, notaperiodo.periodo, notaperiodo.notaperiodo
FROM matricula
INNER JOIN alumno 
ON matricula.idalumno = alumno.idalumno
INNER JOIN persona
ON alumno.idpersona = persona.idpersona
INNER JOIN nota
ON matricula.idmatricula = nota.idmatricula
INNER JOIN notaperiodo
ON nota.idnota = notaperiodo.idnota
WHERE matricula.idalumno = idalu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_nota_x_promedio_final_x_idalumno`(IN `idalu` INT(11))
    NO SQL
    SQL SECURITY INVOKER
SELECT matricula.grado, persona.nombre, persona.apellido, curso.descripcion, nota.promediofinal
FROM matricula
INNER JOIN alumno 
ON matricula.idalumno = alumno.idalumno
INNER JOIN persona
ON alumno.idpersona = persona.idpersona
INNER JOIN nota
ON matricula.idmatricula = nota.idmatricula
INNER JOIN curso
on nota.idcurso = curso.idcurso
WHERE matricula.idalumno = idalu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_nota_x_seccion`(IN `sec` INT(11))
    NO SQL
SELECT grupo.seccion, persona.nombre, persona.apellido, curso.descripcion, nota.promediofinal
FROM matricula
INNER JOIN alumno 
ON matricula.idalumno = alumno.idalumno
INNER JOIN persona
ON alumno.idpersona = persona.idpersona
INNER JOIN nota
ON matricula.idmatricula = nota.idmatricula
INNER JOIN curso
ON nota.idcurso = curso.idcurso
INNER JOIN grupo
ON matricula.idgrupo = grupo.idgrupo
WHERE matricula.grado = sec$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_perfil`(IN `user` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select persona.direccion, persona.email, persona.telefono, usuario.pregunta, usuario.respuesta from usuario 
inner join persona 
on usuario.idpersona = persona.idpersona 
where usuario.usuario = user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_persona`()
    NO SQL
    SQL SECURITY INVOKER
Select `idpersona`, `nombre`, `apellido`, `dni`, 
case `sexo` when '1' then 'Masculino' 
when '2' then 'Femenino' 
end as sexo, 
`direccion`, `telefono`, `email`, `fecharegistro`, 
case `estado` 
when '1' then 'Activo' 
when '0' then 'Inactivo' end as estado 
From persona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_rol`()
    NO SQL
    SQL SECURITY INVOKER
select idrol, descripcion, fechaalta, fechavigencia, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from rol$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_usuario`()
    NO SQL
    SQL SECURITY INVOKER
SELECT usuario.`usuario`, persona.nombre, persona.apellido, case usuario.`idrol` when '1' then 'Director' when '2' then 'Administrador' when '3' then 'Docente' when '4' then 'Alumno' end as rol, usuario.`fechaalta`,usuario.`fechavigencia` FROM `usuario` inner join persona on usuario.idpersona = persona.idpersona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_usuario_his`()
    NO SQL
SELECT DISTINCT u.usuario AS Login, CONCAT(p.nombre,' ',p.apellido) AS Nombres, r.descripcion as Grupo, h.fechaacceso as facceso, h.ipacceso as ip, u.fechaalta as falta, u.fechavigencia as fvig
FROM usuario u
INNER JOIN persona p ON p.idpersona=u.idpersona
INNER JOIN rol r ON r.idrol=u.idrol
INNER JOIN historial h ON h.idusuario=u.idusuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_x_alumno`(IN `alu` INT)
    NO SQL
    SQL SECURITY INVOKER
select persona.nombre, persona.apellido 
from alumno 
inner join persona
on alumno.idpersona = persona.idpersona
where alumno.idalumno = alu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_x_curso`()
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion 
from curso$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_x_docente`(IN `prof` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
select persona.nombre, persona.apellido 
from trabajador
inner join persona
on trabajador.idpersona = persona.idpersona
where trabajador.rol = prof$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `verificar_usuario`(IN `usu` CHAR(50), IN `pass` CHAR(50))
    NO SQL
    SQL SECURITY INVOKER
select * 
from usuario 
where usuario = usu and `password` = pass$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
`idalumno` int(11) NOT NULL COMMENT 'Identificador del alumno.',
  `idpersona` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la persona.',
  `codigo` char(10) NOT NULL COMMENT 'Código del alumno.',
  `estado` char(1) NOT NULL COMMENT 'Estado de alumno. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `idpersona`, `codigo`, `estado`) VALUES
(1, 4, '222001', '1'),
(2, 5, '222002', '1'),
(3, 8, '222003', '1'),
(5, 12, '111145', '1'),
(6, 10, '11146', '1'),
(7, 14, '222009', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado`
--

CREATE TABLE IF NOT EXISTS `apoderado` (
  `idpersona` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la persona y a la vez sera el identificador del apoderado',
  `idalumno` int(11) NOT NULL COMMENT 'Llave foránea que identifica al alumno.',
  `parentesco` char(1) NOT NULL COMMENT 'Descripción del apoderado. (Padre, Madre, etc.)',
  `estado` char(1) NOT NULL COMMENT 'Estado del apoderado. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apoderado`
--

INSERT INTO `apoderado` (`idpersona`, `idalumno`, `parentesco`, `estado`) VALUES
(3, 1, '1', '1'),
(6, 2, '1', '1'),
(9, 3, '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro de asistencia.',
  `idmatricula` int(11) NOT NULL COMMENT 'Llave foránea que identifica la matrícula del alumno.',
  `estado` char(1) NOT NULL COMMENT 'Estado de la asistencia. Valores permitidos: Asistió, Faltó o Tardanza.',
  `justificacion` varchar(100) NOT NULL COMMENT 'Justificación de la asistencia (por si el alumno faltó o llegó tarde) ',
  `comentario` varchar(100) NOT NULL COMMENT 'Comentario sobre la asistencia.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`fecharegistro`, `idmatricula`, `estado`, `justificacion`, `comentario`) VALUES
('2015-05-02 01:13:23', 1, 'A', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idcurso` int(11) NOT NULL COMMENT 'Identificador del curso.',
  `descripcion` varchar(50) NOT NULL COMMENT 'Descripcion del curso.',
  `codigo` varchar(16) NOT NULL,
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro del curso.',
  `estado` char(1) NOT NULL COMMENT 'Estado del curso. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `descripcion`, `codigo`, `fecharegistro`, `estado`) VALUES
(1, 'Electivo II', '111000', '2015-06-13 05:00:08', '0'),
(2, 'Electivo I', '119999', '2015-06-13 05:06:03', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentecurso`
--

CREATE TABLE IF NOT EXISTS `docentecurso` (
  `idcurso` int(11) NOT NULL COMMENT 'Llave foránea que identifica al curso',
  `idtrabajador` int(11) NOT NULL COMMENT 'Llave foránea que identifica al docente',
  `idgrupo` int(11) NOT NULL COMMENT 'Llave foránea que identifica al grupo',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha y hora de registro',
  `estado` char(1) NOT NULL COMMENT 'Estado de la asignación docente-curso: Activo o Inactivo.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
`idgrupo` int(11) NOT NULL COMMENT 'Identificador del grupo.',
  `nivel` char(1) NOT NULL COMMENT 'Nivel del grupo. Valores permitidos: Primaria o Secundaria.',
  `grado` char(1) NOT NULL COMMENT 'Grado del grupo. Valores permitidos: 1, 2 ,3 ,4 ,5 o 6.',
  `seccion` char(1) NOT NULL COMMENT 'Sección del grupo. Valores permitidos: A, B, C o D.',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro del grupo.',
  `estado` char(1) NOT NULL COMMENT 'Estado del grupo. Valores permitidos: Activo, Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nivel`, `grado`, `seccion`, `fecharegistro`, `estado`) VALUES
(1, '1', '3', '1', '2015-04-07 20:56:03', '1'),
(2, '1', '1', '1', '2015-04-07 21:18:04', '1'),
(3, '2', '2', '2', '2015-04-07 21:18:29', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `idusuario` int(11) NOT NULL,
  `ipacceso` varchar(15) DEFAULT NULL,
  `fechaacceso` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`idusuario`, `ipacceso`, `fechaacceso`) VALUES
(1, NULL, '2015-06-04 19:44:19'),
(1, NULL, '2015-06-04 19:44:44'),
(1, NULL, '2015-06-04 19:46:37'),
(1, '192.178.1.1', '2015-06-08 22:10:31'),
(2, NULL, '2015-06-04 19:44:32'),
(2, NULL, '2015-06-04 19:44:47'),
(3, NULL, '2015-06-04 19:44:35'),
(3, NULL, '2015-06-04 19:44:50'),
(4, NULL, '2015-06-04 19:44:38'),
(4, NULL, '2015-06-04 19:44:53'),
(5, NULL, '2015-06-04 19:44:41'),
(5, NULL, '2015-06-04 19:44:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logro`
--

CREATE TABLE IF NOT EXISTS `logro` (
`idlogro` int(11) NOT NULL COMMENT 'Identificador del logro.',
  `descripcion` varchar(50) NOT NULL COMMENT 'Descripción del logro.',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro del logro.',
  `estado` char(1) NOT NULL COMMENT 'Estado del logro. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logrocurso`
--

CREATE TABLE IF NOT EXISTS `logrocurso` (
  `nivel` char(1) NOT NULL COMMENT 'Nivel al que pertenece el logro y el curso.',
  `idcurso` int(11) NOT NULL COMMENT 'Llave foránea que identifica al curso.',
  `idlogro` int(11) NOT NULL COMMENT 'Llave foránea que identifica al logro.',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del registro de la asignación del logro a un curso.',
  `estado` char(1) NOT NULL COMMENT 'Estado de la asignación del logro a un curso: Activo o Inactivo.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
`idmatricula` int(11) NOT NULL COMMENT 'Identificador de matrícula.',
  `idalumno` int(11) NOT NULL COMMENT 'Llave foránea que identifica al alumno.',
  `idpersona` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la persona y a la vez sera el identificador del apoderado.',
  `idgrupo` int(11) NOT NULL COMMENT 'Llave foránea que identifica a que grupo será matriculado el alumno',
  `nivel` char(1) NOT NULL COMMENT 'Nivel al que será matriculado el alumno. Valores permitidos: Primaria o Secundaria.',
  `grado` char(1) NOT NULL COMMENT 'Grado al que será matriculado el alumno. Valores permitidos: 1, 2 ,3 ,4 ,5 o 6. ',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro de matrícula.',
  `estado` char(1) NOT NULL COMMENT 'Estado de la matrícula. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idmatricula`, `idalumno`, `idpersona`, `idgrupo`, `nivel`, `grado`, `fecharegistro`, `estado`) VALUES
(1, 1, 3, 1, '1', '3', '2015-04-07 21:20:53', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`idnota` int(11) NOT NULL COMMENT 'Identificador de la nota',
  `idcurso` int(11) NOT NULL COMMENT 'Llave foránea del identificador del curso.',
  `promediofinal` decimal(2,2) DEFAULT NULL COMMENT 'Campo Calculado desde la tabla notaperiodo { (ΣNotaperiodo)/ count(periodo)  donde idnota = x}',
  `promediofinall` char(2) DEFAULT NULL COMMENT 'Promedio final (letra)',
  `recuperacion` decimal(2,2) DEFAULT NULL COMMENT 'Nota de recuperación (numérico) valores en 0 y 20',
  `recuperacionl` char(2) DEFAULT NULL COMMENT 'Nota de recuperación (letra) AD A B C',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro del promedio final.',
  `fechamodificacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro de modificación del promedio final.',
  `idmatricula` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la matrícula.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notalogro`
--

CREATE TABLE IF NOT EXISTS `notalogro` (
  `idlogro` int(11) NOT NULL COMMENT 'Llave foránea que identifica al logro.',
  `periodo` int(11) NOT NULL COMMENT 'Periodo al que pertenece el detalle de nota.',
  `idnota` int(11) NOT NULL COMMENT 'Llave foránea que identifica a que nota le pertenece este detalle de nota.',
  `nota` decimal(2,2) DEFAULT NULL COMMENT 'Calificación del logro numérico. entre 0 y 20',
  `notal` char(2) DEFAULT NULL COMMENT 'Calificación del logro, letra, valores permitidos AD A B C',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del registro de  detalle de nota.',
  `fechamodificacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha y hora de modificación del detalle de nota.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `notalogro`
--
DELIMITER //
CREATE TRIGGER `promedio_logro` AFTER UPDATE ON `notalogro`
 FOR EACH ROW UPDATE notaperiodo
SET avglogro = (SELECT AVG(nota)
FROM notalogro
WHERE periodo = notalogro.periodo and 
      idnota = notalogro.idnota)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaperiodo`
--

CREATE TABLE IF NOT EXISTS `notaperiodo` (
  `periodo` int(11) NOT NULL COMMENT 'Periodo (bimestre) al que pertenece la nota periódica.',
  `idnota` int(11) NOT NULL COMMENT 'Llave foránea que identifica a que nota le pertenece esta calificación de periodo.',
  `avglogro` decimal(2,2) DEFAULT NULL COMMENT 'Campo Calculado desde la tabla notalogro, Promedio de logro, Valores Numericos entre 0 y 20',
  `avglogrol` char(2) DEFAULT NULL COMMENT 'Campo Calculado desde la tabla notalogro, Promedio de logro, Valores aceptados AD A B C',
  `notexabim` decimal(2,2) DEFAULT NULL COMMENT 'Nota examen bimestral valores entre 0 y 20',
  `notexabiml` char(2) DEFAULT NULL COMMENT 'nota examen bimestral valores aceptados AD A B C',
  `notaperiodo` decimal(2,2) DEFAULT NULL COMMENT 'Calificación del periodo de la nota (numérico). CC desde la tabla notalogro { (ΣNota)/N° (Nota)  donde idnota = x & periodo = y }',
  `notaperiodol` char(2) DEFAULT NULL COMMENT 'Calificación del periodo de la nota (letra). CC desde la tabla notalogro',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del registro del periodo de la nota.',
  `fechamodificacion` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la modificación del periodo de la nota.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `notaperiodo`
--
DELIMITER //
CREATE TRIGGER `promedio_final` AFTER UPDATE ON `notaperiodo`
 FOR EACH ROW UPDATE nota
SET promediofinal = (SELECT avg(notaperiodo) 
FROM notaperiodo
WHERE periodo = nota.periodo and 
idnota = nota.idnota)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`idpersona` int(11) NOT NULL COMMENT 'identificador de la persona',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre de persona',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido de persona',
  `dni` char(8) NOT NULL COMMENT 'Documento Nacional de Identidad de la persona',
  `sexo` char(1) NOT NULL COMMENT 'Sexo de Persona',
  `direccion` varchar(100) NOT NULL COMMENT 'Direccion de la persona',
  `telefono` char(15) NOT NULL COMMENT 'Telefono de la persona',
  `email` varchar(50) NOT NULL COMMENT 'Email de la persona',
  `fecharegistro` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del registro de la persona',
  `estado` char(1) NOT NULL COMMENT 'Estado de la persona'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `apellido`, `dni`, `sexo`, `direccion`, `telefono`, `email`, `fecharegistro`, `estado`) VALUES
(1, 'Victor Andres', 'Lopez Vasquez', '32134213', '1', 'San Borja - Lima', '345612', 'victorandres@gmail.com', '2015-04-03 15:04:09', '0'),
(2, 'Joseph', 'Perez Perez', '32134567', '1', 'Av. Meiggs 451', '32134567', 'joseperez@gmail.com', '2015-04-03 15:04:28', '1'),
(3, 'Maria Elena', 'Herrera Quezada', '32923159', '2', 'Jr. Huascar Mz H Lt 22 El Porvenir', '324561', 'servielshaddai@hotmail.com', '2015-04-03 15:02:49', '1'),
(4, 'Joel Franklin ', 'Tapia Herrera', '46457322', '1', 'Jr. Huascar Mz H Lt 22 El Porvenir', '944939642', 'cancerfrlj@gmail.com', '2015-04-03 15:04:55', '1'),
(5, 'Kelly', 'Alvarez Aguirre', '12345678', '2', 'Av Guardia Civil', '5555555', 'misha.neko@gmail.com', '2015-04-03 15:03:07', '1'),
(6, 'Hilda', 'Aguirre', '87654321', '2', 'Av Guardia Civil', '55555555', 'hilda@gmail.com', '2015-04-03 15:03:13', '1'),
(7, 'Miguel', 'Valle Pelaez', '3215678', '1', '21 de abril', '321345', 'miguel@gmail.com', '2015-04-03 15:07:51', '0'),
(8, 'Franco', 'Hermoza', '32451232', '1', 'Callao', '323431', 'franko_h@hotmail.com', '2015-04-07 20:21:17', '1'),
(9, 'David', 'Hermoza', '22314234', '1', 'Callao', '3231342', 'davidhermoza@hotmail.com', '2015-04-07 20:27:00', '1'),
(10, 'Daniel', 'Quezada', '32569877', '1', 'chimbote', '325689', 'danqueas@hotmail.com', '2015-04-07 20:50:54', '1'),
(11, 'Lily', 'Alvarez Aguirre', '56875412', '2', 'Lima', '321345', 'lily@qq.com', '2015-04-07 20:50:54', '1'),
(12, 'Luis', 'Renteria Valera', '45782345', '1', 'Av Pardo', '32134571', 'luis@hotmail.com', '2015-06-08 21:47:49', '1'),
(13, 'Heber', 'Gomez Hurtado', '45231234', '1', 'Los Pinos', '123456', 'hgh@hotmail.com', '2015-06-13 04:00:09', '1'),
(14, 'Orlando', 'Sojos', '30134521', '1', 'Nvo Chimbote', '94832312', 'orlando3001@hotmail.com', '2015-06-13 13:14:44', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
`idrol` int(11) NOT NULL,
  `descripcion` char(30) NOT NULL,
  `fechaalta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechavigencia` date DEFAULT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `descripcion`, `fechaalta`, `fechavigencia`, `estado`) VALUES
(1, 'Director', '2015-05-29 00:48:42', '2015-07-31', '1'),
(2, 'Administrador', '2015-05-29 00:48:53', '2015-07-24', '1'),
(3, 'Docente', '2015-05-29 00:49:02', '2015-08-19', '1'),
(4, 'Alumno', '2015-05-29 00:49:19', '2015-08-06', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
`idtrabajador` int(11) NOT NULL COMMENT 'Identificador del trabajador',
  `idpersona` int(11) NOT NULL COMMENT 'Llave foranea que identifica a la persona',
  `codigo` char(10) NOT NULL COMMENT 'Codigo del trabajador',
  `idrol` int(11) NOT NULL,
  `estado` char(1) NOT NULL COMMENT 'Estado del trabajador. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idtrabajador`, `idpersona`, `codigo`, `idrol`, `estado`) VALUES
(1, 1, '111001', 1, '1'),
(2, 2, '111002', 3, '1'),
(3, 7, '111003', 3, '1'),
(8, 13, '123567', 3, '0'),
(10, 9, '110012', 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL COMMENT 'Identificador del usuario.',
  `idpersona` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la persona.',
  `idrol` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL COMMENT 'Nombre de usuario de la tabla Usuario',
  `password` varchar(50) NOT NULL COMMENT 'Password del usuario.',
  `pregunta` char(100) NOT NULL,
  `respuesta` char(100) NOT NULL,
  `fechaalta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechavigencia` date NOT NULL,
  `estado` char(1) NOT NULL COMMENT 'Estado del usuario.'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idpersona`, `idrol`, `usuario`, `password`, `pregunta`, `respuesta`, `fechaalta`, `fechavigencia`, `estado`) VALUES
(1, 1, 1, 'victor', '202cb962ac59075b964b07152d234b70', 'Lugar Nacimiento', 'Trujillo', '2015-05-27 22:30:17', '2015-09-09', '1'),
(2, 4, 4, 'jfrank', '202cb962ac59075b964b07152d234b70', 'Ciudad Nacimiento', 'Chimbote', '2015-05-27 22:30:17', '2015-10-08', '1'),
(3, 7, 3, 'miguelv', '202cb962ac59075b964b07152d234b70', 'Segundo Nombre', 'Angel', '2015-05-28 17:25:33', '2015-09-24', '1'),
(4, 11, 2, 'lily', '202cb962ac59075b964b07152d234b70', 'Centro de Estudios', 'U. Lima', '2015-05-29 21:11:49', '2015-09-17', '1'),
(5, 8, 4, 'franco', '202cb962ac59075b964b07152d234b70', 'universidad', 'san pedro', '2015-05-31 18:27:34', '2015-07-28', '1'),
(8, 10, 4, 'daniel', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-01 15:03:11', '2015-07-06', '1'),
(9, 9, 3, 'david', '81dc9bdb52d04dc20036dbd8313ed055', 'hola', 'hola', '2015-06-01 15:13:26', '2015-09-16', '1'),
(13, 12, 4, 'luis', '202cb962ac59075b964b07152d234b70', '123', '123', '2015-06-13 01:52:43', '2015-06-13', '1'),
(14, 14, 4, 'orlando', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-13 13:15:57', '2015-06-27', '1'),
(15, 13, 3, 'heber', '202cb962ac59075b964b07152d234b70', 'universidad', 'usp', '2015-06-13 13:57:22', '2015-06-19', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`idalumno`), ADD UNIQUE KEY `codigo` (`codigo`), ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `apoderado`
--
ALTER TABLE `apoderado`
 ADD PRIMARY KEY (`idpersona`,`idalumno`), ADD UNIQUE KEY `idpersona` (`idpersona`,`idalumno`), ADD KEY `idalumno` (`idalumno`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
 ADD PRIMARY KEY (`fecharegistro`,`idmatricula`), ADD UNIQUE KEY `fecha` (`fecharegistro`,`idmatricula`), ADD KEY `idalumno` (`idmatricula`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`idcurso`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `docentecurso`
--
ALTER TABLE `docentecurso`
 ADD PRIMARY KEY (`idcurso`,`idtrabajador`,`idgrupo`), ADD UNIQUE KEY `idcurso` (`idcurso`,`idtrabajador`), ADD UNIQUE KEY `idcurso_2` (`idcurso`,`idtrabajador`,`idgrupo`), ADD KEY `idtrabajador` (`idtrabajador`), ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
 ADD PRIMARY KEY (`idgrupo`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
 ADD PRIMARY KEY (`idusuario`,`fechaacceso`), ADD UNIQUE KEY `idusuario_2` (`idusuario`,`fechaacceso`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `logro`
--
ALTER TABLE `logro`
 ADD PRIMARY KEY (`idlogro`);

--
-- Indices de la tabla `logrocurso`
--
ALTER TABLE `logrocurso`
 ADD PRIMARY KEY (`nivel`,`idcurso`,`idlogro`), ADD UNIQUE KEY `nivel` (`nivel`,`idcurso`,`idlogro`), ADD KEY `idcurso` (`idcurso`), ADD KEY `idlogro` (`idlogro`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
 ADD PRIMARY KEY (`idmatricula`), ADD KEY `idalumno` (`idalumno`,`idpersona`,`idgrupo`), ADD KEY `idpoderado` (`idpersona`), ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`idnota`,`idcurso`,`idmatricula`), ADD UNIQUE KEY `idnota` (`idnota`,`idcurso`,`idmatricula`), ADD KEY `idmatricula` (`idmatricula`), ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `notalogro`
--
ALTER TABLE `notalogro`
 ADD PRIMARY KEY (`idlogro`,`periodo`,`idnota`), ADD UNIQUE KEY `idlogro_2` (`idlogro`,`periodo`,`idnota`), ADD KEY `idlogro` (`idlogro`,`periodo`,`idnota`), ADD KEY `periodo` (`periodo`), ADD KEY `idnota` (`idnota`);

--
-- Indices de la tabla `notaperiodo`
--
ALTER TABLE `notaperiodo`
 ADD PRIMARY KEY (`periodo`,`idnota`), ADD UNIQUE KEY `periodo` (`periodo`,`idnota`), ADD KEY `idnota` (`idnota`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`idpersona`), ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
 ADD PRIMARY KEY (`idrol`), ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
 ADD PRIMARY KEY (`idtrabajador`), ADD UNIQUE KEY `codigo` (`codigo`), ADD KEY `idpersona` (`idpersona`), ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`), ADD UNIQUE KEY `usuario` (`usuario`), ADD KEY `idpersona` (`idpersona`), ADD KEY `rol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del alumno.',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del curso.',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del grupo.',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `logro`
--
ALTER TABLE `logro`
MODIFY `idlogro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del logro.';
--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
MODIFY `idmatricula` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de matrícula.',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la nota';
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de la persona',AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
MODIFY `idtrabajador` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del trabajador',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario.',AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`);

--
-- Filtros para la tabla `apoderado`
--
ALTER TABLE `apoderado`
ADD CONSTRAINT `apoderado_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`),
ADD CONSTRAINT `apoderado_ibfk_2` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`idmatricula`) REFERENCES `matricula` (`idmatricula`);

--
-- Filtros para la tabla `docentecurso`
--
ALTER TABLE `docentecurso`
ADD CONSTRAINT `docentecurso_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`),
ADD CONSTRAINT `docentecurso_ibfk_2` FOREIGN KEY (`idtrabajador`) REFERENCES `trabajador` (`idtrabajador`),
ADD CONSTRAINT `docentecurso_ibfk_3` FOREIGN KEY (`idgrupo`) REFERENCES `grupo` (`idgrupo`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `logrocurso`
--
ALTER TABLE `logrocurso`
ADD CONSTRAINT `logrocurso_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`),
ADD CONSTRAINT `logrocurso_ibfk_2` FOREIGN KEY (`idlogro`) REFERENCES `logro` (`idlogro`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`),
ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `apoderado` (`idpersona`),
ADD CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idgrupo`) REFERENCES `grupo` (`idgrupo`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idmatricula`) REFERENCES `matricula` (`idmatricula`),
ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `notalogro`
--
ALTER TABLE `notalogro`
ADD CONSTRAINT `notalogro_ibfk_3` FOREIGN KEY (`idlogro`) REFERENCES `logro` (`idlogro`),
ADD CONSTRAINT `notalogro_ibfk_4` FOREIGN KEY (`idnota`) REFERENCES `notaperiodo` (`idnota`),
ADD CONSTRAINT `notalogro_ibfk_5` FOREIGN KEY (`periodo`) REFERENCES `notaperiodo` (`periodo`);

--
-- Filtros para la tabla `notaperiodo`
--
ALTER TABLE `notaperiodo`
ADD CONSTRAINT `notaperiodo_ibfk_1` FOREIGN KEY (`idnota`) REFERENCES `nota` (`idnota`);

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`),
ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`),
ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
