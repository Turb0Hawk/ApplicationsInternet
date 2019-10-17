create table files
(
    id       int auto_increment
        primary key,
    name     varchar(255)         not null,
    path     varchar(255)         not null,
    created  datetime             not null,
    modified datetime             not null,
    status   tinyint(1) default 1 not null
);

create table lesson_status_refs
(
    id       int auto_increment
        primary key,
    name     varchar(255) not null,
    created  datetime     not null,
    modified datetime     not null
);

create table users
(
    id       int auto_increment
        primary key,
    email    varchar(255)               not null,
    password varchar(255)               not null,
    created  datetime                   not null,
    modified datetime                   not null,
    role     varchar(10) default 'user' not null,
    uuid     varchar(255)               null
);

create table customers
(
    id           int auto_increment
        primary key,
    name         varchar(50)  not null,
    last_name    varchar(50)  not null,
    civil_number varchar(255) not null,
    street_name  varchar(255) null,
    user_id      int          not null,
    phone_number varchar(10)  not null,
    created      datetime     not null,
    modified     datetime     not null,
    constraint customer_user_id
        foreign key (user_id) references users (id)
            on update cascade on delete cascade
);

create table cars
(
    id           int auto_increment
        primary key,
    make         varchar(255) not null,
    model        varchar(255) not null,
    trim         varchar(50)  null,
    transmission varchar(10)  null,
    drivetrain   varchar(3)   null,
    customer_id  int          not null,
    created      datetime     not null,
    modified     datetime     not null,
    constraint cars_customer_id
        foreign key (customer_id) references customers (id)
            on update cascade on delete cascade
);

create table cars_files
(
    id      int not null,
    car_id  int not null,
    file_id int not null,
    constraint car_file_files_id
        foreign key (file_id) references files (id)
            on update cascade on delete cascade,
    constraint cars_files_cars_id
        foreign key (car_id) references cars (id)
            on update cascade on delete cascade
);

create table instructors
(
    id       int auto_increment
        primary key,
    name     varchar(60) not null,
    lastName varchar(60) null,
    phone    varchar(11) not null,
    user_id  int         not null,
    created  datetime    not null,
    modified datetime    not null,
    constraint user_id
        foreign key (user_id) references users (id)
            on update cascade on delete cascade
);

create table courses
(
    id                   int auto_increment
        primary key,
    name                 varchar(60) not null,
    length               int         null,
    customer_id          int         not null,
    lesson_date          datetime    null,
    instructor_id        int         not null,
    car_id               int         not null,
    lesson_status_ref_id int         not null,
    created              datetime    not null,
    modified             datetime    not null,
    constraint car_id
        foreign key (car_id) references cars (id)
            on update cascade on delete cascade,
    constraint customer_id
        foreign key (customer_id) references customers (id)
            on update cascade on delete cascade,
    constraint instructor_id
        foreign key (instructor_id) references instructors (id)
            on update cascade on delete cascade,
    constraint lesson_status_refs_id
        foreign key (lesson_status_ref_id) references lesson_status_refs (id)
            on update cascade on delete cascade
);



INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (1, 'Volvo', 'Amazon', 'GT', 'Manual', 'RWD', 1, '2019-10-15 01:22:29', '2019-10-15 18:19:46');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (2, 'Nissan', 'Sentra', 'SE-R Spec V', 'Manual', 'FWD', 2, '2019-10-15 18:26:15', '2019-10-15 18:26:33');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (3, 'Honda', 'Civic', 'Type R', 'Manual', 'FWD', 1, '2019-10-15 18:27:12', '2019-10-15 18:27:24');
INSERT INTO cars (id, make, model, trim, transmission, drivetrain, customer_id, created, modified) VALUES (4, 'Alfa Romeo', 'Alfetta', 'GTv6', 'Manual', 'RWD', 1, '2019-10-16 16:19:02', '2019-10-16 16:19:02');
INSERT INTO courses (id, name, length, customer_id, lesson_date, instructor_id, car_id, lesson_status_ref_id, created, modified) VALUES (1, 'Rally 101 RWD', 4, 1, '2020-03-10 10:44:00', 1, 1, 1, '2019-10-15 01:25:06', '2019-10-15 01:25:06');
INSERT INTO courses (id, name, length, customer_id, lesson_date, instructor_id, car_id, lesson_status_ref_id, created, modified) VALUES (2, 'Conduite d''hiver 101', 6, 2, '2020-03-16 12:15:00', 2, 2, 1, '2019-10-15 18:40:48', '2019-10-15 18:40:48');
INSERT INTO customers (id, name, last_name, civil_number, street_name, user_id, phone_number, created, modified) VALUES (1, 'David', 'Ringuet', '6705', 'Rue Du Chardonneret', 3, '5142687426', '2019-10-14 19:52:27', '2019-10-15 18:28:12');
INSERT INTO customers (id, name, last_name, civil_number, street_name, user_id, phone_number, created, modified) VALUES (2, 'esgfgdfzs', 'ddghjfhgdj', '8569', 'Rue du benier', 5, '8591541221', '2019-10-15 18:26:04', '2019-10-15 18:26:04');
INSERT INTO files (id, name, path, created, modified, status) VALUES (1, 'phoken great times.png', 'Files/', '2019-10-17 02:18:25', '2019-10-17 02:18:25', 1);
INSERT INTO files (id, name, path, created, modified, status) VALUES (2, 'phoken great times.png', 'Files/', '2019-10-17 02:19:46', '2019-10-17 02:19:46', 1);
INSERT INTO instructors (id, name, lastName, phone, user_id, created, modified) VALUES (1, 'Collin', 'McRae', '6852147485', 1, '2019-10-15 01:23:31', '2019-10-15 01:23:31');
INSERT INTO instructors (id, name, lastName, phone, user_id, created, modified) VALUES (2, 'Roger', 'Latraverses', '5862663535', 4, '2019-10-15 18:17:59', '2019-10-15 18:18:34');
INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (1, 'Réservé', '2019-10-14 19:24:24', '2019-10-14 19:24:28');
INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (2, 'Annulé', '2019-10-14 19:24:42', '2019-10-14 19:24:45');
INSERT INTO lesson_status_refs (id, name, created, modified) VALUES (3, 'Complété', '2019-10-14 19:25:08', '2019-10-15 18:31:26');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (1, 'admin@turbohawkracing.ca', '$2y$10$x9txyi0tLDqI.3w3Ugw/WeOfPZEWLQkXYTRMW9MFCir/8CjAA/.Ge', '2019-10-14 00:47:04', '2019-10-14 22:13:05', 'admin', 'n;lkjsgbfdhsnoijpuhgfdjnpoiuhtgrsfpojknisfthgrdpokmnjstrh;klnjmsrth;lmk');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (3, 'david@turbohawkracing.ca', '$2y$10$DVVR0EWYMPpv6jtv5/o32O2VAujOMOAx8Vam.tMM26TyK39Hy56sy', '2019-10-14 22:12:48', '2019-10-15 17:51:20', 'confirmed', 'awe908tr87o3qgoasyuigdtrf43qergfe');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (4, 'weakassboi@ooofmail.com', '$2y$10$3AP34nKYVsK9uGo52qV4/uYeFxzi7fz/n2ybzMjcCYOSDCqzzDCxu', '2019-10-15 17:47:45', '2019-10-15 17:49:08', 'user', 'sadu9yfn09q3v8 yfhp9wsdefw3e34');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (5, 'reeeeeee@oofmail.com', '$2y$10$6y9iB1Shh7a9u6Ia/zTMV.IdGYbYqm5t8Z.p2gNkXngVok5jw65dO', '2019-10-15 18:22:23', '2019-10-15 18:22:23', 'user', '90-8amwv3u824095m3434n08923b7ynb598woekdfs');
INSERT INTO users (id, email, password, created, modified, role, uuid) VALUES (7, 'c4378019@urhen.com', '$2y$10$qWjlwP1D098Nd3NjxhhDiuizTlY5hYPVZFm38t32s9.LexkvmHLY6', '2019-10-16 04:44:12', '2019-10-16 04:50:40', 'confirmed', 'c75abf09-637d-4285-8de8-66864a0f0e7b');
