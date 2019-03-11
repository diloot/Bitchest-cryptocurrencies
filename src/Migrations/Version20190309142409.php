<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190309142409 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cotation (id INT AUTO_INCREMENT NOT NULL, crypto_id INT NOT NULL, value DOUBLE PRECISION NOT NULL, date DATE NOT NULL, cours NUMERIC(10, 2) NOT NULL, evolution DOUBLE PRECISION NOT NULL, INDEX IDX_996DA944E9571A63 (crypto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crypto (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, image VARCHAR(255) NOT NULL, sigle VARCHAR(4) NOT NULL, UNIQUE INDEX UNIQ_682828855E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, crypto_id INT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, amount_crypto DOUBLE PRECISION NOT NULL, type VARCHAR(1) NOT NULL, INDEX IDX_723705D1E9571A63 (crypto_id), INDEX IDX_723705D1A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, salt VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, cp INT NOT NULL, town VARCHAR(50) NOT NULL, phone INT NOT NULL, solde DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wallet (id INT AUTO_INCREMENT NOT NULL, crypto_id INT NOT NULL, user_id INT NOT NULL, amount DOUBLE PRECISION NOT NULL, amount_crypto DOUBLE PRECISION NOT NULL, INDEX IDX_7C68921FE9571A63 (crypto_id), INDEX IDX_7C68921FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cotation ADD CONSTRAINT FK_996DA944E9571A63 FOREIGN KEY (crypto_id) REFERENCES crypto (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1E9571A63 FOREIGN KEY (crypto_id) REFERENCES crypto (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE wallet ADD CONSTRAINT FK_7C68921FE9571A63 FOREIGN KEY (crypto_id) REFERENCES crypto (id)');
        $this->addSql('ALTER TABLE wallet ADD CONSTRAINT FK_7C68921FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cotation DROP FOREIGN KEY FK_996DA944E9571A63');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1E9571A63');
        $this->addSql('ALTER TABLE wallet DROP FOREIGN KEY FK_7C68921FE9571A63');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1A76ED395');
        $this->addSql('ALTER TABLE wallet DROP FOREIGN KEY FK_7C68921FA76ED395');
        $this->addSql('DROP TABLE cotation');
        $this->addSql('DROP TABLE crypto');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE wallet');
    }
}
