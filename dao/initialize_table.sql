
DROP TABLE IF EXISTS member_info;
CREATE TABLE member_info (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(128),
  address varchar(255),
  email varchar(255),
  tel varchar(128),
  pass varchar(255),
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp,
	is_deleted boolean,
  PRIMARY KEY (id)
) DEFAULT CHARACTER SET = utf8mb4;


DROP TABLE IF EXISTS products;
CREATE TABLE products
(
	id int NOT NULL AUTO_INCREMENT,
	name varchar(255),
	description text,
	price int,
	stock int,
  path varchar(255),
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp,
  category_id int REFERENCES category(id),
	PRIMARY KEY (id)
) DEFAULT CHARACTER SET = utf8mb4;


DROP TABLE IF EXISTS category;
CREATE TABLE category
(
	id int NOT NULL AUTO_INCREMENT,
	name varchar(32),
	PRIMARY KEY (id)
) DEFAULT CHARACTER SET = utf8mb4;


DROP TABLE IF EXISTS contact;
CREATE TABLE contact
(
	member_id int REFERENCES member_info(id),
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	sentence text,
	PRIMARY KEY (member_id, created_at)
) DEFAULT CHARACTER SET = utf8mb4;


DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
	id int NOT NULL AUTO_INCREMENT,
	payment varchar(32),
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp,
	member_id int REFERENCES member_info(id),
	PRIMARY KEY (id)
) DEFAULT CHARACTER SET = utf8mb4;


DROP TABLE IF EXISTS order_details;
CREATE TABLE order_details
(
	order_id int REFERENCES orders(id),
	product_id int REFERENCES products(id),
	quantity int,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp,
	PRIMARY KEY (order_id, product_id)
) DEFAULT CHARACTER SET = utf8mb4;
