<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181103212305 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client CHANGE company company VARCHAR(100) NOT NULL, CHANGE address address VARCHAR(150) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C74404554FBF094F ON client (company)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455F85E0677 ON client (username)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_C74404554FBF094F ON client');
        $this->addSql('DROP INDEX UNIQ_C7440455F85E0677 ON client');
        $this->addSql('ALTER TABLE client CHANGE company company VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE address address VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
