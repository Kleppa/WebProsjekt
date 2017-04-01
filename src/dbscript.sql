create table categories
(
  id int not null auto_increment
    primary key,
  name varchar(255) not null
)
;

create table events
(
  id int not null auto_increment
    primary key,
  title varchar(255) null,
  place int not null,
  datetime datetime not null,
  description text null,
  is_free tinyint(1) not null,
  price float null
)
;

create index events_places_id_fk
  on events (place)
;

create table food
(
  id int not null
    primary key,
  place int null,
  name varchar(255) not null,
  description text null,
  price int null
)
;

create index food_places_id_fk
  on food (place)
;

create table images
(
  id int not null auto_increment
    primary key,
  place int not null,
  image_path text not null
)
;

create index images_places_id_fk
  on images (place)
;

create table places
(
  id int not null auto_increment
    primary key,
  name varchar(255) not null,
  description text null,
  address text null,
  opening_hours varchar(255) null,
  phone varchar(255) null,
  url text null,
  category int not null,
  score int default '0' null,
  image_path text null,
  u20 tinyint(1) null,
  constraint places_categories_id_fk
  foreign key (category) references categories (id)
)
;

create index places_categories_id_fk
  on places (category)
;

alter table events
  add constraint events_places_id_fk
foreign key (place) references places (id)
;

alter table food
  add constraint food_places_id_fk
foreign key (place) references places (id)
;

alter table images
  add constraint images_places_id_fk
foreign key (place) references places (id)
;

