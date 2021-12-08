<?php 
//memanggil library fpdf
	require('fpdf/fpdf.php');
//intance object
	$pdf = new FPDF('I','mm','A5');
//Membuat halaman baru
	$pdf->AddPage();
//setting jenis font
	$pdf->PDF_setfont('Arial', 'B', 16);
//mencetak string
	$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(190,7,'DAFTAR MAHASISWA MATKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
//Memberikan Space Kebawah
	$pdf->Cell(10,7,'',0,1);

	$pdf->SetFont('Arial',B,10);
	$pdf->Cell(10,6,'NIM',1,0);
	$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
	$pdf->Cell(25,6,'J KEL',1,0);
	$pdf->Cell(50,6,'ALAMAT',1,0);
	$pdf->Cell(30,6,'TANGGAL LHR',1,1);

	$pdf->SetFont('Arial','',10);

	include'koneksi.php';
	$mahasiswa = mysqli_query($con,"select * from mahasiswa");
	while($row = mysqli_fetch_array($mahasiswa)){
		$pdf->Cell(20,6,['nim'],1,0);
		$pdf->Cell(50,6,['nama'],1,0);
		$pdf->Cell(25,6,['jkel'],1,0);
		$pdf->Cell(50,6,['alamat'],1,0);
		$pdf->Cell(30,6,['tgllhr'],1,1);
	}
	$pdf->Output();
?>