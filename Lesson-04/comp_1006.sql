DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `role` enum('admin','general') NOT NULL DEFAULT 'general',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `avatar`, `role`, `password`, `created_at`, `updated_at`) VALUES
(10, 'Elnora', 'Pagac', 'cary.labadie@lehner.biz', 'http://api.adorable.io/avatars/300/cary.labadie@lehner.biz', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2015-11-06 06:26:22', '2019-09-29 13:41:20'),
(11, 'Donny', 'Mann', 'alice.swaniawski@yahoo.com', 'http://api.adorable.io/avatars/300/alice.swaniawski@yahoo.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2018-11-28 02:09:53', '2019-09-29 13:41:20'),
(12, 'Clint', 'Quigley', 'amuller@thiel.com', 'http://api.adorable.io/avatars/300/amuller@thiel.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2016-10-14 09:59:58', '2019-09-29 13:41:20'),
(13, 'Elmore', 'Crist', 'fcasper@gmail.com', 'http://api.adorable.io/avatars/300/fcasper@gmail.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2019-01-22 12:11:38', '2019-09-29 13:41:20'),
(14, 'Maud', 'Langosh', 'hdonnelly@hotmail.com', 'http://api.adorable.io/avatars/300/hdonnelly@hotmail.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2015-07-26 11:25:06', '2019-09-29 13:41:20'),
(15, 'Pat', 'Bode', 'autumn62@mills.com', 'http://api.adorable.io/avatars/300/autumn62@mills.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2018-04-29 22:14:34', '2019-09-29 13:41:20'),
(16, 'Coty', 'Strosin', 'roob.otha@bashirian.com', 'http://api.adorable.io/avatars/300/roob.otha@bashirian.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2017-11-29 21:28:25', '2019-09-29 13:41:20'),
(17, 'Charlotte', 'Glover', 'crystel.gottlieb@yahoo.com', 'http://api.adorable.io/avatars/300/crystel.gottlieb@yahoo.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2017-02-19 07:14:55', '2019-09-29 13:41:20'),
(18, 'Josh', 'Macejkovic', 'travon03@hotmail.com', 'http://api.adorable.io/avatars/300/travon03@hotmail.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2016-10-13 19:33:30', '2019-09-29 13:41:20'),
(19, 'Orrin', 'Herzog', 'gerson.smitham@ohara.com', 'http://api.adorable.io/avatars/300/gerson.smitham@ohara.com', 'general', '$2y$10$a8AHDsFblwOih1bUTWMtZeRoNbe1EFk9.o7eKNEJ1/lAHox9ZNtUi', '2015-07-05 01:17:48', '2019-09-29 13:41:20');
