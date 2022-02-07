-- Doctrine Migration File Generated on 2022-02-07 23:07:59

-- Version DoctrineMigrations\Version20220207225031
CREATE TABLE tasks (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id));
