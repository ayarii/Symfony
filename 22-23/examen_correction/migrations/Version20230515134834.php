<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515134834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publicite ADD produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publicite ADD CONSTRAINT FK_1D394E39F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_1D394E39F347EFB ON publicite (produit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publicite DROP FOREIGN KEY FK_1D394E39F347EFB');
        $this->addSql('DROP INDEX IDX_1D394E39F347EFB ON publicite');
        $this->addSql('ALTER TABLE publicite DROP produit_id');
    }
}
