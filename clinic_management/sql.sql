/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - clinic_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`clinic_management` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `clinic_management`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`doctor_id`,`patient_id`,`status`,`amount`,`date`) values 
(1,1,1,'Payment Completed','100','20-31-1030'),
(2,2,2,'Payment Completed','100','22-1-3929'),
(3,3,1,'pending','100','2023-09-10');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`patient_id`,`complaint`,`reply`,`date`) values 
(1,1,'good','pending','2023-08-22');

/*Table structure for table `doctor` */

DROP TABLE IF EXISTS `doctor`;

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `doctor` */

insert  into `doctor`(`doctor_id`,`login_id`,`firstname`,`lastname`,`phone`,`email`,`place`,`qualification`,`gender`,`dob`) values 
(1,5,'staff ','1','9778292914','staff1@gmail.com','Thrissur ','Post graduation','male','1999-02-12'),
(2,6,'staff','2','1234567876','staff2@gmail.com','sreemulam nagaram','Post graduation','male','1998-12-12'),
(3,9,'doctor','qwerty','02345678907','student@gmail.com','ernakulam1','mbbs','male','2023-09-09');

/*Table structure for table `fees` */

DROP TABLE IF EXISTS `fees`;

CREATE TABLE `fees` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL,
  `feeamount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `fees` */

insert  into `fees`(`fee_id`,`doctor_id`,`feeamount`) values 
(1,0,'200'),
(2,0,'200'),
(3,0,'200'),
(4,0,'200'),
(5,0,'200'),
(8,3,'100');

/*Table structure for table `laboratory` */

DROP TABLE IF EXISTS `laboratory`;

CREATE TABLE `laboratory` (
  `lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `labname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `laboratory` */

insert  into `laboratory`(`lab_id`,`login_id`,`labname`,`phone`,`email`) values 
(1,7,'lab1','12356789','lab2@gmail.com');

/*Table structure for table `labtests` */

DROP TABLE IF EXISTS `labtests`;

CREATE TABLE `labtests` (
  `lab_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) DEFAULT NULL,
  `test_name` varbinary(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lab_test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `labtests` */

insert  into `labtests`(`lab_test_id`,`lab_id`,`test_name`,`desc`,`rate`) values 
(1,1,'eye power test','test','500'),
(2,1,'color blindness test','test','1500'),
(3,1,'glaucoma test','test1','2000'),
(4,1,'n test','tgwstts','3000');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'patient1','1234','patient'),
(2,'patient2','1234','patient'),
(3,'patient3','1234','patient'),
(4,'admin','admin','admin'),
(5,'staff1','1234','staff'),
(6,'staff2','1234','staff'),
(7,'lab1','1234','lab'),
(8,'pharmacy1','1234','pharmacy'),
(9,'doc','doc','doctor');

/*Table structure for table `medicineprescription` */

DROP TABLE IF EXISTS `medicineprescription`;

CREATE TABLE `medicineprescription` (
  `med_pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL,
  `med_pres_desc` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`med_pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `medicineprescription` */

insert  into `medicineprescription`(`med_pres_id`,`book_id`,`medicine_id`,`datetime`,`med_pres_desc`,`status`) values 
(1,1,1,'2022-11-19','111','Payment Completed'),
(2,1,2,'2022-11-19','111','pending'),
(3,1,4,'2022-11-19','111','pending'),
(4,1,3,'2022-11-19','111','Payment Completed'),
(5,2,2,'2022-11-19','222\r\n','Payment Completed'),
(6,2,4,'2022-11-19','2222','Payment Completed');

/*Table structure for table `medicines` */

DROP TABLE IF EXISTS `medicines`;

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `pharma_id` int(11) DEFAULT NULL,
  `medicinename` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `expirydate` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `medicines` */

insert  into `medicines`(`medicine_id`,`pharma_id`,`medicinename`,`desc`,`expirydate`,`rate`) values 
(1,1,'levocetrizine','10mg','2025-12-10','200'),
(2,1,'paracetamol','650mg','2027-12-12','50'),
(3,1,'oxflocine dropos','100mg','2025-12-12','200'),
(4,1,'atropine ','100mg','2025-12-12','500');

/*Table structure for table `patients` */

DROP TABLE IF EXISTS `patients`;

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `housename` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `bloodgroup` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `patients` */

insert  into `patients`(`patient_id`,`login_id`,`firstname`,`lastname`,`phone`,`email`,`housename`,`place`,`gender`,`bloodgroup`,`dob`) values 
(1,1,'patient','1','1234567888','patient1@gmail.com','h1','kochi','male','o+ve','2019-12-26'),
(2,2,'patient','2','2345678','patient2@gmail.com','h2','Thrissur ','female','B+ve','2013-01-30'),
(3,3,'patient','3','12345678765','patient3@gmail.com','h3','kochi','male','o+ve','2002-02-12');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `paymentdate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`pay_id`,`booking_id`,`amount`,`paymentdate`) values 
(1,1,'200','2022-11-19'),
(2,1,' 200','2022-11-19'),
(3,4,' 200','2022-11-19'),
(4,2,'200','2022-11-19'),
(5,6,' 500','2022-11-19'),
(6,5,' 50','2022-11-19'),
(7,2,' 2000','2022-11-19'),
(8,1,'100','2023-08-22');

/*Table structure for table `pharmacy` */

DROP TABLE IF EXISTS `pharmacy`;

CREATE TABLE `pharmacy` (
  `pharma_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `pharmacyname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pharma_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pharmacy` */

insert  into `pharmacy`(`pharma_id`,`login_id`,`pharmacyname`,`phone`,`email`) values 
(1,8,'pharmacy1','9778292914','pharmacy1@gmail.com');

/*Table structure for table `prescription` */

DROP TABLE IF EXISTS `prescription`;

CREATE TABLE `prescription` (
  `pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `medicine_name` varchar(100) DEFAULT NULL,
  `pres_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `prescription` */

insert  into `prescription`(`pres_id`,`doctor_id`,`booking_id`,`medicine_name`,`pres_description`) values 
(1,3,1,'dfghjkl;','asdfgh'),
(2,3,2,'dfghjkl;','asdfgh');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `request` */

/*Table structure for table `skindisease` */

DROP TABLE IF EXISTS `skindisease`;

CREATE TABLE `skindisease` (
  `skindisease_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `skin_disease` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`skindisease_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `skindisease` */

insert  into `skindisease`(`skindisease_id`,`patient_id`,`doctor_id`,`skin_disease`,`details`,`date`) values 
(1,1,3,'dfghjkl;','asdfgh','2023-08-22');

/*Table structure for table `testprescription` */

DROP TABLE IF EXISTS `testprescription`;

CREATE TABLE `testprescription` (
  `test_pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `lab_test_id` int(11) DEFAULT NULL,
  `lab_pres_desc` varchar(100) DEFAULT NULL,
  `report_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`test_pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `testprescription` */

insert  into `testprescription`(`test_pres_id`,`book_id`,`lab_test_id`,`lab_pres_desc`,`report_desc`) values 
(1,1,1,'111','pending'),
(2,1,2,'colour blindness','pending'),
(3,2,4,'n test','pending'),
(4,2,3,'glucoma','pending');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
