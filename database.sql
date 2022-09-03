
use belajar_php_database;

create table admin (
username varchar(100),
password varchar(100),
primary key(username)) engine=InnoDB;
select * from admin;
insert into admin (username,password) values('riki','riki');