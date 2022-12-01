<?php declare(strict_types=1);

namespace MagentoTraining\BlockUpdate\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command 
{
    protected function configure()
    {
        $this->setName('magentotraining::blockupdate');
        $this->setDescription('blockupdate test1');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hellow');
    }
}

?>