<?php

namespace App\Service;

use App\Repository\UserRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class UnloadUserToExcel
{
    public function __construct($projectDir, UserRepository $userRepository)
    {
        $this->projectDir = $projectDir;
        $this->userRepository = $userRepository;
    }

    public function unload()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle("Пользователи");
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Фамилия');
        $sheet->setCellValue('C1', 'Имя');
        $sheet->setCellValue('D1', 'Отчество');
        $sheet->setCellValue('E1', 'Дата рождения');
        $sheet->setCellValue('F1', 'Город');
        $sheet->setCellValue('G1', 'Роль');

        //массив со стилями для шапки
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'top' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'startColor' => [
                    'argb' => 'FFA0A0A0',
                ],
                'endColor' => [
                    'argb' => 'FFFFFFFF',
                ],
            ],
        ];
        // устанавливаем стили для шапки
        $spreadsheet->getActiveSheet()->getStyle('A1:G1')->applyFromArray($styleArray);

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(15);

        $userRepository = $this->userRepository;
        $users = $userRepository->findAllUsers();
        $i=2;
        foreach ($users as $user){
            //dd($user);
            $sheet->setCellValue('A'.$i, $user['id']);
            $sheet->setCellValue('B'.$i, $user['lastname']);
            $sheet->setCellValue('C'.$i, $user['firstname']);
            $sheet->setCellValue('D'.$i, $user['patronymic']);
            $sheet->setCellValue('E'.$i, $user['birthday']->format('d.m.Y'));
            $sheet->setCellValue('F'.$i, $user['city']);
            $sheet->setCellValue('G'.$i, $user['role']);
            $i++;
        }

        $writer = new Xlsx($spreadsheet);

        // создаем временный файл в системе
//        $fileName = 'users.xlsx';
//        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
//        $writer->save($temp_file);

        //
        $projectDir = $this->projectDir;
        $publicDirectory = $projectDir . '/public/excel';
        $fileName = 'users'.time().'.xlsx';
        $excelFilepath =  $publicDirectory . '/' . $fileName;
        $writer->save($excelFilepath);

        //return array($temp_file, $fileName);
        return array($excelFilepath, $fileName);
    }
}