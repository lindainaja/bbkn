<?php

namespace Artisan;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

use Artisan\Tools; 

class ModuleGenerateCommand extends Command{

    protected function configure(){
        $this->setName("module:generate")
                ->setDescription("Module Generator.")
                ->addArgument('module', InputArgument::REQUIRED, 'Module name)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){

       
        $module = $input->getArgument('module');

        $tools = new Tools();
        $source = $tools->reflectionMethodSource($module,'export_data');
        $output->writeln($source);



        $output->writeln('Generating module ' . $moduleName);

    }

}