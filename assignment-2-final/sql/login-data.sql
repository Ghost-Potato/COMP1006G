CREATE TABLE `assignment_2_users` (
user_id int NOT NULL auto_increment,
first_name varchar(50) NOT NULL,
last_name varchar(50) NOT NULL,
email varchar(50) NOT NULL,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL,
primary key (user_id)
);