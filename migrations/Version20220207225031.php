<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\Migrations\Provider\StubSchemaProvider;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207225031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('tasks');
        $table->addColumn('id', 'integer', [
            'autoincrement' => true,
        ]);
        $table->addColumn('name', 'string', [
            'length' => 255,
        ]);
        $table->addColumn('description', 'text', [
            'notnull' => false,
        ]);
        $table->setPrimaryKey(array('id'));

        $provider = new StubSchemaProvider($schema);
        $provider->createSchema() === $schema;

    }

    public function down(Schema $schema): void
    {
        $table = $schema->dropTable('tasks');

        $provider = new StubSchemaProvider($schema);
        $provider->createSchema() === $schema;

    }
}
