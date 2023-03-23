CREATE database Online_shopping;
USE Online_shopping;
create table customers (
  customer_id INT(10) PRIMARY KEY AUTO_INCREMENT ,
  email VARCHAR(40)NOT NULL,
  user_password VARCHAR(15)NOT NULL,
  name VARCHAR(40) NOT NULL, 
  address VARCHAR(100) NOT NULL,
  UPI VARCHAR(30) not null,
  Gender text(10)NOT NULL,
  PhoneNo VARCHAR(14)NOT NULL);

CREATE TABLE products(
  product_id	INT(10) PRIMARY KEY AUTO_INCREMENT ,
  product_name	VARCHAR(40)NOT NULL,
  prize	int(100) NOT NULL,
  brand	varchar(100) NOT NULL,
  product_image	varchar(255) NOT NULL,
)