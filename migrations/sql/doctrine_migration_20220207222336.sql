-- Doctrine Migration File Generated on 2022-02-07 22:23:36

-- Version DoctrineMigrations\Version20220207215917
CREATE TABLE projects(id SERIAL PRIMARY KEY, name VARCHAR(50) NOT NULL, description TEXT);
