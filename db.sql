create table crudPHPjQuery(
    id int not null auto_increment,
    userName varchar(100) not null,
    userEmail varchar(255) not null unique,
    
    primary key(id)
);

INSERT INTO crudphpjquery(userName, userEmail) VALUES ('Doug', 'doug@doug.com.br');