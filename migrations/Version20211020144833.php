<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211020144833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE filter_options DROP FOREIGN KEY FK_67A58DE289C58933');
        $this->addSql('DROP INDEX IDX_67A58DE289C58933 ON filter_options');
        $this->addSql('ALTER TABLE filter_options DROP car_details_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE filter_options ADD car_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE filter_options ADD CONSTRAINT FK_67A58DE289C58933 FOREIGN KEY (car_details_id) REFERENCES car_details (id)');
        $this->addSql('CREATE INDEX IDX_67A58DE289C58933 ON filter_options (car_details_id)');
    }
}
