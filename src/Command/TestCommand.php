<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 23.08.2018
 * Time: 13:08
 */

namespace App\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends ContainerAwareCommand
{
	public function __construct($name = null)
	{
		parent::__construct($name);
	}

	protected function configure()
	{
		$this
			->setName('app:test')
			->setDescription('Test app in console.')
			->setHelp('This command allows you test app...');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$testConsole = $this->getContainer()->get("App\Console\TestConsole");
		$testConsole->test();
	}

}