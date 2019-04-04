create database contaazul;

use contaazul;

create table users(
	id int primary key auto_increment,
	id_company int not null,
	email varchar(50) unique not null,
	password varchar(32) not null,
	id_group int not null 
);

create table permission_groups(
	id int primary key auto_increment,
	id_company int not null,
	name varchar(50) not null,
	params varchar(200)
);

create table permission_params(
	id int primary key auto_increment,
	name varchar(50) not null
);

create table clients(
	id int primary key auto_increment,
	id_company int not null,
	name varchar(100) not null,
	email varchar(100) unique null,
	phone varchar(50) null,
	address varchar(100) null, 
	address_neighb varchar(100) null,
	address_city varchar(50) null,
	address_state varchar(50) null,
	address_country varchar(50) null,
	address_zipcode varchar(50) null,
	stars int default 3 not null,
	internal_obs text null
);

create table inventory(
	id int primary key auto_increment,
	id_company int not null,
	name varchar(100) not null,
	price float not null,
	quant int not null,
	min_quant int not null
);

create table inventory_history(
	id int primary key auto_increment,
	id_product int not null,
	id_user int not null,
	id_company int not null,
	action varchar(3) not null,
	date_action datetime
);

create table sales(
	id int primary key auto_increment,
	id_client int not null,
	id_user int not null,
	id_company int not null,
	date_sale datetime not null, 
	total_price float not null
);

create table sales_products(
	id int primary key auto_increment,
	id_sale int not null,
	id_product int not null,
	id_company int not null,
	quant int not null,
	sale_price float not null
);

create table purchases(
	id int primary key auto_increment,
	id_user int not null,
	id_company int not null,
	date_purchase datetime not null,
	total_price float not null
);

create table purchases_products(
	id int primary key auto_increment,
	id_purchase int not null,
	id_company int not null,
	name varchar(100) not null,
	quant int not null,
	purchase_price float not null
);

create table companies(
	id int primary key auto_increment,
	name varchar(100) not null
);