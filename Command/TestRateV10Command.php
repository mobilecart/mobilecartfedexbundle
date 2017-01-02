<?php

namespace MobileCart\FedexBundle\Command;

use MobileCart\CoreBundle\CartComponent\ArrayWrapper;
use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestRateV10Command extends ContainerAwareCommand
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('fedex:test:ratev10')
            ->setDescription('Test Fedex - Rates API v10')
            //->addArgument('email', InputArgument::REQUIRED, 'Email Address')
            //->addArgument('sender', InputArgument::REQUIRED, 'Sender Email Address')
            ->setHelp(<<<EOF
The <info>%command.name%</info> command tests the Fedex Rates API:

<info>php %command.full_name%</info>

EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $svc = $this->getContainer()->get('fedex.rate.v10');
        $svc->setWeight('0.5');

        $destination = new ArrayWrapper([
            'street' => '',
            'city' => '',
            'province' => 'GA',
            'postcode' => '30064',
            'country' => 'US',
        ]);

        $svc->setDestAddress($destination);
        $response = $svc->getRates();

        $message = print_r($response, 1);
        $output->writeln($message);
    }

}
