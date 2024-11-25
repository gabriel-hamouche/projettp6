<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241125170956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE developpeur CHANGE langage langage VARCHAR(255) DEFAULT NULL, CHANGE avatar avatar VARCHAR(512) DEFAULT NULL');
        $this->addSql('ALTER TABLE entreprise CHANGE technologie technologie VARCHAR(255) DEFAULT NULL, CHANGE experience experience INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE developpeur CHANGE langage langage VARCHAR(255) NOT NULL, CHANGE avatar avatar LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\'');
        $this->addSql('ALTER TABLE entreprise CHANGE technologie technologie LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE experience experience LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\'');
    }
}