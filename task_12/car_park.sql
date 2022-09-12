#creating database

CREATE DATABASE car_park CHARACTER SET utf8 COLLATE utf8mb3_general_ci;

#creating tables

CREATE TABLE parks
(
    id            BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    serial_number VARCHAR(16)  NOT NULL UNIQUE,
    address       VARCHAR(250) NOT NULL
) ENGINE = INNODB;

CREATE TABLE cars
(
    id      BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    park_id BIGINT UNSIGNED,
    model   VARCHAR(100) NOT NULL,
    year    DATE         NOT NULL,
    price   FLOAT(16, 2) NOT NULL DEFAULT 0,

    FOREIGN KEY (park_id) REFERENCES parks (id)
) ENGINE = INNODB;

CREATE TABLE drivers
(
    id            BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    car_id        BIGINT UNSIGNED,
    full_name     VARCHAR(150) NOT NULL,
    license_ID    VARCHAR(16)  NOT NULL UNIQUE,
    date_of_birth DATE         NOT NULL,

    FOREIGN KEY (car_id) REFERENCES cars (id)
) ENGINE = INNODB;

CREATE TABLE customers
(
    id      BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name    VARCHAR(50)  NOT NULL,
    surname VARCHAR(75)  NOT NULL,
    email   VARCHAR(150) NOT NULL UNIQUE
) ENGINE = INNODB;

CREATE TABLE orders
(
    id                  BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    driver_id           BIGINT UNSIGNED,
    customer_id         BIGINT UNSIGNED,
    first_address       VARCHAR(250) NOT NULL,
    destination_address VARCHAR(250) NOT NULL,

    FOREIGN KEY (driver_id) REFERENCES drivers (id),
    FOREIGN KEY (customer_id) REFERENCES customers (id)
) ENGINE = INNODB;

#deleting table

DROP TABLE orders;

#modifing table`s column

ALTER TABLE cars MODIFY COLUMN year YEAR NOT NULL;

#inserting data into tables

INSERT INTO parks
    (serial_number, address)
    VALUE
    ('some number 1', 'some model'),
    ('some number 2', 'some model'),
    ('some number 3', 'some model'),
    ('some number 4', 'some model'),
    ('some number 5', 'some address');

INSERT INTO cars
    (park_id, model, year, price)
    VALUE
    (6, 'some model', '1999', 3333.65),
    (6, 'some model', '1989', 3643.65),
    (6, 'some model', '1996', 6433.65);

INSERT INTO drivers
    (car_id, full_name, license_ID, date_of_birth)
    VALUE
    (1, 'John Doe', 'ktydjdtyjt', '2000-09-17'),
    (3, 'John Doe twin', 'ktydfhyjt', '2000-09-17'),
    (3, 'Mr. Smitty', 'ktynmnddjt', '1999-11-26');

INSERT INTO customers
    (name, surname, email)
    VALUE
    ('Smitty', 'Smit', 'someluckysmitty@lackofluck.org'),
    ('John', 'Doe', 'maybeyouare@lackofluck.org'),
    ('Anny', 'Smithy', 'example@gmail.com');

#deleting some inserts

DELETE FROM parks WHERE address='some model';

#updating some data

UPDATE cars
SET price = 1000000
WHERE id > 1;

#selecting

SELECT *
FROM parks
         JOIN cars ON parks.id = cars.park_id;

SELECT surname FROM customers
WHERE name='John';

SELECT * FROM cars
INNER JOIN drivers on cars.id=drivers.car_id;
