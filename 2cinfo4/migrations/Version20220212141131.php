<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212141131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bien_immobilier (num_immo INT NOT NULL, proprietaire_id INT DEFAULT NULL, statut VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, etat VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_D1BE34E176C50E4A (proprietaire_id), PRIMARY KEY(num_immo)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (numprop INT NOT NULL, nom VARCHAR(255) NOT NULL, numtel INT NOT NULL, PRIMARY KEY(numprop)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bien_immobilier ADD CONSTRAINT FK_D1BE34E176C50E4A FOREIGN KEY (proprietaire_id) REFERENCES proprietaire (numprop)');
        $this->addSql('ALTER TABLE classroom CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien_immobilier DROP FOREIGN KEY FK_D1BE34E176C50E4A');
        $this->addSql('DROP TABLE bien_immobilier');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('ALTER TABLE classroom CHANGE id id INT NOT NULL');
    }
}
