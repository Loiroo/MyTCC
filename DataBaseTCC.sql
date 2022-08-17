drop database if exists todo_db;
create database if not exists todo_db;
use todo_db;

create table if not exists tb_todo(
id int primary key auto_increment,
task varchar(100) not null,
done_date timestamp default null,
insert_date timestamp not null,
update_date timestamp default null,
delete_date timestamp default null
)

desc tb_todo;