-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: sql104.epizy.com
-- Timp de generare: nov. 10, 2019 la 03:20 PM
-- Versiune server: 5.6.45-86.1
-- Versiune PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `votare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `votare`;

CREATE TABLE `cetateni` (
  `id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_romanian_ci NOT NULL,
  `code` mediumtext COLLATE utf8_romanian_ci NOT NULL,
  `clasa` int(11) NOT NULL,
  `email` mediumtext COLLATE utf8_romanian_ci NOT NULL,
  `votat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

CREATE TABLE `clase` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `partide` (
  `id` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8_romanian_ci NOT NULL,
  `membri` mediumtext COLLATE utf8_romanian_ci NOT NULL,
  `logo_path` mediumtext COLLATE utf8_romanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

CREATE TABLE `voturi` (
  `id` int(11) NOT NULL,
  `partid` int(11) NOT NULL,
  `cnt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `cetateni`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `clase`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `partide`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `voturi`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cetateni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

ALTER TABLE `clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `partide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `voturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
