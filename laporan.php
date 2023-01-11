<?php

// Require the FPDF library
require_once('fpdf.php');

// Connect to the database
include 'config.php';

// Query to get the loan data
$query = "SELECT * FROM pengajuan where status_pengajuan = 'Terima'or status_pengajuan = 'Tolak'or status_pengajuan = 'Sudah Dikembalikan' ORDER BY tanggal_peminjaman asc";
$result = mysqli_query($db, $query);

// Create a new PDF document
$pdf = new FPDF('P', 'mm', 'Legal');
$pdf->SetMargins(6, 6, 6);


// Add a page to the PDF document
$pdf->SetAutoPageBreak(false);
$pdf->AddPage('L');

// Set the font
$pdf->SetFont('Arial','B',20);

// Cell for the title
$pdf->Cell(0, 10, 'Laporan Peminjaman', 0, 1, 'C');
$pdf->ln();
// Set the font
$pdf->SetFont('Arial','',10);

// Table header
$pdf->Cell(24, 10, 'NIM', 1, 0, 'C');
$pdf->Cell(50, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(24, 10, 'Kelas', 1, 0, 'C');
$pdf->Cell(24, 10, 'Jumlah', 1, 0, 'C');
$pdf->Cell(100, 10, 'Keterangan', 1, 0, 'C');
$pdf->Cell(24, 10, 'Kode Barang', 1, 0, 'C');
$pdf->Cell(24, 10, 'Hari', 1, 0, 'C');
$pdf->Cell(24, 10, 'Tgl Pinjam', 1, 0, 'C');
$pdf->Cell(50, 10, 'Status Peminjaman', 1, 0, 'C');


// Add 10 units of space after the table header
$pdf->Ln();

// Loop through the loan data
while($row = mysqli_fetch_array($result)) {
    $pdf->Cell(24, 10, $row['username'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['nama'], 1, 0, 'C');
    $pdf->Cell(24, 10, $row['kelas'], 1, 0, 'C');
    $pdf->Cell(24, 10, $row['jumlah'], 1, 0, 'C');
    $pdf->Cell(100, 10, $row['keterangan'], 1, 0, 'C');
    $pdf->Cell(24, 10, $row['kode_barang'], 1, 0, 'C');
    $pdf->Cell(24, 10, $row['hari'], 1, 0, 'C');
    $pdf->Cell(24, 10, $row['tanggal_peminjaman'], 1, 0, 'C');
    $pdf->Cell(50, 10, $row['status_pengajuan'], 1, 0, 'C');
    $pdf->Ln(10);
}

// Output the PDF document
$pdf->Output();

// Close the database connection
mysqli_close($db);

