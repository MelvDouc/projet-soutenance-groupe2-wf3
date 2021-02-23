<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210223104658 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_tailles DROP FOREIGN KEY FK_AE885C71AEC613E');
        $this->addSql('CREATE TABLE sous_categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE produits_categories');
        $this->addSql('DROP TABLE produits_tailles');
        $this->addSql('DROP TABLE tailles');
        $this->addSql('ALTER TABLE categories DROP couleur');
        $this->addSql('ALTER TABLE produits ADD id_categories_id INT NOT NULL, ADD id_sous_categories_id INT NOT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C1C3AC5D2 FOREIGN KEY (id_categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C1C57A397 FOREIGN KEY (id_sous_categories_id) REFERENCES sous_categories (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C1C3AC5D2 ON produits (id_categories_id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C1C57A397 ON produits (id_sous_categories_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C1C57A397');
        $this->addSql('CREATE TABLE produits_categories (produits_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_3A9B64EDCD11A2CF (produits_id), INDEX IDX_3A9B64EDA21214B7 (categories_id), PRIMARY KEY(produits_id, categories_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produits_tailles (produits_id INT NOT NULL, tailles_id INT NOT NULL, INDEX IDX_AE885C7CD11A2CF (produits_id), INDEX IDX_AE885C71AEC613E (tailles_id), PRIMARY KEY(produits_id, tailles_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tailles (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE produits_categories ADD CONSTRAINT FK_3A9B64EDA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_categories ADD CONSTRAINT FK_3A9B64EDCD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_tailles ADD CONSTRAINT FK_AE885C71AEC613E FOREIGN KEY (tailles_id) REFERENCES tailles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_tailles ADD CONSTRAINT FK_AE885C7CD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE sous_categories');
        $this->addSql('ALTER TABLE categories ADD couleur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C1C3AC5D2');
        $this->addSql('DROP INDEX IDX_BE2DDF8C1C3AC5D2 ON produits');
        $this->addSql('DROP INDEX IDX_BE2DDF8C1C57A397 ON produits');
        $this->addSql('ALTER TABLE produits DROP id_categories_id, DROP id_sous_categories_id');
    }
}
