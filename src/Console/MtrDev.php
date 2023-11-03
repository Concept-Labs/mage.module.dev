<?php
namespace Mtr\Dev\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class MtrDev extends Command
{
    const COMMAND = 'mtr-dev:ping';
    const COMMAND_DESCRIPTION = "Mtr Dev ping-pong";
    const ANSWER = "PONG:";
    const OPTION_PING = 'pong';
    const RETURN_CODE_OK = 0;
    const RETURN_CODE_ERROR = 1;

    protected function configure()
    {
        $options = [
            new InputOption(
                static::OPTION_PING,
                null,
                InputOption::VALUE_REQUIRED,
                'Name'
            )
        ];
        $this->setName(static::COMMAND)
            ->setDescription(static::COMMAND_DESCRIPTION)
            ->setDefinition($options);
        parent::configure();
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(static::ANSWER . $input->getOption(static::OPTION_PING));
        return static::RETURN_CODE_OK;
    }
}