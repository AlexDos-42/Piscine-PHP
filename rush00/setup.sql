
CREATE DATABASE IF NOT EXISTS ripailles;
USE ripailles;

CREATE TABLE IF NOT EXISTS produits(
	ItemID INT NOT null AUTO_INCREMENT,
	Category VARCHAR(255) NOT null,
	Name VARCHAR(255) NOT null,
	Title TEXT NOT null,
	Description Text NOT null,
	Link CHAR(255) NOT null,
	Price INT NOT null,
	PRIMARY KEY(ItemID)
);

CREATE TABLE IF NOT EXISTS users(
    UserID INT NOT null AUTO_INCREMENT,
	Username VARCHAR(255) NOT null,
	Password CHAR(128) NOT null,
	Salt INT NOT null,
	IsAdmin BOOLEAN DEFAULT false,
	PRIMARY KEY(UserID)
);
/*
CREATE TABLE purchases(
	PurchaseID INT NOT null AUTO_INCREMENT,
	Username VARCHAR(255) NOT null,
	CartID INT NOT null,
	ItemID INT NOT null,
	Amount INT NOT null,
	Valid BOOLEAN default false,
	PRIMARY KEY(PurchaseID)
);
*/
INSERT INTO users (UserID, Username, Password, Salt, IsAdmin) VALUES (1,
    'Alesanto', 'fd5bc45bbb0375457bc48bba41c1efe766caca789399e394225501b9d6cacaea144d82efb16fa0a08ddfd028bceb17403b35d8060fd4cf42f722fcfa739ee44d',
    '1588327962',
	'1'
);