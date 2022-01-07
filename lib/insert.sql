
DROP TABLE IF EXISTS categories;
CREATE TABLE categories
(
	id int NOT NULL AUTO_INCREMENT,
	name varchar(32),
	PRIMARY KEY (id)
)  DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO categories
VALUES(
  null,
  'カテゴリ1'
);
INSERT INTO categories
VALUES(
  null,
  'カテゴリ2'
);
INSERT INTO categories
VALUES(
  null,
  'カテゴリ3'
);
INSERT INTO categories
VALUES(
  null,
  'カテゴリ4'
);

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
  category_id int REFERENCES categories(id),
	PRIMARY KEY (id)
) DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO products
VALUES(
  null,
  '商品1', '商品1の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  10000,
  9999,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品2', '商品2の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  500,
  9999,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品3', '商品3の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  5000,
  9999,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品4', '商品4の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  100,
  9999,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品5', '商品5の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  20000,
  0,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品6', '商品6の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7500,
  0,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品7', '商品7の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7500,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品8', '商品8の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  6000,
  50,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品9', '商品9の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  2000,
  50,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品10', '商品10の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  18000,
  10,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品11', '商品11の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  25000,
  20,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品12', '商品12の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  0,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品13', '商品13の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7500,
  0,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品14', '商品14の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7500,
  0,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品15', '商品15の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  75000,
  0,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品16', '商品16の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  200,
  1000,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品17', '商品17の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  1500,
  100,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品18', '商品18の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  12000,
  30,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品19', '商品19の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  5500,
  5,
  'img/item1.png',
  null,
  null,
  3
);

INSERT INTO products
VALUES(
  null,
  '商品20', '商品20の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  600,
  150,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品21', '商品21の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  6000,
  15,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品22', '商品22の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  800,
  15,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品23', '商品23の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  1
);

INSERT INTO products
VALUES(
  null,
  '商品24', '商品24の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品25', '商品25の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7100,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品26', '商品26の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品27', '商品27の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品28', '商品28の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品29', '商品29の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  7000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品30', '商品30の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  9000,
  20,
  'img/item1.png',
  null,
  null,
  2
);

INSERT INTO products
VALUES(
  null,
  '商品31', '商品31の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  1000,
  20,
  'img/item1.png',
  null,
  null,
  4
);

INSERT INTO products
VALUES(
  null,
  '商品32', '商品32の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  1250,
  20,
  'img/item1.png',
  null,
  null,
  4
);

INSERT INTO products
VALUES(
  null,
  '商品33', '商品33の説明hogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheogehogehogehogehogheogheoge',
  9000,
  20,
  'img/item1.png',
  null,
  null,
  4
);
