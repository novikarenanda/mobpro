<?php
	include('koneksi.php');
	$query = "select*from tamu";
	$sql= mysqli_query($con,$query);
	$tamu = array();
	$dataTamu = array();
	$content = array();
	
	
	while($row= mysqli_fetch_array($sql)){
		$content[] = array(
		"id_tamu" => ''.$row['id_tamu'].'',
		"nama_tamu" => ''.$row['nama_tamu'].'',
		"nama_tujuan" => ''.$row['nama_tujuan'].'',
		"tujuan" => ''.$row['tujuan'].'',
		"no_kamar" => ''.$row['no_kamar'].''
		);
	}
	
	$dataTamu['dataTamu']=$content;
	$tamu['Tamu'] = $dataTamu;
	
	$json_data=json_encode($tamu,JSON_PRETTY_PRINT);
	echo $json_data;
	file_put_contents('datatamu.json', $json_data);
?>