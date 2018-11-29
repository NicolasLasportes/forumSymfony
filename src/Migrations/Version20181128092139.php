<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181128092139 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE discussion (id INT AUTO_INCREMENT NOT NULL, discussion_title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentary (id INT AUTO_INCREMENT NOT NULL, fk_discussion_id INT DEFAULT NULL, fk_commentary_id INT DEFAULT NULL, commentary_content LONGTEXT NOT NULL, INDEX IDX_1CAC12CA7E94A6D3 (fk_discussion_id), INDEX IDX_1CAC12CA39A73C68 (fk_commentary_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentary ADD CONSTRAINT FK_1CAC12CA7E94A6D3 FOREIGN KEY (fk_discussion_id) REFERENCES discussion (id)');
        $this->addSql('ALTER TABLE commentary ADD CONSTRAINT FK_1CAC12CA39A73C68 FOREIGN KEY (fk_commentary_id) REFERENCES commentary (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commentary DROP FOREIGN KEY FK_1CAC12CA7E94A6D3');
        $this->addSql('ALTER TABLE commentary DROP FOREIGN KEY FK_1CAC12CA39A73C68');
        $this->addSql('DROP TABLE discussion');
        $this->addSql('DROP TABLE commentary');
    }
}
