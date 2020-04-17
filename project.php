<?php

require 'vendor/autoload.php';


use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->load_html('Nama: Bayu.Kartiko, Kelas: XI RPL 2, Tugas Kedua dalam KD menggunakan library dalam bahasa program: Menggunakan Library Dompdf pada project php dengan composer');

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('report.pdf');

?>