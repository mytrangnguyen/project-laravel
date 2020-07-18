DROP DATABASE IF EXISTS sell_handmade_product;
CREATE DATABASE sell_handmade_product;
ALTER DATABASE `sell_handmade_product` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sell_handmade_product;

CREATE TABLE slides(
	slide_id INT(11) auto_increment PRIMARY KEY,
    img_url VARCHAR(255)
);

INSERT INTO slides(img_url)
VALUES
	('image/slider1.png'),
    ('image/slider2.png'),
    ('image/slider3.png'),
    ('image/slider4.png');

CREATE TABLE `users`(
	`username` VARCHAR(50) NOT NULL PRIMARY KEY,
	`password` VARCHAR(255) NOT NULL,
	`avatar_url` VARCHAR(255),
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
    `confirmation` VARCHAR(255),
	`birthday` DATE,
	`gender` VARCHAR(10),
	`email` VARCHAR(100),
	`address` VARCHAR(100),
	`phone` VARCHAR(11),
	`creation_date` DATETIME,
	`user_role` VARCHAR(50) NOT NULL
);


CREATE TABLE shippers(
	ship_id VARCHAR(10) PRIMARY KEY,
    ship_name VARCHAR(255),
    company VARCHAR(255),
    phone VARCHAR(11)
);

CREATE TABLE orders(
	order_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    emp_id VARCHAR(10),
    ship_id VARCHAR(10),
    order_date DATE,
    ship_date DATE,
	delete_date DATE,
    order_address VARCHAR(255),
    status BOOLEAN,
    FOREIGN KEY (username) REFERENCES users (username),
	FOREIGN KEY (ship_id) REFERENCES shippers (ship_id)
);

CREATE TABLE categories(
	cate_id VARCHAR(10) PRIMARY KEY,
    cate_name VARCHAR(255),
    delete_at date
);


CREATE TABLE products(
	prod_id VARCHAR(10) PRIMARY KEY,
    prod_name VARCHAR(255),
    image nVARCHAR(500),
    price_in INT(11),
    price_out INT(11),
    date_add DATE,
    quantity INT(11),
    description text,
    cate_id VARCHAR(10),
    center_name VARCHAR(255),
    views int(11),
    status BOOLEAN,
    delete_at date,
    FOREIGN KEY (cate_id) REFERENCES categories (cate_id)
);

CREATE TABLE promotion(
	prod_id VARCHAR(10),
    new_price INT(11),
    date_start DATE,
    date_end DATE,
    FOREIGN KEY (prod_id) REFERENCES products (prod_id),
    PRIMARY KEY(prod_id,date_start)
);

CREATE TABLE orders_prods(
    order_id INT(11),
    prod_id VARCHAR(10),
    quantity int(11),
    FOREIGN KEY (order_id) REFERENCES orders (order_id),
    FOREIGN KEY (prod_id) REFERENCES products (prod_id),
    PRIMARY KEY(order_id, prod_id)
);

CREATE TABLE listProductLove(
	username VARCHAR(50),
    prod_id VARCHAR(10),
	PRIMARY KEY(username, prod_id),
	FOREIGN KEY (username) REFERENCES users (username),
	FOREIGN KEY (prod_id) REFERENCES products (prod_id)
);

CREATE TABLE comments (
	`id` int(111) NOT NULL primary key,
	`username` VARCHAR(50),
    `prod_id` VARCHAR(10),
	`comment` varchar(255),
	FOREIGN KEY (username) REFERENCES users (username),
	FOREIGN KEY (prod_id) REFERENCES products (prod_id)
);


