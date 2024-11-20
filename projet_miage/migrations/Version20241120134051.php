<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241120134051 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE developpeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, langage LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', experience INT NOT NULL, salaire DOUBLE PRECISION NOT NULL, biographie VARCHAR(512) DEFAULT NULL, avatar LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, titre_poste VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, technologie LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', experience LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', salaire DOUBLE PRECISION NOT NULL, description VARCHAR(512) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, job_title VARCHAR(255) DEFAULT NULL, summary VARCHAR(255) DEFAULT NULL, salary INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE developpeur');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE profil');
    }
}
