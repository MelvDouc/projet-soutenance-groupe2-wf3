<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222133040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits_categories (produits_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_3A9B64EDCD11A2CF (produits_id), INDEX IDX_3A9B64EDA21214B7 (categories_id), PRIMARY KEY(produits_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits_tailles (produits_id INT NOT NULL, tailles_id INT NOT NULL, INDEX IDX_AE885C7CD11A2CF (produits_id), INDEX IDX_AE885C71AEC613E (tailles_id), PRIMARY KEY(produits_id, tailles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tailles (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, date_inscription DATETIME NOT NULL, UNIQUE INDEX UNIQ_497B315EE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produits_categories ADD CONSTRAINT FK_3A9B64EDCD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_categories ADD CONSTRAINT FK_3A9B64EDA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_tailles ADD CONSTRAINT FK_AE885C7CD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits_tailles ADD CONSTRAINT FK_AE885C71AEC613E FOREIGN KEY (tailles_id) REFERENCES tailles (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_categories DROP FOREIGN KEY FK_3A9B64EDA21214B7');
        $this->addSql('ALTER TABLE produits_categories DROP FOREIGN KEY FK_3A9B64EDCD11A2CF');
        $this->addSql('ALTER TABLE produits_tailles DROP FOREIGN KEY FK_AE885C7CD11A2CF');
        $this->addSql('ALTER TABLE produits_tailles DROP FOREIGN KEY FK_AE885C71AEC613E');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE produits');
        $this->addSql('DROP TABLE produits_categories');
        $this->addSql('DROP TABLE produits_tailles');
        $this->addSql('DROP TABLE tailles');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
