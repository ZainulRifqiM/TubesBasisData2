<?php
// include('koneksi.php');
// require 'functions.php';

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'IdSales')
    ->setCellValue('B1', 'Nama Sales');

$column = 2;

$query = mysqli_query($conn, "SELECT * FROM sales");
$res = $query->fetch_all(MYSQLI_ASSOC);

foreach ($res as $row) {
    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $row['IdSales'])
        ->setCellValue('B' . $column, $row['NamaSales']);

    $column++;
}

$writer = new Xlsx($spreadsheet);

$filename = date('Y-m-d') . '-Data-sales';

ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
header('Cache-Control: max-age=0');

$writer->save('php://output');

