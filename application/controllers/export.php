<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
         $this->load->model('transaction_m');
     }

     public function index()
     {
          //$data['semua_pengguna'] = $this->transaction_m->get2()->result();
          
          $this->load->view('export', $data);
     }

     public function export()
     {
          $tes = $this->uri->segment(3);
          $row2 = $this->transaction_m->get2($batch_no);

          var_dump($tes);die();
          //$semua_pengguna = $this->export_model->getAll()->result();

          //$spreadsheet = new Spreadsheet;
          $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("tes.xlsx");
          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('D12', 'No');

          $kolom = 13;
          $nomor = 1;
          foreach($row2->result() as $key => $pengguna) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('D' . $kolom, $pengguna->batch_no);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
          //$writer->loadIntoExisting("tes.xlsx", $spreadsheet);

    header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="Latihan.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }
}