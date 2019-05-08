<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RenderCommand extends Command
{
	public function configure()
	{
		$this->setName('render')
			 ->setDescription('Render some tabular data');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		$table = new Table($output);

		$table->setHeaders(['name', 'Age'])
			->setRows([
				['Jhon', 3],
				['Marry', 2],
				['Cet', 20]
			])
			->render();
	}
}