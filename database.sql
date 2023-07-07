DROP DATABASE music_application;

CREATE DATABASE music_application;

use music_application;


CREATE TABLE admin(
id int,
userName varchar(255),
Email varchar(255),
password varchar(255),
created_at timestamp,
updated_at timestamp,
PRIMARY KEY (id)
);

create table guestUsers(
id int not null AUTO_INCREMENT,
userName varchar(255),
Email varchar(255),
password varchar(255),
created_at timestamp,
updated_at timestamp,
PRIMARY KEY (id)
);

create TABLE loginForm(
id INT NOT null AUTO_INCREMENT,
user_Name varchar(255),
password varchar(255),
created_at timestamp,
updated_at timestamp,
PRIMARY KEY (id));

create table songsAndartists(
id int not null AUTO_INCREMENT,
songName varchar(255),
ArtistName varchar(255),
admin_id int null,
created_at timestamp,
updated_at timestamp,
PRIMARY KEY(id),
FOREIGN KEY (admin_id) REFERENCES admin(id)
);

create table playlist(
id int not null AUTO_INCREMENT,
playlistName varchar(255),
songName varchar(255),
logged_user_id int,
created_at timestamp,
updated_at timestamp,
primary KEY (id),
FOREIGN KEY (logged_user_id) REFERENCES loginForm(id)
);

