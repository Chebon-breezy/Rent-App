
create table property_listing(
    propertyId int(11) primary key ,
    purpose varchar(64) not null,
    propertyTitle varchar(64) not null,
    propertyDescription varchar(64) not null,
    location varchar(64) not null,
    length float not null,
    width float not null,
    area float not null,
    price float not null,
    propertyType varchar(64) not null
);


create table property_Listing_images(
    imagesId int(11) primary key,
    images blob not null,
    propertyId int(11),
    constraint prop_id_fk foreign key(propertyId) references property_listing(propertyId) on delete set null on update cascade
);



create table user(
    userId int(11) primary key,
    FirstName varchar(64) not null,
    LastName varchar(64) not null,
    userPassword varchar(64) not null,
    userPhoneNo varchar(64) not null,
    mail varchar(64) unique,
    propertyId int(11),
    constraint proper_id_fk foreign key(propertyId) references property_listing(propertyId) on delete set null on update cascade 
);

create table sale_records(
    saleId int(11) primary key ,
    dateOfSale date,
    timeOfSale float,
    propertyId int(11),
    constraint property_id_fk foreign key(propertyId) references property_listing(propertyId) on delete set null on update cascade
);

create table buyer(
    userId int(11),
    constraint use_id_fk foreign key(userId) references user(userId) on delete set null on update cascade
);

create table wishlist(
    userId int(11),
    constraint  user_id_fk foreign key(userId) references buyer(userId) on delete set null on update cascade
);

create table seller(
    userId int(11),
    saleId int(11),
    constraint us_id_fk foreign key(userId) references user(userID) on update cascade,
    constraint sale_id_fk foreign key(saleId) references sale_records(saleId) on update cascade,
    primary key(userId, saleId)
);





