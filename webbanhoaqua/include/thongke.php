<?php
	//dem so loai qua
	// $strSQL="SELECT COUNT(*) FROM loai_qua";
	// $so_loai_qua=mysql_query($strSQL,$ung);
	// $rowLOAI=mysql_fetch_array($so_loai_qua);
	// $soloaiqua=$rowLOAI[0];
	//dem so qua
	// $strSQL="SELECT COUNT(*) FROM qua";
	// $so_qua=mysql_query($strSQL,$ung);
	// $rowqua=mysql_fetch_array($so_qua);
	// $soqua=$rowqua[0];
	//dem so khach hang
	// $strSQL="SELECT COUNT(*) FROM khach_hang";
	// $khach_hang=mysql_query($strSQL,$ung);
	// $rowKHACH=mysql_fetch_array($khach_hang);
	// $khachhang=$rowKHACH[0];
	//dem so tin tuc
	// $strSQL="SELECT COUNT(*) FROM tin_tuc";
	// $tin_tuc=mysql_query($strSQL,$ung);
	// $rowTIN=mysql_fetch_array($tin_tuc);
	// $tintuc=$rowTIN[0];
	//dem so lien he
	// $strSQL="SELECT COUNT(*) FROM lien_he";
	// $lien_he=mysql_query($strSQL,$ung);
	// $rowLH=mysql_fetch_array($lien_he);
	// $lienhe=$rowLH[0];
	//dem so don dat hang
	// $strSQL="SELECT COUNT(*) FROM dondathang";
	// $dondathang=mysql_query($strSQL,$ung);
	// $rowDDH=mysql_fetch_array($dondathang);
	// $dondathang=$rowDDH[0];
	
	// dem so loai qua
	$strSQL="SELECT COUNT(*) FROM loai_qua";
	$so_loai_qua = $conn->query($strSQL);
	$rowLOAI = $so_loai_qua->fetch_array();
	$soloaiqua = $rowLOAI[0];
	
	// dem so qua
	$strSQL="SELECT COUNT(*) FROM qua";
	$so_qua=$conn->query($strSQL);
	$rowqua=$so_qua->fetch_array();
	$soqua=$rowqua[0];
	
	// dem so khach hang
	$strSQL="SELECT COUNT(*) FROM khach_hang";
	$khach_hang=$conn->query($strSQL);
	$rowKHACH=$khach_hang->fetch_array();
	$khachhang=$rowKHACH[0];
	
	// dem so tin tuc
	$strSQL="SELECT COUNT(*) FROM tin_tuc";
	$tin_tuc=$conn->query($strSQL);
	$rowTIN=$tin_tuc->fetch_array();
	$tintuc=$rowTIN[0];
	
	// dem so lien he
	$strSQL="SELECT COUNT(*) FROM lien_he";
	$lien_he=$conn->query($strSQL);
	$rowLH=$lien_he->fetch_array();
	$lienhe=$rowLH[0];
	
	// dem so don dat hang
	$strSQL="SELECT COUNT(*) FROM dondathang";
	$dondathang=$conn->query($strSQL);
	$rowDDH=$dondathang->fetch_array();
	$dondathang=$rowDDH[0];


?>