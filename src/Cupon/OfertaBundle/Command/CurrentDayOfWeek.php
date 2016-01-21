<?php
// src/AppBundle/Command/CurrentDayOfWeek.php
namespace OfertaBundle\Command;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CurrentDayOfWeek extends ContainerAwareCommand
{
  protected function configure()
   {
        $this
            ->setName('oferta:cday')
            ->setDescription('Current day of week');
  }

  protected function execute(OutputInterface $output)
  {
        $text=date("l");
        $output->writeln($text);
  }
}