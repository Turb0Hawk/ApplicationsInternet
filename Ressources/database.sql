


-- we don't know how to generate root <with-no-name> (class Root) :(
create table I18n
(
	id integer not null
		primary key autoincrement,
	locale varchar(6) not null,
	model varchar(255) not null,
	foreign_key int not null,
	field varchar(255) not null,
	content clob,
	constraint I18N_FIELD
		unique (model, foreign_key, field),
	constraint I18N_LOCALE_FIELD
		unique (locale, model, foreign_key, field)
);

create table courses_names
(
	id integer not null
		constraint courses_names_pk
			primary key autoincrement,
	name varchar not null
);

create unique index courses_names_id_uindex
	on courses_names (id);

create table files
(
	id integer not null
		primary key autoincrement,
	name varchar(255) not null,
	path varchar(255) not null,
	created datetime not null,
	modified datetime not null,
	status tinyint(1) default 1 not null
);

create table lesson_status_refs
(
	id integer not null
		primary key autoincrement,
	name varchar(255) not null,
	created datetime not null,
	modified datetime not null
);

create table users
(
	id integer not null
		primary key autoincrement,
	email varchar(255) not null,
	password varchar(255) not null,
	created datetime not null,
	modified datetime not null,
	role varchar(10) default 'user' not null,
	uuid varchar(255)
);

create table customers
(
	id integer not null
		primary key autoincrement,
	name varchar(50) not null,
	last_name varchar(50) not null,
	civil_number varchar(255) not null,
	street_name varchar(255),
	user_id int not null
		references users
			on update cascade on delete cascade,
	phone_number varchar(10) not null,
	created datetime not null,
	modified datetime not null
);

create table cars
(
	id integer not null
		primary key autoincrement,
	make varchar(255) not null,
	model varchar(255) not null,
	trim varchar(50),
	transmission varchar(10),
	drivetrain varchar(3),
	customer_id int
		references customers
			on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
);

create table cars_customers
(
	id integer not null
		primary key autoincrement,
	customer_id integer not null
		references customers
			on update cascade on delete cascade,
	car_id integer not null
		references cars
			on update cascade on delete cascade
);

create table cars_dg_tmp
(
	id integer not null
		primary key autoincrement,
	make varchar(255) not null,
	model varchar(255) not null,
	trim varchar(50),
	transmission varchar(10),
	drivetrain varchar(3),
	customer_id int not null
		references customers
			on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
);

create table cars_files
(
	id integer not null
		constraint cars_files_pk
			primary key autoincrement,
	car_id int not null
		references cars
			on update cascade on delete cascade,
	file_id int not null
		references files
			on update cascade on delete cascade
);

create table instructors
(
	id integer not null
		primary key autoincrement,
	name varchar(60) not null,
	lastName varchar(60),
	phone varchar(11) not null,
	user_id int not null
		references users
			on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
);

create table courses
(
	id integer not null
		primary key autoincrement,
	name varchar(60) not null,
	length int,
	customer_id int not null
		references customers
			on update cascade on delete cascade,
	lesson_date datetime,
	instructor_id int not null
		references instructors
			on update cascade on delete cascade,
	car_id int not null
		references cars
			on update cascade on delete cascade,
	lesson_status_ref_id int not null
		references lesson_status_refs
			on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
);



