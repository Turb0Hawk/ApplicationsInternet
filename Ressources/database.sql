create table files
(
    id       int auto_increment
        primary key,
    name     varchar(255)         not null,
    path     varchar(255)         not null,
    created  datetime             not null,
    modified datetime             not null,
    status   tinyint(1) default 1 not null comment '1 = Active, 0 = Inactive'
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

