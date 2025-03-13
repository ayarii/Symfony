<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

#[AsCommand(
    name: 'app:generate:entities',
    description: 'Automatically generates entity classes from the database schema'
)]
class GenerateEntitiesCommand extends Command
{
    private Connection $connection;
    private AbstractSchemaManager $schemaManager;
    private array $excludedTables = ['doctrine_migration_versions', 'messenger_messages']; // Tables à exclure
    private array $generatedRelations = [];

    public function __construct(Connection $connection)
    {
        parent::__construct();
        $this->connection = $connection;
        $this->schemaManager = $this->connection->createSchemaManager();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $filesystem = new Filesystem();

        $tables = $this->schemaManager->listTables();

        foreach ($tables as $table) {
            $tableName = $table->getName();

            // Exclure certaines tables de la génération
            if (in_array($tableName, $this->excludedTables, true)) {
                continue;
            }

            $entityName = ucfirst($tableName);
            $entityCode = "<?php\n\nnamespace App\Entity;\n\nuse Doctrine\ORM\Mapping as ORM;\n\n";
            $entityCode .= "/**\n * @ORM\Entity\n * @ORM\Table(name=\"$tableName\")\n */\n";
            $entityCode .= "class $entityName\n{\n";

            foreach ($table->getColumns() as $column) {
                $fieldName = $column->getName();
                #$fieldType = $column->getType()->getName();
                $fieldType = $this->mapDoctrineType($column->getType());
                $entityCode .= "    /**\n     * @ORM\Column(type=\"$fieldType\")\n     */\n";
                $entityCode .= "    private \$$fieldName;\n\n";
            }

            $entityCode .= "}\n";

            // Sauvegarde du fichier de l'entité
            $path = "src/Entity/{$entityName}.php";
            $filesystem->dumpFile($path, $entityCode);

            $io->success("Entity $entityName generated successfully.");
        }

        return Command::SUCCESS;
    }

    private function mapDoctrineType(\Doctrine\DBAL\Types\Type $type): string
    {
        return match ($type::class) {
            \Doctrine\DBAL\Types\IntegerType::class => 'integer',
            \Doctrine\DBAL\Types\StringType::class => 'string',
            \Doctrine\DBAL\Types\BooleanType::class => 'boolean',
            \Doctrine\DBAL\Types\TextType::class => 'text',
            \Doctrine\DBAL\Types\DateTimeType::class => 'datetime',
            default => 'string', // Type par défaut
        };
    }

}
