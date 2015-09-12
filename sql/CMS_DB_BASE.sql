-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2015 at 11:11 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a9271229_arkgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `hot_news`
--

CREATE TABLE `hot_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Patch',
  `content` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='This is the table that shows all the Hot News on the Hot New' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hot_news`
--

INSERT INTO `hot_news` VALUES(1, 'Patch 177', 'Τώρα μπορείτε να κάνετε το βρυχησμό του T-Rex! Με το δεξί κλίκ, Νέος τύπος κτιρίων: Ενισχυμένο μεταλλικό κουτί, για όταν θα έχετε να αποθηκεύσετε πολλά αντικείμενα με τη μέγιστη ασφάλεια!', 'wideup', '0');
INSERT INTO `hot_news` VALUES(2, 'Patch 176', 'Διορθώθηκε το σφάλμα με την αναρρίχηση σκάλας,\r\nΜπορείτε τώρα να περπατήσετε προς τα πίσω με όλους τους Δινόσαυρους,\r\nΑφαιρέθηκε το όριο περιεχομένου των', 'wideup', '0');
INSERT INTO `hot_news` VALUES(3, 'Patch 175', 'Τα αποθέματα των Δινοσάυρων έχουν πλέον περιορισμένες υποδοχές,\r\nΤα Argentavis μπορούν πλέον να γραπόσουν χαρακτήρες, με υψηλότερο όριο βάρους από τον Pteranodon', 'wideup', '0');
INSERT INTO `hot_news` VALUES(4, 'Patch 174', 'Διορθώθηκε το πρόβλημα με τους Σπινοσάυρους που επηρεάζαν τον Server 17,\r\nΤα Sabers μπορούν πλέον να πηδήξουν - είναι τρελά όμορφο να επιτεθούν καθώς πηδάνε,\r\nΒελτίωση στην εξημέρωση των Δινοσάυρων', 'wideup', '0');

-- --------------------------------------------------------

--
-- Table structure for table `main_news`
--

CREATE TABLE `main_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `blockquote` text CHARACTER SET greek NOT NULL,
  `contentlnk` text CHARACTER SET utf8 NOT NULL,
  `comments` int(10) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `from` varchar(50) CHARACTER SET greek NOT NULL,
  `continue` varchar(50) CHARACTER SET greek NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `main_news`
--

INSERT INTO `main_news` VALUES(1, 'GreekTheGeek', '2015-06-06 12:49:00', 'Σύντομα κοντά σας!', 'Η Σελίδα μας είναι υπο κατασκευή αλλά κάνουμε τα δυνατά μας για την τελειώσουμε όσο πιο γρήγορα γίνετε.', 'Σύντομα κοντά σας!', '1', 0, '31', 'από', 'Συνέχεια');
INSERT INTO `main_news` VALUES(2, 'Chaos', '2015-06-20 06:44:36', 'Δοκιμή του συστήματος', 'Κάνουμε ακόμα δοκιμές σύμφονα με τα χαρακτηριστικά της σελίδας που προσθέτουμε κάθε μέρα', 'QUOTE: Τα νέα λειτουργούν καταπληκτικά!', '2', 0, '31', 'από', 'Συνέχεια');
