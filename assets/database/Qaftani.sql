/*Qaftani - PFR*/
CREATE DATABASE qaftani;
USE qaftani;

/*============================CART==================================*/

CREATE TABLE Cart(
    cartId INT  NOT NULL AUTO_INCREMENT,
    empty bit,
    primary key (cartId)
);

/*============================CUSTOMER==================================*/

CREATE TABLE Customer(
    clientId INT  NOT NULL AUTO_INCREMENT,
    cartId INT NOT NULL, 
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

CREATE TABLE `Order`(
    orderId INT  NOT NULL AUTO_INCREMENT,
    clientId INT NOT NULL,
    status Enum("New", "Pending", "OnHold", "Shipped", "Delivered", "Closed"),
    address varchar(80),
    ordered datetime,
    shipped datetime, 
    total DOUBLE(5,0),
    primary key (orderId),
    FOREIGN KEY (clientId) REFERENCES Customer (clientId)
);

/*=============================PRODUCT=================================*/

CREATE TABLE `Product`(
    `productId` INT  NOT NULL AUTO_INCREMENT,
    `idSize INT` NOT NULL,
    `description` varchar(256),
    `price` double(5,2),
    `photo` varchar(256),
    `inStock` bit,
    `type` varchar(254),
    primary key (`productId`)
);



/*=============================SHIPPINGINFO=================================*/

CREATE TABLE `ShippingInfo`(
    `contactEmail` varchar(30),
    `orderId` INT NOT NULL,
    `address` varchar(80),
    `firstName` varchar(40),
    `lastName` varchar(40),
    `region` varchar(10),
    `postalcode` INT,
    `apartement` varchar(40),
    `phone` varchar(14),
    `saveInfo` BOOLEAN,
    primary key (`contactEmail`),
    FOREIGN KEY (`orderId`) REFERENCES `Order` (`orderId`)
);

/*==============================SIZE================================*/

CREATE TABLE Size(
    idSize INT  NOT NULL AUTO_INCREMENT,
    productId INT NOT NULL,
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

CREATE TABLE orderxproduct(
   productId            INT NOT NULL,
   orderId              INT NOT NULL,
   FOREIGN KEY (productId) REFERENCES Product (productId),
   FOREIGN KEY (orderId) REFERENCES `Order` (orderId),
   primary key (productId, orderId)
);
