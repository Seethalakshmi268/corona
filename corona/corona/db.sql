CREATE TABLE `cases` (
  `id` int(11) NOT NULL auto_increment,
  `person` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
CONSTRAINT FK_cases_1
  FOREIGN KEY (login_id) REFERENCES login(id)
  ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
