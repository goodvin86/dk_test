<?php

namespace App\Command;

use App\Service\UnloadUserToExcel;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[AsCommand(
    name: 'app:usertoexcel',
    description: 'Команда по выгрузке пользователей в excel',
    hidden: false,
)]
/**
 * @Cron(minute="/2", noLogs=true)
 */
class UnloadUserToExcelCommand extends Command
{
    protected static $defaultDescription = 'Команда по выгрузке пользователей в excel';

    public function __construct($projectDir, UnloadUserToExcel $unloadUserToExcel)
    {
        //ссылка на папку проекта, хранится в services.yaml
        $this->projectDir = $projectDir;
        //создаем объект класса UnloadUserToExcel
        $this->unloadUserToExcel = $unloadUserToExcel;

        parent::__construct();
    }


    protected function configure()
    {
        $this->setHelp('Эта команда для выгрузки пользователей в excel');
    }

    protected function execute(InputInterface $input, OutputInterface $output)//:Response
    {
        $unloadUserToExcel = $this->unloadUserToExcel;
        $file_options = $unloadUserToExcel->unload();

        $projectDir = $this->projectDir;

        $io = new SymfonyStyle($input,$output);
        $io->success('Пользователи успешно выгружены в excel');
        return Command::SUCCESS;
    }
}