INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (1, 'admin@turbohawkracing.ca', '$2y$10$x9txyi0tLDqI.3w3Ugw/WeOfPZEWLQkXYTRMW9MFCir/8CjAA/.Ge', '2019-10-14 00:47:04', '2019-10-14 22:13:05', 'admin', 'n;lkjsgbfdhsnoijpuhgfdjnpoiuhtgrsfpojknisfthgrdpokmnjstrh;klnjmsrth;lmk');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (3, 'david@turbohawkracing.ca', '$2y$10$DVVR0EWYMPpv6jtv5/o32O2VAujOMOAx8Vam.tMM26TyK39Hy56sy', '2019-10-14 22:12:48', '2019-10-15 17:51:20', 'confirmed', 'awe908tr87o3qgoasyuigdtrf43qergfe');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (4, 'weakassboi@ooofmail.com', '$2y$10$3AP34nKYVsK9uGo52qV4/uYeFxzi7fz/n2ybzMjcCYOSDCqzzDCxu', '2019-10-15 17:47:45', '2019-10-15 17:49:08', 'user', 'sadu9yfn09q3v8 yfhp9wsdefw3e34');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (5, 'reeeeeee@oofmail.com', '$2y$10$6y9iB1Shh7a9u6Ia/zTMV.IdGYbYqm5t8Z.p2gNkXngVok5jw65dO', '2019-10-15 18:22:23', '2019-10-15 18:22:23', 'user', '90-8amwv3u824095m3434n08923b7ynb598woekdfs');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (7, 'c4378019@urhen.com', '$2y$10$qWjlwP1D098Nd3NjxhhDiuizTlY5hYPVZFm38t32s9.LexkvmHLY6', '2019-10-16 04:44:12', '2019-10-16 04:50:40', 'confirmed', 'c75abf09-637d-4285-8de8-66864a0f0e7b');

INSERT INTO customers (id, name, last_name, civil_number, street_name, user_id, phone_number, created, modified) VALUES (1, 'David', 'Ringuet', '6705', 'Rue Du Chardonneret', 3, '5142687426', '2019-10-14 19:52:27', '2019-10-15 18:28:12');
INSERT INTO customers (id, name, last_name, civil_number, street_name, user_id, phone_number, created, modified) VALUES (2, 'esgfgdfzs', 'ddghjfhgdj', '8569', 'Rue du benier', 5, '8591541221', '2019-10-15 18:26:04', '2019-10-15 18:26:04');

INSERT INTO files (id, name, path, created, modified, status) VALUES (1, 'phoken great times.png', 'Files/', '2019-10-17 02:18:25', '2019-10-17 02:18:25', 1);
INSERT INTO files (id, name, path, created, modified, status) VALUES (2, 'phoken great times.png', 'Files/', '2019-10-17 02:19:46', '2019-10-17 02:19:46', 1);
INSERT INTO files (id, name, path, created, modified, status) VALUES (3, 'quattropaint.png', 'Files/', '2019-11-10 22:43:15', '2019-11-11 01:56:07', 1);

INSERT INTO instructors (id, name, lastName, phone, user_id, created, modified) VALUES (1, 'Collin', 'McRae', '6852147485', 1, '2019-10-15 01:23:31', '2019-10-15 01:23:31');
INSERT INTO instructors (id, name, lastName, phone, user_id, created, modified) VALUES (2, 'Roger', 'Latraverses', '5862663535', 4, '2019-10-15 18:17:59', '2019-10-15 18:18:34');

INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (1, 'Réservé', '2019-10-14 19:24:24', '2019-10-14 19:24:28');
INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (2, 'Annulé', '2019-10-14 19:24:42', '2019-10-14 19:24:45');
INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (3, 'Complété', '2019-10-14 19:25:08', '2019-10-15 18:31:26');

INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (1, 'Volvo', 'Amazon', 'GT', 'Manual', 'RWD', 1, '2019-10-15 01:22:29', '2019-10-15 18:19:46');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (2, 'Nissan', 'Sentra', 'SE-R Spec V', 'Manual', 'FWD', 2, '2019-10-15 18:26:15', '2019-11-11 03:42:51');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (3, 'Honda', 'Civic', 'Type R', 'Manual', 'FWD', 1, '2019-10-15 18:27:12', '2019-10-15 18:27:24');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (4, 'Alfa Romeo', 'Alfetta', 'GTv6', 'Manual', 'RWD', 1, '2019-10-16 16:19:02', '2019-10-16 16:19:02');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (5, 'Audi', 'Sport Quattro', 'E2', 'Manual', 'AWD', 1, '2019-11-10 22:42:57', '2019-11-11 03:55:28');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (6, 'Lotus', 'Vauxhaul Carlton', '', 'Manual', 'RWD', null, '2019-11-11 02:09:29', '2019-11-11 03:50:44');

INSERT INTO cars_customers (id, customer_id, car_id) VALUES (7, 1, 6);
INSERT INTO cars_customers (id, customer_id, car_id) VALUES (8, 2, 6);
INSERT INTO cars_customers (id, customer_id, car_id) VALUES (9, 1, 5);
INSERT INTO cars_customers (id, customer_id, car_id) VALUES (10, 2, 5);

INSERT INTO cars_files (id, car_id, file_id) VALUES (1, 5, 3);

INSERT INTO courses (id, name, length, customer_id, lesson_date, instructor_id, car_id, lesson_status_ref_id, created, modified) VALUES (1, 'Rally 101 RWD', 4, 1, '2020-03-10 10:44:00', 1, 1, 1, '2019-10-15 01:25:06', '2019-10-15 01:25:06');
INSERT INTO courses (id, name, length, customer_id, lesson_date, instructor_id, car_id, lesson_status_ref_id, created, modified) VALUES (2, 'Conduite d''hiver 101', 6, 2, '2020-03-16 12:15:00', 2, 2, 1, '2019-10-15 18:40:48', '2019-10-15 18:40:48');

INSERT INTO courses_names (id, name) VALUES (1, 'Conduite d''hiver 101');
INSERT INTO courses_names (id, name) VALUES (2, 'Conduite d''hiver 201');
INSERT INTO courses_names (id, name) VALUES (3, 'Rally 101 RWD');
INSERT INTO courses_names (id, name) VALUES (4, 'Rally 101 FWD');
INSERT INTO courses_names (id, name) VALUES (5, 'Rally 101 AWD');
INSERT INTO courses_names (id, name) VALUES (6, 'Conduite de performance 101');
INSERT INTO courses_names (id, name) VALUES (7, 'Bonnes manières sur la piste');
INSERT INTO courses_names (id, name) VALUES (8, 'Techniques de rally avancé');
INSERT INTO courses_names (id, name) VALUES (9, 'Co-pilote rally i');
INSERT INTO courses_names (id, name) VALUES (10, 'Co-pilote rally avancé');
INSERT INTO courses_names (id, name) VALUES (11, 'Conduite de performance avec voiture manuelle');
INSERT INTO courses_names (id, name) VALUES (12, 'Dérapages controlés 101');
INSERT INTO courses_names (id, name) VALUES (13, 'Drift 101');
INSERT INTO courses_names (id, name) VALUES (14, 'Drift 201');
INSERT INTO courses_names (id, name) VALUES (15, 'Conduite de performance 201');


INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'sqlite_sequence', 'sqlite_sequence', 21, 'CREATE TABLE sqlite_sequence(name,seq)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'I18n', 'I18n', 22, 'CREATE TABLE "I18n"
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
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'sqlite_autoindex_I18n_1', 'I18n', 23, null);
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'sqlite_autoindex_I18n_2', 'I18n', 24, null);
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'cars_customers', 'cars_customers', 20, 'CREATE TABLE "cars_customers"
(
	id integer not null
		primary key autoincrement,
	customer_id integer not null
		constraint cars_customers_customer_id
			references customers
				on update cascade on delete cascade,
	car_id integer not null
		constraint cars_customers_car_id
			references cars
				on update cascade on delete cascade
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'cars_files', 'cars_files', 10, 'CREATE TABLE "cars_files"
(
	id integer not null
		constraint cars_files_pk
			primary key autoincrement,
	car_id int not null
		constraint cars_files_cars_id
			references cars
				on update cascade on delete cascade,
	file_id int not null
		constraint car_file_files_id
			references files
				on update cascade on delete cascade
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'courses', 'courses', 11, 'CREATE TABLE "courses"
(
	id integer not null
		primary key autoincrement,
	name varchar(60) not null,
	length int,
	customer_id int not null
		constraint customer_id
			references customers
				on update cascade on delete cascade,
	lesson_date datetime,
	instructor_id int not null
		constraint instructor_id
			references instructors
				on update cascade on delete cascade,
	car_id int not null
		constraint car_id
			references cars
				on update cascade on delete cascade,
	lesson_status_ref_id int not null
		constraint lesson_status_refs_id
			references lesson_status_refs
				on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'customers', 'customers', 12, 'CREATE TABLE "customers"
(
	id integer not null
		primary key autoincrement,
	name varchar(50) not null,
	last_name varchar(50) not null,
	civil_number varchar(255) not null,
	street_name varchar(255),
	user_id int not null
		constraint customer_user_id
			references users
				on update cascade on delete cascade,
	phone_number varchar(10) not null,
	created datetime not null,
	modified datetime not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'files', 'files', 8, 'CREATE TABLE "files"
(
	id integer not null
		primary key autoincrement,
	name varchar(255) not null,
	path varchar(255) not null,
	created datetime not null,
	modified datetime not null,
	status tinyint(1) default 1 not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'instructors', 'instructors', 2, 'CREATE TABLE "instructors"
(
	id integer not null
		primary key autoincrement,
	name varchar(60) not null,
	lastName varchar(60),
	phone varchar(11) not null,
	user_id int not null
		constraint user_id
			references users
				on update cascade on delete cascade,
	created datetime not null,
	modified datetime not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'lesson_status_refs', 'lesson_status_refs', 3, 'CREATE TABLE "lesson_status_refs"
(
	id integer not null
		primary key autoincrement,
	name varchar(255) not null,
	created datetime not null,
	modified datetime not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'users', 'users', 4, 'CREATE TABLE "users"
(
	id integer not null
		primary key autoincrement,
	email varchar(255) not null,
	password varchar(255) not null,
	created datetime not null,
	modified datetime not null,
	role varchar(10) default ''user'' not null,
	uuid varchar(255)
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'cars', 'cars', 5, 'CREATE TABLE "cars"
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
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'cars_dg_tmp', 'cars_dg_tmp', 6, 'CREATE TABLE cars_dg_tmp
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
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('table', 'courses_names', 'courses_names', 7, 'CREATE TABLE courses_names
(
	id integer not null
		constraint courses_names_pk
			primary key autoincrement,
	name varchar not null
)');
INSERT INTO sqlite_master (type, name, tbl_name, rootpage, sql) VALUES ('index', 'courses_names_id_uindex', 'courses_names', 9, 'CREATE UNIQUE INDEX courses_names_id_uindex
	on courses_names (id)');
INSERT INTO sqlite_sequence (name, seq) VALUES ('I18n', 0);
INSERT INTO sqlite_sequence (name, seq) VALUES ('cars_customers', 10);
INSERT INTO sqlite_sequence (name, seq) VALUES ('cars_files', 1);
INSERT INTO sqlite_sequence (name, seq) VALUES ('courses', 2);
INSERT INTO sqlite_sequence (name, seq) VALUES ('customers', 2);
INSERT INTO sqlite_sequence (name, seq) VALUES ('files', 3);
INSERT INTO sqlite_sequence (name, seq) VALUES ('instructors', 2);
INSERT INTO sqlite_sequence (name, seq) VALUES ('lesson_status_refs', 3);
INSERT INTO sqlite_sequence (name, seq) VALUES ('users', 7);
INSERT INTO sqlite_sequence (name, seq) VALUES ('cars', 6);
INSERT INTO sqlite_sequence (name, seq) VALUES ('courses_names', 15);
