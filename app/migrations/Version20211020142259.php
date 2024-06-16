<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211020142259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE filter_options (id INT AUTO_INCREMENT NOT NULL, filter_id INT DEFAULT NULL, car_details_id INT DEFAULT NULL, INDEX IDX_67A58DE2D395B25E (filter_id), INDEX IDX_67A58DE289C58933 (car_details_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE filter_options ADD CONSTRAINT FK_67A58DE2D395B25E FOREIGN KEY (filter_id) REFERENCES filter (id)');
        $this->addSql('ALTER TABLE filter_options ADD CONSTRAINT FK_67A58DE289C58933 FOREIGN KEY (car_details_id) REFERENCES car_details (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE filter_options');
    }
}
