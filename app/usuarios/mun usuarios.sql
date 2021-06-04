/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.7.31 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `usuarios` (
	`usuario` varchar (60),
	`contrasena` varchar (60),
	`idUsuario` int (20)
); 
insert into `usuarios` (`usuario`, `contrasena`, `idUsuario`) values('jos','1810','1');
insert into `usuarios` (`usuario`, `contrasena`, `idUsuario`) values('arthur','m0rg4n','2');
