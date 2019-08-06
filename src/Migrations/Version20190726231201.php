<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726231201 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE purchases_products');
        $this->addSql('ALTER TABLE purchases ADD product_id INT NOT NULL');
        $this->addSql('ALTER TABLE purchases ADD CONSTRAINT FK_AA6431FE4584665A FOREIGN KEY (product_id) REFERENCES products (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_AA6431FE4584665A ON purchases (product_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE purchases_products (purchases_id INT NOT NULL, products_id INT NOT NULL, PRIMARY KEY(purchases_id, products_id))');
        $this->addSql('CREATE INDEX idx_4d570eaf6c8a81a9 ON purchases_products (products_id)');
        $this->addSql('CREATE INDEX idx_4d570eaf559939b3 ON purchases_products (purchases_id)');
        $this->addSql('ALTER TABLE purchases_products ADD CONSTRAINT fk_4d570eaf559939b3 FOREIGN KEY (purchases_id) REFERENCES purchases (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE purchases_products ADD CONSTRAINT fk_4d570eaf6c8a81a9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE purchases DROP CONSTRAINT FK_AA6431FE4584665A');
        $this->addSql('DROP INDEX IDX_AA6431FE4584665A');
        $this->addSql('ALTER TABLE purchases DROP product_id');
    }
}
