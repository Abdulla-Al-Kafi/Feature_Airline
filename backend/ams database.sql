create database ams;

create table user (
uid varchar(10),
fname varchar(30),
lname varchar(30),
phone int,
address varchar(255),
email varchar(50),
password varchar(255),
primary key (uid)
);

create table admin (
uid varchar(10) not null,
aid varchar(10) not null,
primary key (aid),
foreign key (uid) references user(uid)
);

create table customer (
uid varchar(10) not null,
cid varchar(10) not null,
distance_covered int,
type varchar(10),
primary key (cid),
foreign key (uid) references user(uid)
);

create table airport (
airport_code varchar(3) not null,
airport_name varchar(50) not null,
destination varchar(30) not null,
primary key (airport_code, destination)
);

create table flight (
fid int not null,
economy_price int not null,
business_price int not null,
seat_remaining int,
airport_code varchar(3) not null,
primary key (fid),
foreign key (airport_code) references airport(airport_code)
);

create table ticket (
book_id int not null,
fid int not null,
discount int,
payment int,
seat_type varchar(10) not null,
cid varchar(10) not null,
book_date date not null,
fdate date,
ftime time,
primary key (book_id),
foreign key (fid) references flight(fid)
);

create table help (
hid varchar(4),
htype varchar(50),
primary key (hid)
);

create table ask (
cid varchar(10) not null,
hid varchar(4) not null,
hdate date,
htime time,
foreign key (cid) references customer(cid),
foreign key (hid) references help(hid)
);

create table feedback (
cid varchar(10) not null,
feed_id int auto_increment,
feed_date date,
description varchar(1000),
primary key (feed_id),
foreign key (cid) references customer(cid)
);

create table coupon (
coupon_code char(5) not null,
validity date,
type varchar(20),
aid varchar(10) not null,
primary key(coupon_code),
foreign key (aid) references admin(aid)
);

create table leisure (
lname varchar(50) not null,
ltype varchar(30) not null,
airport_code varchar(3) not null,
primary key (lname),
foreign key (airport_code) references airport(airport_code)
);

create table car_service (
car_model varchar(30) not null,
pick_up varchar(30),
drop_off varchar(30),
airport_code varchar(3) not null,
primary key (car_model, pick_up, drop_off),
foreign key (airport_code) references airport(airport_code)
);

create table schedule (
fid int not null,
f_date date,
f_time time,
foreign key (fid) references flight(fid)
);

create table aircraft(
fid int not null,
plane_model varchar(15),
destination varchar(30),
primary key (plane_model),
foreign key (fid) references flight(fid)
);

INSERT INTO airport VALUES
('DAC', 'Hazrat Shahjalal Airport', 'Shah Amanat Airport'),
('DAC', 'Hazrat Shahjalal Airport', 'Barisal Airport'),
('CGP', 'Shah Amanat Airport', 'Hazrat Shahjalal Airport'),
('CGP', 'Shah Amanat Airport', 'Barisal Airport'),
('BZL', 'Barisal Airport', 'Hazrat Shahjalal Airport'),
('BZL', 'Barisal Airport', 'Shah Amanat Airport');

INSERT INTO flight VALUES
(1, 500, 1000, 100, 'DAC'),
(2, 500, 1000, 100, 'DAC'),
(3, 500, 1000, 100, 'CGP'),
(4, 500, 1000, 100, 'CGP'),
(5, 500, 1000, 100, 'BZL'),
(6, 500, 1000, 100, 'BZL');

INSERT INTO schedule VALUES
(1, '2023-04-16', '12:00:00'),
(2, '2023-04-16', '14:00:00'),
(3, '2023-04-17', '12:00:00'),
(4, '2023-04-17', '14:00:00'),
(5, '2023-04-17', '12:00:00'),
(6, '2023-04-17', '14:00:00');

INSERT INTO aircraft VALUES
(1, 'Boeing777', 'Dhaka'),
(2, 'Boeing747', 'Barisal'),
(3, 'Boeing727', 'Chittagong');

INSERT INTO help VALUES
('H-1', 'Lost Baggage'),
('H-2', 'Change Schedule'),
('H-3', 'Cancel FLight');
