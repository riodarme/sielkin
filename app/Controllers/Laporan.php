<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\HarianModel;
use App\Models\KegiatanModel;
use App\Models\ProduktifitasModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends BaseController
{
   function __construct()
   {
      $this->auth          = new AuthModel();
      $this->kegiatan      = new KegiatanModel();
      $this->harian        = new HarianModel();
      $this->produktifitas = new ProduktifitasModel();
   }
   public function index()
   {

   $harian = $this->harian->findAll();

   $spreadsheet = new Spreadsheet();
   $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Nama')
                ->setCellValue('B1', 'Kegiatan')
                ->setCellValue('C1', 'Detail Kegiatan')
                ->setCellValue('D1', 'Berkas')
                ->setCellValue('E1', 'Tanggal')
                ->setCellValue('F1', 'Status');
    $column = 2;

   foreach($harian as $data) {
   $spreadsheet->setActiveSheetIndex(0)
                  ->setCellValue('A' . $column, $data['user_id'])
                  ->setCellValue('B' . $column, $data['id_kegiatan'])
                  ->setCellValue('C' . $column, $data['lain'])
                  ->setCellValue('D' . $column, $data['jm_berkas'])
                  ->setCellValue('E' . $column, $data['tgl_harian'])
                  ->setCellValue('F' . $column, $data['status']);
   $column++;

   $writer = new Xlsx($spreadsheet);
   $fileName = 'Laporan Harian';
   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
   header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
   header('Cache-Control: max-age=0');

   $writer->save('php://output');
  }
   }
}