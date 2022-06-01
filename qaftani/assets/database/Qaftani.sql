/*Qaftani - PFR*/
CREATE DATABASE qaftani;
USE qaftani;

/*============================CART==================================*/

create table Cart(
    cartId INT  not null AUTO_INCREMENT,
    empty bit,
    primary key (cartId)
);

/*============================CUSTOMER==================================*/

create table Customer(
    clientId INT  not null AUTO_INCREMENT,
    cartId INT not null, 
    firstName varchar(40),
    lastName varchar(40),
    contactNo varchar(14),
    addressLine varchar(80),
    email varchar(30) UNIQUE,
    username varchar(15) UNIQUE,
    password varchar(30),
    primary key (clientId),
    FOREIGN KEY (cartId) REFERENCES Cart(cartId)
);

/*==============================ORDER================================*/

create table `Order`(
    orderId INT  not null AUTO_INCREMENT,
    clientId INT not null,
    status Enum("New", "Pending", "OnHold", "Shipped", "Delivered", "Closed"),
    address varchar(80),
    ordered datetime,
    shipped datetime, 
    total DOUBLE(5,0),
    primary key (orderId),
    FOREIGN KEY (clientId) REFERENCES Customer (clientId)
);

/*=============================PRODUCT=================================*/

create table Product(
    productId INT  not null AUTO_INCREMENT,
    idSize INT not null,
    description varchar(256),
    price DOUBLE(5,2),
    photo varchar(256),
    inStock bit,
    type varchar(254),
    primary key (productId)
);


/*=============================SHIPPINGINFO=================================*/

create table ShippingInfo(
    contactEmail varchar(30),
    orderId INT not null,
    address varchar(80),
    firstName varchar(40),
    lastName varchar(40),
    region varchar(10),
    postalcode INT,
    apartement varchar(40),
    phone varchar(14),
    saveInfo BOOLEAN,
    primary key (contactEmail),
    FOREIGN KEY (orderId) REFERENCES `Order` (orderId)
);

/*==============================SIZE================================*/

create table Size(
    idSize INT  not null AUTO_INCREMENT,
    productId INT not null,
    shoulders DOUBLE(3,2),
    sleeves DOUBLE(3,2),
    chest DOUBLE(3,2),
    waist DOUBLE(3,2),
    hip DOUBLE(3,2),
    length DOUBLE(3,2),
    primary key (idSize),
    FOREIGN KEY (productId) REFERENCES Product (productId)
);

/*===========================ORDERXPRODUCT===================================*/

create table orderxproduct(
   productId            INT not null,
   orderId              INT not null,
   FOREIGN KEY (productId) REFERENCES Product (productId),
   FOREIGN KEY (orderId) REFERENCES `Order` (orderId),
   primary key (productId, orderId)
);
