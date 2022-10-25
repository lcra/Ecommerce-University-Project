SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS Group16;
CREATE DATABASE Group16;

USE Group16;

CREATE TABLE Items(
    item_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(100),
    gender char(1),
    numSize int(100),
    charSize char(1),
    price decimal(4,2),
    description varchar(1000),
    image varchar(1000),
    link varchar(1000),
    alt varchar(1000),
    category varchar(100),
    type varchar(100),
    quantity int(100),
    isNew char(1),
    onSale char(1),
    updated timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) AUTO_INCREMENT = 1;

CREATE TABLE customer(
    customer_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    customer_name varChar(100),
    address varChar(100),
    creditCard varChar(16), 
    item_id int(100)
) AUTO_INCREMENT = 1;

CREATE TABLE itemsInCart(
    cart_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    item_id int,
    quantity int(100)
) AUTO_INCREMENT = 1;

CREATE TABLE boughtItems(
    item_id int NOT NULL,
    customer_id int NOT NULL,
    cart_id int NOT NULL,
    quantity int(100),
    totalPrice int,
    PRIMARY KEY (item_id, customer_id)
);

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON group16.items TO dbadmin@localhost;
GRANT all privileges ON group16.customer TO dbadmin@localhost;
GRANT all privileges ON group16.itemsInCart TO dbadmin@localhost;
GRANT all privileges ON group16.boughtItems TO dbadmin@localhost;

INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Bomber Jacket', 'M', 'L', '48.95', 'Mens', 'Y','N', 'Jacket',
    'source-imgs/product-imgs/mens-bomber-jacket.png',
    'product-mens-bomber-jacket.php',
    'Mens Bomber Jacket',
    '
        Style:	        Preppy          <br>
        Color:	        Beige           <br>
        Pattern Type:	Patchwork       <br>
        Length:	        Regular         <br>
        Season:	        Spring/Fall     <br>
        Type:	        Bomber          <br>
        Details:	    Patched         <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Polyester       <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Fleece Jacket', 'M', 'L', '41.95', 'Mens', 'N', 'N', 'Jacket',
    'source-imgs/product-imgs/mens-fleece-jacket.png',
    'product-mens-fleece-jacket.php',
    'Mens Fleece Jacket',
    '
        Style:	        Casual          <br>
        Color:	        Grey            <br>
        Pattern Type:	Letter          <br>
        Length:	        Regular         <br>
        Season:	        Fall/Winter     <br>
        Type:	        Teddy           <br>
        Details:	    Patched         <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Fleece          <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Cargo Jeans', 'M', 'L', '44.95', 'Mens', 'N', 'Y', 'Jeans',
    'source-imgs/product-imgs/mens-cargo-jeans.png',
    'product-mens-cargo-jeans.php',
    'Mens Cargo Jeans',
    '
        Style:	        Casual          <br>
        Color:	        Light Wash      <br>
        Pattern Type:	Flat            <br>
        Length:	        Long            <br>
        Season:	        Any             <br>
        Type:	        Straight Leg    <br>
        Details:	    Pocket          <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Denim           <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Ripped Jeans', 'M', 'L', '39.95', 'Mens', 'Y', 'N', 'Jeans',
    'source-imgs/product-imgs/mens-ripped-jeans.png',
    'product-mens-ripped-jeans.php',
    'Mens Ripped Jeans',
    '
        Style:	        Casual          <br>
        Color:	        Black           <br>
        Pattern Type:	Flat            <br>
        Length:	        Long            <br>
        Season:	        Any             <br>
        Type:	        Straight Leg    <br>
        Details:	    Ripped          <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Denim           <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Long Sleeve Shirt', 'M', 'L', '33.95', 'Mens', 'N', 'N', 'Shirt',
    'source-imgs/product-imgs/mens-longsleeve-shirt.png',
    'product-mens-longsleeve-shirt.php',
    'Mens Long Sleeve Shirt',
    '
        Style:	        Work            <br>
        Color:	        White           <br>
        Pattern Type:	Plaid           <br>
        Length:	        Regular         <br>
        Season:	        Spring/Fall     <br>
        Type:	        Shirt           <br>
        Details:	    Button Front    <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Cotton          <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Mens Printed Shirt', 'M', 'L', '25.95', 'Mens', 'N', 'N', 'Shirt',
    'source-imgs/product-imgs/mens-printed-shirt.png',
    'product-mens-printed-shirt.php',
    'Mens Printed Shirt',
    '
        Style:	        Preppy          <br>
        Color:	        Black and White <br>
        Pattern Type:	Plaid           <br>
        Length:	        Long            <br>
        Season:	        Spring/Fall     <br>
        Type:	        Shirt           <br>
        Details:	    Button Front    <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Cotton          <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Leather Jacket', 'F', 'L', '42.95', 'Womans', 'Y', 'N', 'Jacket',
    'source-imgs/product-imgs/womans-leather-jacket.png',
    'product-womans-leather-jacket.php',
    'Womans Leather Jacket',
    '
        Style:	        Casual          <br>
        Color:	        Black           <br>
        Pattern Type:	Plain           <br>
        Length:	        Crop            <br>
        Season:	        Fall/Winter     <br>
        Type:	        Biker           <br>
        Details:	    Belted          <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    PU Leather      <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Suede Jacket', 'F', 'L', '35.95', 'Womans', 'N', 'Y', 'Jacket',
    'source-imgs/product-imgs/womans-suede-jacket.png',
    'product-womans-suede-jacket.php',
    'Womans Suede Jacket',
    '
        Style:	        Casual          <br>
        Color:	        Brown           <br>
        Pattern Type:	Plain           <br>
        Length:	        Regular         <br>
        Season:	        Fall/Winter     <br>
        Type:	        Biker           <br>
        Details:	    Zipper          <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Suede           <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Ripped Jeans', 'F', 'L', '29.95', 'Womans', 'N', 'Y', 'Jeans',
    'source-imgs/product-imgs/womans-ripped-jeans.png',
    'product-womans-ripped-jeans.php',
    'Womans Ripped Jeans',
    '
        Style:	        Casual          <br>
        Color:	        Light Wash      <br>
        Pattern Type:	Plain           <br>
        Length:	        Regular         <br>
        Season:	        Any             <br>
        Type:	        Straight Leg    <br>
        Details:	    Ripped          <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Denim           <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Straight Jeans', 'F', 'L', '29.95', 'Womans', 'N', 'N', 'Jeans',
    'source-imgs/product-imgs/womans-straight-jeans.png',
    'product-womans-straight-jeans.php',
    'Womans Straight Jeans',
    '
        Style:	        Casual          <br>
        Color:	        Light Wash      <br>
        Pattern Type:	Plain           <br>
        Length:	        Regular         <br>
        Season:	        Any             <br>
        Type:	        Straight Leg    <br>
        Details:	    None            <br>
        Fit Type:	    Regular Fit     <br>
        Material:	    Denim           <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Oversized Shirt', 'F', 'L', '18.95', 'Womans', 'N', 'N', 'Shirt',
    'source-imgs/product-imgs/womans-oversized-shirt.png',
    'product-womans-oversized-shirt.php',
    'Womans Oversized Shirt',
    '
        Style:	        Preppy          <br>
        Color:	        Multicolour     <br>
        Pattern Type:	Plaid           <br>
        Length:	        Long            <br>
        Season:	        Spring/Fall     <br>
        Type:	        Shirt           <br>
        Details:	    Button Front    <br>
        Fit Type:	    Oversized       <br>
        Material:	    Polyester       <br>
    '
);
INSERT INTO Items(name, gender, charSize, price, category, isNew, onSale, type, image, link, alt, description) VALUES('Womans Blouse Shirt', 'F', 'L', '17.95', 'Womans', 'N', 'N', 'Shirt',
    'source-imgs/product-imgs/womans-blouse-shirt.png',
    'product-womans-blouse-shirt.php',
    'Womans Blouse Shirt',
    '
        Style:	        Casual          <br>
        Color:	        White           <br>
        Pattern Type:	Plain           <br>
        Length:	        Long            <br>
        Season:	        Summer          <br>
        Type:	        Tunic           <br>
        Details:	    Button Front    <br>
        Fit Type:	    Regular         <br>
        Material:	    Cotton          <br>
    '
);


INSERT INTO itemsInCart(item_id, quantity) VALUES ('1', '1');
INSERT INTO itemsInCart(item_id, quantity) VALUES ('2', '1');