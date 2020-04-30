create database if not exists whisky_bar_db;
CREATE TABLE whisky
(	id						INT PRIMARY KEY NOT NULL,
	name 				VARCHAR(255) NOT NULL,
    category			VARCHAR(255) NOT NULL,
    distillery			VARCHAR(255) NOT NULL,
    brand				VARCHAR(255) NOT NULL,
    bottled				DATETIME,
    stated_age		SMALLINT,
    strength			TINYINT NOT NULL,
    flavor				TEXT NOT NULL,
    description		TEXT,
    added_on		DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    rate					FLOAT,
    image				VARCHAR(255)
    );
    SELECT * FROM whisky;
    INSERT INTO
  whisky (
    name,
    category,
    distillery,
    strength,
    flavor,
    rate
  )
VALUES
  (
    'Springbank 10 - year - old',
    'Single Malt',
    'Springbank',
    46,
    'peated',
    9
  ),
  (
    '1769 Canadian Whisky 03 - year - old',
    'Canadian Whisky',
    '1769 Distillery Inc.',
    42,
    'smoked',
    7
  ),
  (
    'Oban Little Bay',
    'Single Malt',
    'Oban',
    43,
    'caramel wood',
    6
  );
SELECT * FROM whisky;
ALTER TABLE whisky
CHANGE COLUMN `bottled` `bottled` INT(4) NULL DEFAULT NULL ;
ALTER TABLE whisky
CHANGE COLUMN bottled bottled SMALLINT(4) NULL DEFAULT NULL;
SELECT * FROM whisky;
DELETE FROM whisky WHERE (id = 5);

/* Création de la table utilisateur */
-- CREATE TABLE user
-- (	id					INT PRIMARY KEY NOT NULL,
-- 		username	VARCHAR(40) NOT NULL,
--     email			VARCHAR(200) NOT NULL,
--     password		VARCHAR(50) NOT NULL,
--     forname
--     lastname
--     adress
--     zipCode
--     state
--     country

/* Création de la table experience */