-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 04. Agustus 2010 jam 03:54
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `smsd`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `daemons`
-- 

CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `daemons`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `gammu`
-- 

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `gammu`
-- 

INSERT INTO `gammu` VALUES (10);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `inbox`
-- 

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL default '',
  `Class` int(11) NOT NULL default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL auto_increment,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL default 'false',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `inbox`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `outbox`
-- 

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL auto_increment,
  `MultiPart` enum('false','true') default 'false',
  `RelativeValidity` int(11) default '-1',
  `SenderID` varchar(255) default NULL,
  `SendingTimeOut` timestamp NULL default '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') default 'default',
  `CreatorID` text NOT NULL,
  PRIMARY KEY  (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data untuk tabel `outbox`
-- 

INSERT INTO `outbox` VALUES ('2010-08-04 02:51:57', '2010-08-04 02:51:57', '0000-00-00 00:00:00', NULL, '085769010001', 'Default_No_Compression', NULL, -1, 'instalasi sms-gammu sukses', 7, 'false', -1, NULL, '0000-00-00 00:00:00', 'default', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `outbox_multipart`
-- 

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) default '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL default '0',
  `SequencePosition` int(11) NOT NULL default '1',
  PRIMARY KEY  (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `outbox_multipart`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pbk`
-- 

CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL auto_increment,
  `GroupID` int(11) NOT NULL default '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `pbk`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `pbk_groups`
-- 

CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `pbk_groups`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `phones`
-- 

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL default '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL default 'no',
  `Receive` enum('yes','no') NOT NULL default 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL default '0',
  `Signal` int(11) NOT NULL default '0',
  `Sent` int(11) NOT NULL default '0',
  `Received` int(11) NOT NULL default '0',
  PRIMARY KEY  (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `phones`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `sentitems`
-- 

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL default NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL default '',
  `Class` int(11) NOT NULL default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL default '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL default '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL default 'SendingOK',
  `StatusError` int(11) NOT NULL default '-1',
  `TPMR` int(11) NOT NULL default '-1',
  `RelativeValidity` int(11) NOT NULL default '-1',
  `CreatorID` text NOT NULL,
  PRIMARY KEY  (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data untuk tabel `sentitems`
-- 

