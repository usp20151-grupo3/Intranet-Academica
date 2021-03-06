-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2015 a las 21:46:40
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_alumno`(IN `ida` INT(11), IN `idp` INT(11), IN `cod` CHAR(10), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update alumno 
set idpersona = idp,
codigo = cod, 
estado = est 
where idalumno = ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_cad`(IN `idca` INT(11), IN `idt` INT(11), IN `idc` INT(11), IN `idg` INT(11), IN `fec` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update docentecurso
set idtrabajador = idt,
idcurso = idc,
idgrupo = idg,
fechavigencia = fec,
estado = est 
where idcad = idca$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_correo`(IN `idper` INT(11), IN `cor` VARCHAR(50))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set email = cor 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_curso`(IN `idc` INT(11), IN `des` VARCHAR(50), IN `cod` CHAR(16), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update curso 
set descripcion = des,
codigo = cod,
estado = est 
where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_dasistencia`(IN `ida` INT(11), IN `fec` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update asistencia 
set fecharegistro = fec, 
estado = est 
where idasistencia = ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_direccion`(IN `idper` INT(11), IN `dir` VARCHAR(100))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set direccion = dir 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_grupo`(IN `idg` INT(11), IN `niv` CHAR(1), IN `gra` CHAR(1), IN `sec` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update grupo 
set nivel = niv,
grado = gra,
seccion = sec,
estado = est 
where idgrupo = idg$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_matricula`(IN `idm` INT(11), IN `ida` INT(11), IN `idp` INT(11), IN `idg` INT(11), IN `par` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update matricula 
set idalumno = ida,
idpersona = idp,
idgrupo = idg,
parentesco = par,
estado = est
where idmatricula = idm$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_rol`(IN `idr` INT(11), IN `des` VARCHAR(30), IN `fecvig` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update rol 
set descripcion = des,
fechavigencia = fecvig,
estado = est
where idrol = idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_telefono`(IN `tel` CHAR(15), IN `idper` INT(11))
    NO SQL
    SQL SECURITY INVOKER
update persona 
set telefono = tel 
where idpersona = idper$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_trabajador`(IN `idt` INT(11), IN `idp` INT(11), IN `cod` CHAR(10), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update trabajador 
set idpersona = idp,
codigo = cod, 
estado = est 
where idtrabajador = idt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_usuario`(IN `idu` INT(11), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
update usuario 
set estado = est 
where idusuario = idu$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_alumno`(IN `ida` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select alumno.idalumno, alumno.idpersona, 
concat(persona.nombre,' ',persona.apellido) as nombre, alumno.codigo, alumno.estado  from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona
where alumno.idalumno=ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_cad`(IN `idc` INT(11))
    NO SQL
    SQL SECURITY INVOKER
SELECT dc.idcad,dc.idtrabajador,dc.idgrupo,dc.idcurso,c.descripcion, p.nombre, p.apellido,case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, case dc.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado, dc.fechavigencia FROM docentecurso dc
inner join curso c
on dc.idcurso = c.idcurso 
inner join trabajador t
on t.idtrabajador = dc.idtrabajador 
inner join persona p 
on p.idpersona = t.idpersona 
inner join grupo g 
on g.idgrupo = dc.idgrupo
where dc.idcad = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_curso`(IN `idc` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from curso where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_dasistencia`(IN `ida` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select a.idasistencia,a.idcad, a.idmatricula,p.nombre, p.apellido,a.fecharegistro, c.descripcion, case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel,case a.estado when 'A' then 'Asistio' when 'F' then 'Falto' when 'J' then 'Justificacion' end as estado from matricula m
inner join alumno al
on m.idalumno = al.idalumno 
inner join persona p 
on al.idpersona = p.idpersona 
inner join asistencia a
on m.idmatricula = a.idmatricula
inner join docentecurso dc
on a.idcad = dc.idcad 
inner join grupo g
on dc.idgrupo = g.idgrupo 
inner join curso c 
on dc.idcurso = c.idcurso
where a.idasistencia = ida$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_grupo`(IN `idg` INT(11))
    NO SQL
    SQL SECURITY INVOKER
Select idgrupo,case nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case grado 
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado
, seccion, fecharegistro, case estado when '1' then 'Activo' when '2' then 'Inactivo' end as estado from grupo 
where idgrupo = idg$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_lasistencia_matricula`(IN `idg` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select m.idmatricula,m.idalumno, p.nombre, p.apellido, al.codigo from matricula m inner join alumno al on m.idalumno = al.idalumno inner join persona p on al.idpersona = p.idpersona where m.idgrupo = idg and m.estado <> 0$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_matricula`(IN `idm` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select matricula.idmatricula, alumno.idalumno,p1.idpersona,grupo.idgrupo,concat(p2.nombre,' ',p2.apellido) as anombre, concat(p1.nombre,' ' ,p1.apellido)as pnombre, case grupo.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, grupo.seccion, case grupo.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case matricula.parentesco when 'M' then 'Madre' when 'P' then 'Padre' when 'T' then 'Tia' when 'O' then 'Tio' when 'A' then 'Abuela' when 'B' then 'Abuelo' end as parentesco, matricula.fecharegistro, 
case matricula.estado when '1' then 'Activo' when '2' then 'Inactivo' end as estado from matricula 
inner join alumno on 
matricula.idalumno = alumno.idalumno 
inner join persona p1 on 
matricula.idpersona = p1.idpersona
inner join persona p2 on 
alumno.idpersona = p2.idpersona
inner join grupo on 
grupo.idgrupo = matricula.idgrupo
where matricula.idmatricula = idm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_persona`(IN `idp` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from persona where idpersona = idp$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_rol`(IN `idr` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from rol where idrol = idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_trabajador`(IN `idt` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select trabajador.idtrabajador, trabajador.idpersona, 
concat(persona.nombre,' ',persona.apellido) as nombre, trabajador.codigo, trabajador.estado 
from trabajador 
inner join persona
on persona.idpersona = trabajador.idpersona
where idtrabajador = idt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_usuario`(IN `idu` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from usuario 
where idusuario = idu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_alumno`(IN `ida` INT(11), IN `idp` INT(11), IN `cod` CHAR(10), IN `est` CHAR(1))
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ifalumno`(IN `usr` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select alumno.idalumno 
from usuario 
inner join persona 
on usuario.idpersona = persona.idpersona 
inner join alumno 
on persona.idpersona = alumno.idpersona
where usuario.usuario = usr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `iftrabajador`(IN `usr` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select trabajador.idtrabajador 
from usuario 
inner join persona 
on usuario.idpersona = persona.idpersona 
inner join trabajador 
on persona.idpersona = trabajador.idpersona
where usuario.usuario = usr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nombre_persona_usuario`(IN `usr` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select persona.nombre, persona.apellido 
from usuario 
inner join persona 
on usuario.idpersona = persona.idpersona
where usuario.usuario = usr$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_asistencia`(IN `fec` DATE, IN `idm` INT(11), IN `idc` INT(11), IN `est` CHAR(1), IN `com` VARCHAR(50))
    NO SQL
    SQL SECURITY INVOKER
insert into asistencia(fecharegistro,idmatricula,idcad,estado,comentario)
values(fec,idm,idc,est,com)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_cad`(IN `idc` INT(11), IN `idt` INT(11), IN `idg` INT(11), IN `fec` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into docentecurso (idcurso,idtrabajador,idgrupo,fechavigencia,estado) 
values (idc,idt,idg,fec,est)$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_grupo_estudio`(IN `niv` CHAR(1), IN `gra` CHAR(1), IN `sec` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into grupo (nivel,grado,seccion,estado)
values (niv,gra,sec,est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_grupo_usuario`(IN `des` CHAR(30), IN `fecvig` DATE, IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into rol (descripcion, fechaalta, fechavigencia, estado)
values (`des`, now(), fecvig, est)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_matricula`(IN `ida` INT(11), IN `idp` INT(11), IN `idg` INT(11), IN `par` CHAR(1), IN `est` CHAR(1))
    NO SQL
    SQL SECURITY INVOKER
insert into matricula (idalumno,idpersona,idgrupo,parentesco,estado) 
values (ida,idp,idg,par,est)$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_usuario_historial`(IN `idu` INT(11), IN `ipa` VARCHAR(15))
    NO SQL
    SQL SECURITY INVOKER
insert into historial (idusuario, ipacceso) values (idu, ipa)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_alumno`(IN `cod` CHAR(10))
    NO SQL
    SQL SECURITY INVOKER
select alumno.idalumno, persona.idpersona,persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona
where alumno.codigo like concat(cod,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_alumno_activo`()
    NO SQL
select alumno.idalumno, persona.idpersona,persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona 
where alumno.estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_alumno_matricula`()
    NO SQL
    SQL SECURITY INVOKER
select alumno.idalumno, persona.idpersona,persona.nombre,persona.apellido, alumno.codigo, 
case alumno.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from alumno 
inner join persona 
on persona.idpersona = alumno.idpersona
where alumno.estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_asistencia`(IN `ap` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select a.idasistencia, a.idcad, a.idmatricula,p.nombre, p.apellido,a.fecharegistro, c.descripcion, case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel,case a.estado when 'A' then 'Asistio' when 'F' then 'Falto' when 'J' then 'Justificacion' end as estado from matricula m
inner join alumno al
on m.idalumno = al.idalumno 
inner join persona p 
on al.idpersona = p.idpersona 
inner join asistencia a
on m.idmatricula = a.idmatricula
inner join docentecurso dc
on a.idcad = dc.idcad 
inner join grupo g
on dc.idgrupo = g.idgrupo 
inner join curso c 
on dc.idcurso = c.idcurso 
where p.apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_asistencia_alumno_v_docente`(IN `idd` INT(11), IN `ap` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select a.idasistencia,a.idcad, a.idmatricula,p.nombre, p.apellido,a.fecharegistro, c.descripcion, case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel,case a.estado when 'A' then 'Asistio' when 'F' then 'Falto' when 'J' then 'Justificacion' end as estado from matricula m
inner join alumno al
on m.idalumno = al.idalumno 
inner join persona p 
on al.idpersona = p.idpersona 
inner join asistencia a
on m.idmatricula = a.idmatricula
inner join docentecurso dc
on a.idcad = dc.idcad 
inner join grupo g
on dc.idgrupo = g.idgrupo 
inner join curso c 
on dc.idcurso = c.idcurso
where dc.idtrabajador = idd and p.apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_asistencia_v_alumno`(IN `idm` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select a.idasistencia, a.idcad, a.idmatricula,p.nombre, p.apellido,a.fecharegistro, c.descripcion, case g.grado when '1' then 'Primero' when '2' then 'Segundo' when '3' then 'Tercero' when '4' then 'Cuarto' when '5' then 'Quinto' when '6' then 'Sexo' end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel,case a.estado when 'A' then 'Asistio' when 'F' then 'Falto' when 'J' then 'Justificacion' end as estado from matricula m inner join alumno al on m.idalumno = al.idalumno inner join persona p on al.idpersona = p.idpersona inner join asistencia a on m.idmatricula = a.idmatricula inner join docentecurso dc on a.idcad = dc.idcad inner join grupo g on dc.idgrupo = g.idgrupo inner join curso c on dc.idcurso = c.idcurso where m.idalumno = idm$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_cad`(IN `ap` VARCHAR(30))
    NO SQL
    SQL SECURITY INVOKER
SELECT dc.idcad,c.descripcion, p.nombre, p.apellido,case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, case dc.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado, dc.fechavigencia FROM docentecurso dc
inner join curso c
on dc.idcurso = c.idcurso 
inner join trabajador t
on t.idtrabajador = dc.idtrabajador 
inner join persona p 
on p.idpersona = t.idpersona 
inner join grupo g 
on g.idgrupo = dc.idgrupo 
where p.apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_cad_trabajador`(IN `idt` INT(11))
    NO SQL
    SQL SECURITY INVOKER
SELECT dc.idgrupo,dc.idcad,c.descripcion, case g.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, g.seccion, case g.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, case dc.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado, dc.fechavigencia FROM docentecurso dc
inner join curso c
on dc.idcurso = c.idcurso 
inner join trabajador t
on t.idtrabajador = dc.idtrabajador 
inner join persona p 
on p.idpersona = t.idpersona 
inner join grupo g 
on g.idgrupo = dc.idgrupo  
where dc.idtrabajador = idt$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_curso`(IN `ap` VARCHAR(50))
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion, codigo, fecharegistro, case estado when '1' 
then 'Activo' when '0' then 'Inactivo' end as estado from curso
where descripcion like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_curso_activo`()
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion, codigo, fecharegistro, case estado when '1' 
then 'Activo' when '0' then 'Inactivo' end as estado from curso
where estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_curso_x_id`(IN `idc` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select idcurso, descripcion 
from curso 
where idcurso = idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_docente`(IN `ap` VARCHAR(30))
    NO SQL
    SQL SECURITY INVOKER
select trabajador.idtrabajador,persona.idpersona, persona.nombre, persona.apellido, trabajador.codigo, case trabajador.estado when '1' then 'Activo' when '0' 
then 'Inactivo' end as estado from trabajador 
inner join persona 
on persona.idpersona = trabajador.idpersona 
where trabajador.idrol = 3 and persona.apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_docente_activo`(IN `ap` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
select trabajador.idtrabajador,persona.idpersona, persona.nombre, persona.apellido, trabajador.codigo, case trabajador.estado when '1' then 'Activo' when '0' 
then 'Inactivo' end as estado from trabajador 
inner join persona 
on persona.idpersona = trabajador.idpersona 
where trabajador.idrol = 3 and trabajador.estado = 1 and persona.apellido like concat('%',ap,'%')$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_grupo_estudio`(IN `ap` INT(7))
    NO SQL
    SQL SECURITY INVOKER
Select idgrupo,case nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case grado 
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado
, seccion, fecharegistro, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from grupo 
where grado like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_grupo_estudio_activo`()
    NO SQL
    SQL SECURITY INVOKER
Select idgrupo,case nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case grado 
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado
, seccion, fecharegistro, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from grupo
where estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_grupo_usuario`(IN `idr` INT(11))
    NO SQL
    SQL SECURITY INVOKER
select * from rol where idrol = idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_matricula`()
    NO SQL
    SQL SECURITY INVOKER
select matricula.idmatricula, concat(p2.nombre,' ',p2.apellido) as anombre, concat(p1.nombre,' ' ,p1.apellido)as pnombre, case grupo.grado
when '1' then 'Primero'
when '2' then 'Segundo'
when '3' then 'Tercero'
when '4' then 'Cuarto'
when '5' then 'Quinto'
when '6' then 'Sexo' 
end as grado, grupo.seccion, case grupo.nivel when '1' then 'Primaria' when '2' then 'Secundaria' end as nivel, 
case matricula.parentesco when 'M' then 'Madre' when 'P' then 'Padre' when 'T' then 'Tia' when 'O' then 'Tio' when 'A' then 'Abuela' when 'B' then 'Abuelo' end as parentesco, matricula.fecharegistro, 
case matricula.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from matricula 
inner join alumno on 
matricula.idalumno = alumno.idalumno 
inner join persona p1 on 
matricula.idpersona = p1.idpersona
inner join persona p2 on 
alumno.idpersona = p2.idpersona
inner join grupo on 
grupo.idgrupo = matricula.idgrupo$$

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
where usuario.idusuario = user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_persona`(IN `ap` VARCHAR(30))
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
From persona
where apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_persona_activo`()
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
From persona
where estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_rol`()
    NO SQL
    SQL SECURITY INVOKER
select idrol, descripcion, fechaalta, fechavigencia, case estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado from rol$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_rol_activo`()
    NO SQL
    SQL SECURITY INVOKER
select idrol, descripcion, fechaalta, fechavigencia, estado from rol
where estado=1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_usuario`(IN `ap` VARCHAR(30))
    NO SQL
    SQL SECURITY INVOKER
SELECT usuario.`usuario`, persona.nombre, persona.apellido, case usuario.`idrol` when '1' then 'Director' when '2' then 'Administrador' when '3' then 'Docente' when '4' then 'Alumno' end as rol, usuario.`fechaalta`,usuario.`fechavigencia` FROM `usuario` inner join persona on usuario.idpersona = persona.idpersona 
where persona.apellido like concat(ap,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_usuario_his`(IN `cod` VARCHAR(20))
    NO SQL
    SQL SECURITY INVOKER
SELECT u.idusuario, u.usuario AS Login, CONCAT(p.nombre,' ',p.apellido) AS Nombres, r.descripcion as Grupo, max(h.fechaacceso) as facceso, h.ipacceso as ip, u.fechaalta as falta, u.fechavigencia as fvig, case u.estado when '1' then 'Activo' when '0' then 'Inactivo' end as estado
FROM usuario u
INNER JOIN persona p ON p.idpersona=u.idpersona
INNER JOIN rol r ON r.idrol=u.idrol
left JOIN historial h ON h.idusuario=u.idusuario
where u.usuario like concat(cod,'%')
group by u.idusuario$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `verificar_usuario`(IN `usu` CHAR(20), IN `pass` CHAR(50))
    NO SQL
    SQL SECURITY INVOKER
SELECT u.`idusuario`, u.`idpersona`, u.`idrol`, u.`usuario`, u.`pregunta`, u.`respuesta`, year(u.fechaalta) as anho, day(u.fechaalta) as dia,case month(u.`fechaalta`) when '1' then 'Enero' when '2' then 'Febrero' when '3' then 'Marzo' when '4' then 'Abril' when '5' then 'Mayo' when '6' then 'Junio' when '7' then 'Julio' when '8' then 'Agosto' when '9' then 'Septiembre' when '10' then 'Octubre' when '11' then 'Noviembre' when '12' then 'Diciembre' end as mes, u.`fechavigencia`, u.`estado`, rol.estado as restado
from usuario u
inner join rol 
on u.idrol = rol.idrol
where u.`usuario` = usu and u.`password` = pass$$

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `idpersona`, `codigo`, `estado`) VALUES
(1, 4, '222001', '1'),
(2, 5, '222002', '1'),
(3, 8, '222003', '1'),
(5, 12, '222004', '1'),
(6, 10, '222005', '1'),
(7, 14, '222006', '1'),
(8, 17, '222007', '1'),
(9, 16, '222008', '1'),
(10, 15, '222009', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
`idasistencia` int(11) NOT NULL,
  `fecharegistro` date NOT NULL,
  `idcad` int(11) NOT NULL,
  `idmatricula` int(11) NOT NULL,
  `estado` char(1) NOT NULL COMMENT 'Estado de la asistencia. Valores permitidos: Asistió, Faltó o Tardanza.',
  `comentario` varchar(50) DEFAULT ' ' COMMENT 'Comentario sobre la asistencia.'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idasistencia`, `fecharegistro`, `idcad`, `idmatricula`, `estado`, `comentario`) VALUES
(1, '2015-07-01', 9, 1, 'A', ''),
(2, '2015-07-01', 9, 2, 'A', ''),
(3, '2015-07-01', 9, 3, 'A', ''),
(4, '2015-07-01', 9, 6, 'J', ''),
(5, '2015-07-01', 16, 1, 'F', ''),
(6, '2015-07-01', 16, 2, 'F', ''),
(7, '2015-07-01', 16, 3, 'A', ''),
(8, '2015-07-01', 16, 6, 'A', ''),
(9, '2015-07-01', 1, 1, 'A', ''),
(10, '2015-07-01', 1, 2, 'F', ''),
(11, '2015-07-01', 1, 3, 'F', ''),
(12, '2015-07-01', 1, 6, 'F', ''),
(13, '2015-07-01', 2, 4, 'A', ''),
(14, '2015-07-01', 2, 5, 'J', ''),
(15, '2015-07-09', 9, 1, 'A', ''),
(16, '2015-07-09', 9, 2, 'A', ''),
(17, '2015-07-09', 9, 3, 'F', ''),
(18, '2015-07-09', 9, 6, 'J', ''),
(19, '2015-07-09', 11, 7, 'A', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `descripcion`, `codigo`, `fecharegistro`, `estado`) VALUES
(1, 'Algebra', '111000', '2015-06-13 05:00:08', '1'),
(2, 'Comunicacion', '111001', '2015-06-13 05:06:03', '1'),
(3, 'Historia', '111002', '2015-06-20 00:54:35', '1'),
(4, 'Geografia', '111003', '2015-06-20 07:44:55', '1'),
(5, 'Educacion Religiosa', '111004', '2015-06-20 08:01:56', '1'),
(6, 'Educacion Fisica', '111005', '2015-06-21 15:01:54', '1'),
(7, 'Aritmetica', '111006', '2015-07-02 14:15:27', '1'),
(8, 'Geometria', '111007', '2015-07-05 16:27:38', '1'),
(9, 'Trigonometria', '111008', '2015-07-05 16:27:46', '1'),
(10, 'Ingles', '111009', '2015-07-05 16:28:01', '1'),
(11, 'Arte', '111010', '2015-07-05 16:28:16', '1'),
(12, 'Economia', '111011', '2015-07-05 16:28:55', '1'),
(13, 'Formacion Ciudadana y Civica', '111012', '2015-07-05 16:29:26', '1'),
(14, 'Persona Familia y RR HH', '111013', '2015-07-05 16:30:03', '1'),
(15, 'Quimica', '111014', '2015-07-05 16:31:01', '1'),
(16, 'Biologia', '111015', '2015-07-05 16:31:10', '1'),
(17, 'Ciencia Tecnologia y Ambiente', '111016', '2015-07-05 16:31:24', '1'),
(18, 'Educacion para el Trabajo', '111017', '2015-07-05 16:31:48', '1'),
(19, 'Fisica Elemental', '111018', '2015-07-05 16:32:14', '1'),
(20, 'Razonamiento Matematico', '111019', '2015-07-05 16:32:42', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentecurso`
--

CREATE TABLE IF NOT EXISTS `docentecurso` (
`idcad` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idtrabajador` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha y hora de registro',
  `fechavigencia` date DEFAULT NULL,
  `estado` char(1) NOT NULL COMMENT 'Estado de la asignación docente-curso: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentecurso`
--

INSERT INTO `docentecurso` (`idcad`, `idcurso`, `idtrabajador`, `idgrupo`, `fecharegistro`, `fechavigencia`, `estado`) VALUES
(1, 2, 3, 17, '2015-06-26 11:44:41', '2015-12-31', '1'),
(2, 2, 3, 18, '2015-06-26 11:44:55', '2015-12-31', '1'),
(3, 2, 3, 19, '2015-06-26 11:45:38', '2015-12-31', '1'),
(4, 2, 3, 20, '2015-06-26 11:51:06', '2015-12-31', '1'),
(5, 7, 11, 17, '2015-06-26 12:04:43', '2015-12-31', '1'),
(6, 7, 11, 18, '2015-06-26 12:05:31', '2015-12-31', '1'),
(7, 7, 11, 19, '2015-06-26 12:05:50', '2015-12-31', '1'),
(8, 7, 11, 20, '2015-07-02 14:18:31', '2015-12-31', '1'),
(9, 17, 8, 17, '2015-07-05 16:42:19', '2015-12-31', '1'),
(10, 17, 8, 18, '2015-07-05 16:42:34', '2015-12-31', '1'),
(11, 17, 8, 19, '2015-07-05 16:42:48', '2015-12-31', '1'),
(12, 17, 8, 20, '2015-07-05 16:43:06', '2015-12-31', '1'),
(13, 5, 12, 17, '2015-07-05 17:24:03', '2015-07-06', '1'),
(14, 5, 12, 18, '2015-07-05 17:27:50', '2015-12-31', '1'),
(15, 5, 12, 19, '2015-07-05 17:29:16', '2015-12-31', '1'),
(16, 13, 8, 17, '2015-07-07 16:37:43', '2015-12-31', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nivel`, `grado`, `seccion`, `fecharegistro`, `estado`) VALUES
(1, '1', '1', 'A', '2015-06-24 22:03:55', '1'),
(2, '1', '1', 'B', '2015-06-24 22:04:08', '1'),
(3, '1', '1', 'C', '2015-06-24 22:04:42', '1'),
(4, '1', '1', 'D', '2015-06-24 22:22:36', '1'),
(5, '1', '2', 'A', '2015-06-24 22:28:00', '1'),
(6, '1', '2', 'B', '2015-06-24 22:28:10', '1'),
(7, '1', '2', 'C', '2015-06-24 22:28:15', '1'),
(8, '1', '2', 'D', '2015-06-24 22:28:27', '1'),
(9, '1', '3', 'A', '2015-06-24 22:38:15', '1'),
(10, '1', '3', 'B', '2015-06-24 22:42:47', '1'),
(11, '1', '3', 'C', '2015-06-24 22:42:59', '1'),
(12, '1', '3', 'D', '2015-06-24 22:43:07', '1'),
(13, '1', '4', 'A', '2015-06-24 23:35:17', '1'),
(14, '1', '4', 'B', '2015-06-26 00:43:50', '0'),
(15, '1', '4', 'C', '2015-06-26 14:12:43', '1'),
(16, '1', '4', 'D', '2015-07-02 14:16:57', '1'),
(17, '2', '1', 'A', '2015-07-07 00:34:08', '1'),
(18, '2', '1', 'B', '2015-07-07 00:34:14', '1'),
(19, '2', '1', 'C', '2015-07-07 00:34:20', '1'),
(20, '2', '1', 'D', '2015-07-07 00:34:26', '1');

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
(1, '::1', '2015-06-04 19:44:19'),
(1, '::1', '2015-06-04 19:44:44'),
(1, '::1', '2015-06-04 19:46:37'),
(1, '::1', '2015-06-08 22:10:31'),
(1, '::1', '2015-07-01 03:37:05'),
(1, '::1', '2015-07-07 01:37:26'),
(1, '::1', '2015-07-08 23:22:14'),
(1, '::1', '2015-07-08 23:28:46'),
(1, '::1', '2015-07-09 00:06:39'),
(1, '::1', '2015-07-09 00:14:02'),
(1, '::1', '2015-07-09 00:23:57'),
(1, '::1', '2015-07-09 00:28:41'),
(1, '::1', '2015-07-09 14:13:36'),
(1, '::1', '2015-07-09 14:15:25'),
(2, '::1', '2015-06-04 19:44:32'),
(2, '::1', '2015-06-04 19:44:47'),
(2, '::1', '2015-07-01 02:39:47'),
(2, '::1', '2015-07-02 14:09:29'),
(2, '::1', '2015-07-07 01:31:24'),
(2, '::1', '2015-07-07 21:51:37'),
(2, '::1', '2015-07-07 21:52:54'),
(2, '::1', '2015-07-09 00:23:28'),
(2, '::1', '2015-07-09 00:54:00'),
(2, '::1', '2015-07-09 01:10:20'),
(2, '::1', '2015-07-09 01:20:47'),
(2, '::1', '2015-07-09 01:25:00'),
(2, '::1', '2015-07-09 14:14:10'),
(3, '::1', '2015-06-04 19:44:35'),
(3, '::1', '2015-06-04 19:44:50'),
(3, '::1', '2015-07-07 01:36:58'),
(4, '::1', '2015-06-04 19:44:38'),
(4, '::1', '2015-06-04 19:44:53'),
(4, '::1', '2015-06-30 23:15:11'),
(4, '::1', '2015-06-30 23:16:12'),
(4, '::1', '2015-06-30 23:20:31'),
(4, '::1', '2015-06-30 23:21:29'),
(4, '::1', '2015-06-30 23:38:09'),
(4, '::1', '2015-07-01 00:00:21'),
(4, '::1', '2015-07-01 00:57:44'),
(4, '::1', '2015-07-01 01:09:00'),
(4, '::1', '2015-07-01 01:14:50'),
(4, '::1', '2015-07-01 01:15:36'),
(4, '::1', '2015-07-01 01:15:52'),
(4, '::1', '2015-07-01 02:16:07'),
(4, '::1', '2015-07-01 02:18:18'),
(4, '::1', '2015-07-01 02:23:58'),
(4, '::1', '2015-07-01 02:24:17'),
(4, '::1', '2015-07-01 02:24:30'),
(4, '::1', '2015-07-01 02:25:06'),
(4, '::1', '2015-07-01 02:26:37'),
(4, '::1', '2015-07-01 02:27:27'),
(4, '::1', '2015-07-01 02:31:22'),
(4, '::1', '2015-07-01 02:33:56'),
(4, '::1', '2015-07-01 02:34:26'),
(4, '::1', '2015-07-01 02:40:08'),
(4, '::1', '2015-07-01 02:42:27'),
(4, '::1', '2015-07-01 03:37:10'),
(4, '::1', '2015-07-01 23:17:04'),
(4, '::1', '2015-07-02 14:07:59'),
(4, '::1', '2015-07-02 14:09:12'),
(4, '::1', '2015-07-02 14:09:36'),
(4, '::1', '2015-07-02 14:10:15'),
(4, '::1', '2015-07-05 16:02:33'),
(4, '::1', '2015-07-07 00:23:54'),
(4, '::1', '2015-07-07 00:41:37'),
(4, '::1', '2015-07-07 01:11:39'),
(4, '::1', '2015-07-07 01:12:30'),
(4, '::1', '2015-07-07 01:22:47'),
(4, '::1', '2015-07-07 01:31:29'),
(4, '::1', '2015-07-07 01:35:36'),
(4, '::1', '2015-07-07 01:36:19'),
(4, '::1', '2015-07-07 01:36:46'),
(4, '::1', '2015-07-07 01:39:03'),
(4, '::1', '2015-07-07 01:39:56'),
(4, '::1', '2015-07-07 02:03:52'),
(4, '::1', '2015-07-07 02:10:06'),
(4, '::1', '2015-07-07 02:21:31'),
(4, '::1', '2015-07-07 02:54:57'),
(4, '::1', '2015-07-07 03:28:11'),
(4, '::1', '2015-07-07 05:21:36'),
(4, '::1', '2015-07-07 05:34:42'),
(4, '::1', '2015-07-07 05:50:03'),
(4, '::1', '2015-07-07 07:36:17'),
(4, '::1', '2015-07-07 16:37:08'),
(4, '::1', '2015-07-07 16:54:46'),
(4, '::1', '2015-07-07 21:49:58'),
(4, '::1', '2015-07-07 21:52:28'),
(4, '::1', '2015-07-07 21:52:48'),
(4, '::1', '2015-07-07 21:53:04'),
(4, '::1', '2015-07-08 08:53:53'),
(4, '::1', '2015-07-08 09:25:11'),
(4, '::1', '2015-07-08 11:37:40'),
(4, '::1', '2015-07-08 11:53:00'),
(4, '::1', '2015-07-08 23:21:45'),
(4, '::1', '2015-07-08 23:23:03'),
(4, '::1', '2015-07-09 00:13:44'),
(4, '::1', '2015-07-09 00:23:21'),
(4, '::1', '2015-07-09 00:23:51'),
(4, '::1', '2015-07-09 00:25:16'),
(4, '::1', '2015-07-09 00:25:43'),
(4, '::1', '2015-07-09 01:10:37'),
(4, '::1', '2015-07-09 01:13:34'),
(4, '::1', '2015-07-09 01:21:29'),
(4, '::1', '2015-07-09 01:28:11'),
(4, '::1', '2015-07-09 13:55:21'),
(4, '::1', '2015-07-09 14:14:48'),
(4, '::1', '2015-07-09 14:16:24'),
(5, '::1', '2015-06-04 19:44:41'),
(5, '::1', '2015-06-04 19:44:56'),
(5, '::1', '2015-06-30 23:38:03'),
(5, '::1', '2015-07-01 01:14:41'),
(5, '::1', '2015-07-01 01:15:18'),
(5, '::1', '2015-07-01 01:15:31'),
(5, '::1', '2015-07-01 01:15:46'),
(8, '::1', '2015-07-01 00:00:17'),
(8, '::1', '2015-07-09 01:10:30'),
(8, '::1', '2015-07-09 01:11:34'),
(8, '::1', '2015-07-09 01:20:53'),
(13, '::1', '2015-07-09 01:20:57'),
(15, '::1', '2015-06-30 23:20:48'),
(15, '::1', '2015-07-07 00:41:25'),
(15, '::1', '2015-07-07 00:54:57'),
(15, '::1', '2015-07-07 01:35:17'),
(15, '::1', '2015-07-07 01:36:52'),
(15, '::1', '2015-07-07 01:37:33'),
(15, '::1', '2015-07-07 01:40:30'),
(15, '::1', '2015-07-07 02:04:43'),
(15, '::1', '2015-07-07 02:15:33'),
(15, '::1', '2015-07-07 02:21:44'),
(15, '::1', '2015-07-07 02:55:45'),
(15, '::1', '2015-07-07 03:28:53'),
(15, '::1', '2015-07-07 05:22:01'),
(15, '::1', '2015-07-07 07:36:37'),
(15, '::1', '2015-07-07 16:49:13'),
(15, '::1', '2015-07-07 16:53:38'),
(15, '::1', '2015-07-07 16:55:54'),
(15, '::1', '2015-07-07 21:53:41'),
(15, '::1', '2015-07-08 08:55:06'),
(15, '::1', '2015-07-08 10:52:18'),
(15, '::1', '2015-07-08 23:23:14'),
(15, '::1', '2015-07-09 00:13:53'),
(15, '::1', '2015-07-09 00:26:54'),
(15, '::1', '2015-07-09 00:53:04'),
(15, '::1', '2015-07-09 01:28:57'),
(15, '::1', '2015-07-09 14:10:22'),
(15, '::1', '2015-07-09 14:16:51'),
(17, '::1', '2015-07-01 01:15:26'),
(17, '::1', '2015-07-01 02:09:15'),
(17, '::1', '2015-07-01 02:20:32'),
(17, '::1', '2015-07-08 09:27:00'),
(17, '::1', '2015-07-08 11:36:54'),
(20, '::1', '2015-07-07 05:36:25'),
(21, '::1', '2015-07-09 01:28:48'),
(21, '::1', '2015-07-09 01:29:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
`idmatricula` int(11) NOT NULL COMMENT 'Identificador de matrícula.',
  `idalumno` int(11) NOT NULL COMMENT 'Llave foránea que identifica al alumno.',
  `idpersona` int(11) NOT NULL COMMENT 'Llave foránea que identifica a la persona y a la vez sera el identificador del apoderado.',
  `parentesco` char(1) NOT NULL,
  `idgrupo` int(11) NOT NULL COMMENT 'Llave foránea que identifica a que grupo será matriculado el alumno',
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de registro de matrícula.',
  `estado` char(1) NOT NULL COMMENT 'Estado de la matrícula. Valores permitidos: Activo o Inactivo.'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idmatricula`, `idalumno`, `idpersona`, `parentesco`, `idgrupo`, `fecharegistro`, `estado`) VALUES
(1, 1, 3, 'M', 17, '2015-06-26 04:00:53', '1'),
(2, 2, 6, 'M', 17, '2015-06-26 04:30:44', '1'),
(3, 3, 9, 'B', 17, '2015-06-26 05:08:05', '1'),
(4, 5, 2, 'O', 18, '2015-07-07 02:11:16', '1'),
(5, 7, 7, 'O', 18, '2015-07-07 02:11:57', '1'),
(6, 6, 19, 'O', 17, '2015-07-07 16:57:13', '1'),
(7, 9, 13, 'O', 19, '2015-07-09 14:16:45', '1');

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
-- Estructura de tabla para la tabla `notaperiodo`
--

CREATE TABLE IF NOT EXISTS `notaperiodo` (
  `periodo` int(11) NOT NULL COMMENT 'Periodo (bimestre) al que pertenece la nota periódica.',
  `idnota` int(11) NOT NULL COMMENT 'Llave foránea que identifica a que nota le pertenece esta calificación de periodo.',
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `apellido`, `dni`, `sexo`, `direccion`, `telefono`, `email`, `fecharegistro`, `estado`) VALUES
(1, 'Victor Andres', 'Lopez Vasquez', '32134213', '1', 'San Borja - Lima', '345612', 'victorandres@gmail.com', '2015-04-03 15:04:09', '1'),
(2, 'Jose', 'Perez Perez', '32134567', '1', 'Av. Meiggs 451', '32134567', 'joseperez@gmail.com', '2015-04-03 15:04:28', '1'),
(3, 'Maria Elena', 'Herrera Quezada', '32923159', '2', 'Jr. Huascar Mz H Lt 22 El Porvenir', '324561', 'servielshaddai@hotmail.com', '2015-04-03 15:02:49', '1'),
(4, 'Joel Franklin ', 'Tapia Herrera', '46457322', '1', 'Jr. Huascar Mz H Lt 22 El Porvenir', '944939642', 'cancerfrlj@gmail.com', '2015-04-03 15:04:55', '1'),
(5, 'Kelly', 'Alvarez Aguirre', '12345678', '2', 'Av Guardia Civil', '5555555', 'misha.neko@gmail.com', '2015-04-03 15:03:07', '1'),
(6, 'Hilda', 'Aguirre', '87654321', '2', 'Av Guardia Civil', '55555555', 'hilda@gmail.com', '2015-04-03 15:03:13', '1'),
(7, 'Miguel', 'Valle Pelaez', '32156781', '1', '21 de abril', '321345', 'miguel@gmail.com', '2015-04-03 15:07:51', '1'),
(8, 'Franco', 'Hermoza', '32451232', '1', 'Callao', '323431', 'franko_h@hotmail.com', '2015-04-07 20:21:17', '1'),
(9, 'David', 'Hermoza', '22314234', '1', 'Callao', '3231342', 'davidhermoza@hotmail.com', '2015-04-07 20:27:00', '1'),
(10, 'Daniel', 'Quezada', '32569877', '1', 'chimbote', '325689', 'danqueas@hotmail.com', '2015-04-07 20:50:54', '1'),
(11, 'Lily', 'Alvarez Aguirre', '56875412', '2', 'Av. Guardia Civil 123', '431546123', 'lily@gmail.com', '2015-04-07 20:50:54', '1'),
(12, 'Luis', 'Renteria Valera', '45782345', '1', 'Av Pardo', '32134571', 'luis@hotmail.com', '2015-06-08 21:47:49', '1'),
(13, 'Heber', 'Gomez Hurtado', '45231234', '1', 'Los Pinos', '34652341', 'hgh@hotmail.com', '2015-06-13 04:00:09', '1'),
(14, 'Orlando', 'Sojos', '30134521', '1', 'Nvo Chimbote', '94832312', 'orlando3001@hotmail.com', '2015-06-13 13:14:44', '1'),
(15, 'Bryan', 'Aguilar', '98532312', '1', 'Bellamar Nuevo Chimbote', '3412356', 'bryan@hotmail.com', '2015-06-13 15:15:20', '1'),
(16, 'Briggite Angie', 'Huertas Herrera', '66312312', '2', '21 de Abril ', '343146', 'Briggite22002@hotmail.com', '2015-06-20 07:44:11', '1'),
(17, 'Juan de Dios', 'Herrera Quezada', '76331356', '1', 'El Carmen', '320581', 'Juan30023@hotmail.com', '2015-06-20 08:00:48', '1'),
(18, 'Angel', 'Chavez', '34657789', '1', 'Los Angeles', '457686525', 'angel4512@hotmail.com', '2015-06-26 14:06:23', '0'),
(19, 'Victor', 'Orbegozo Perez', '34567893', '1', 'Los Pinos 23', '043567831345667', 'victororbegozo@hotmail.com', '2015-07-02 14:12:05', '1');

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
(1, 'Director', '2015-05-29 00:48:42', '2016-01-01', '1'),
(2, 'Administrador', '2015-05-29 00:48:53', '2016-01-01', '1'),
(3, 'Docente', '2015-05-29 00:49:02', '2016-01-01', '1'),
(4, 'Alumno', '2015-05-29 00:49:19', '2016-01-01', '1'),
(5, 'test', '2015-07-01 02:52:40', '2015-07-31', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idtrabajador`, `idpersona`, `codigo`, `idrol`, `estado`) VALUES
(1, 1, '111001', 1, '1'),
(3, 6, '111003', 3, '1'),
(8, 13, '123688', 3, '1'),
(10, 7, '110012', 3, '1'),
(11, 2, '342123', 3, '1'),
(12, 3, '34534', 3, '1'),
(14, 9, '52521231', 3, '0'),
(15, 18, '3455475484', 3, '1'),
(16, 19, '3330055555', 3, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idpersona`, `idrol`, `usuario`, `password`, `pregunta`, `respuesta`, `fechaalta`, `fechavigencia`, `estado`) VALUES
(1, 1, 1, 'victor', '202cb962ac59075b964b07152d234b70', 'Lugar Nacimiento', 'Trujillo', '2015-05-27 22:30:17', '2015-09-09', '1'),
(2, 4, 4, 'jfrank', '202cb962ac59075b964b07152d234b70', 'Ciudad Nacimiento', 'Chimbote', '2015-05-27 22:30:17', '2015-10-08', '1'),
(3, 7, 3, 'miguelv', '202cb962ac59075b964b07152d234b70', 'Segundo Nombre', 'Angel', '2015-05-28 17:25:33', '2015-09-24', '1'),
(4, 11, 2, 'lily', '202cb962ac59075b964b07152d234b70', 'Centro de Estudios', 'San Pedro', '2015-05-29 21:11:49', '2015-09-17', '1'),
(5, 8, 4, 'franco', '202cb962ac59075b964b07152d234b70', 'universidad', 'san pedro', '2015-05-31 18:27:34', '2015-07-28', '1'),
(8, 10, 4, 'daniel', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-01 15:03:11', '2015-07-06', '1'),
(9, 9, 3, 'david', '81dc9bdb52d04dc20036dbd8313ed055', 'hola', 'hola', '2015-06-01 15:13:26', '2015-09-16', '1'),
(13, 12, 4, 'luis', '202cb962ac59075b964b07152d234b70', '123', '123', '2015-06-13 01:52:43', '2015-06-13', '1'),
(14, 14, 4, 'orlando', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-13 13:15:57', '2015-06-27', '1'),
(15, 13, 3, 'heber', '202cb962ac59075b964b07152d234b70', 'universidad', 'USP', '2015-06-13 13:57:22', '2015-06-19', '1'),
(16, 15, 4, 'bryan', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-13 15:16:23', '2015-08-12', '1'),
(17, 6, 3, 'hilda', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-20 00:39:04', '2015-07-16', '1'),
(18, 17, 3, 'brigg', '202cb962ac59075b964b07152d234b70', 'hola', 'hola', '2015-06-20 08:02:24', '2015-07-05', '0'),
(19, 16, 4, 'juandd', 'f7e1f0b2b8f47afb36d0cda68cc2b3f2', 'hola', 'hola', '2015-06-22 16:42:50', '2015-06-12', '0'),
(20, 2, 3, 'jose', '202cb962ac59075b964b07152d234b70', 'Centro Estudios', 'Newton College', '2015-07-07 05:36:09', '0000-00-00', '1'),
(21, 5, 4, 'kel', '202cb962ac59075b964b07152d234b70', 'Lugar de Nacimiento', 'Lima', '2015-07-09 01:28:37', '2015-12-31', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`idalumno`), ADD UNIQUE KEY `codigo` (`codigo`), ADD UNIQUE KEY `idpersona_2` (`idpersona`,`codigo`), ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
 ADD PRIMARY KEY (`idasistencia`), ADD KEY `idcad` (`idcad`,`idmatricula`), ADD KEY `idmatricula` (`idmatricula`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`idcurso`), ADD UNIQUE KEY `codigo` (`codigo`), ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `docentecurso`
--
ALTER TABLE `docentecurso`
 ADD PRIMARY KEY (`idcad`), ADD KEY `idcurso` (`idcurso`,`idtrabajador`,`idgrupo`), ADD KEY `idtrabajador` (`idtrabajador`), ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
 ADD PRIMARY KEY (`idgrupo`), ADD UNIQUE KEY `idgrupo` (`idgrupo`,`nivel`,`grado`), ADD UNIQUE KEY `nivel` (`nivel`,`grado`,`seccion`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
 ADD PRIMARY KEY (`idusuario`,`fechaacceso`), ADD UNIQUE KEY `idusuario_2` (`idusuario`,`fechaacceso`), ADD KEY `idusuario` (`idusuario`);

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
-- Indices de la tabla `notaperiodo`
--
ALTER TABLE `notaperiodo`
 ADD UNIQUE KEY `periodo` (`periodo`,`idnota`), ADD KEY `idnota` (`idnota`);

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
 ADD PRIMARY KEY (`idtrabajador`), ADD UNIQUE KEY `codigo` (`codigo`), ADD UNIQUE KEY `idpersona_2` (`idpersona`), ADD KEY `idpersona` (`idpersona`), ADD KEY `idrol` (`idrol`);

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
MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del alumno.',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del curso.',AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `docentecurso`
--
ALTER TABLE `docentecurso`
MODIFY `idcad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del grupo.',AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
MODIFY `idmatricula` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de matrícula.',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la nota';
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de la persona',AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
MODIFY `idtrabajador` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del trabajador',AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario.',AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`idcad`) REFERENCES `docentecurso` (`idcad`),
ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`idmatricula`) REFERENCES `matricula` (`idmatricula`);

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
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`),
ADD CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idgrupo`) REFERENCES `grupo` (`idgrupo`),
ADD CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idmatricula`) REFERENCES `matricula` (`idmatricula`),
ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

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
