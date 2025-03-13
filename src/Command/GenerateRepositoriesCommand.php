<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

class GenerateRepositoriesCommand extends Command
{
    protected static $defaultName = 'app:generate:repositories';

    private $filesystem;
    private $finder;

    public function __construct(Filesystem $filesystem, Finder $finder)
    {
        parent::__construct();

        $this->filesystem = $filesystem;
        $this->finder = $finder;
    }

    protected function configure()
    {
        $this
            ->setDescription('Generates repository classes for all entities.')
            ->setHelp('This command will generate repository classes for all entities in src/Entity.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Generating repositories for all entities...');

        $this->finder->files()->in('src/Entity')->name('*.php'); // Look for PHP files in the Entity directory

        foreach ($this->finder as $file) {
            $entityClass = $file->getBasename('.php');
            $repositoryClass = 'App\\Repository\\' . $entityClass . 'Repository';

            // Create the repository class file
            $repositoryCode = <<<PHP
<?php

namespace App\Repository;

use App\Entity\\$entityClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class {$entityClass}Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, $entityClass::class);
    }

    // Add custom methods as needed
}
PHP;

            // Define the repository file path
            $repositoryPath = 'src/Repository/' . $entityClass . 'Repository.php';

            // Only generate if the repository does not already exist
            if (!$this->filesystem->exists($repositoryPath)) {
                $this->filesystem->dumpFile($repositoryPath, $repositoryCode);
                $output->writeln("Generated repository: $repositoryClass");
            } else {
                $output->writeln("Repository already exists for: $entityClass");
            }
        }

        $output->writeln('Repository generation complete!');
        return Command::SUCCESS;
    }
}
