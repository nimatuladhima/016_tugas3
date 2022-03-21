<?php
include("koneksi.php");
switch ($_GET['jenis']) {
	case 'kota':
		$id_provinces = $_POST['id_provinces'];
		if ($id_provinces == '') {
			exit;
		} else {
			$getcity = mysqli_query($con, "SELECT  * FROM kota WHERE province_id ='$id_provinces' ORDER BY name ASC") or die('Query Gagal');
			while ($data = mysqli_fetch_array($getcity)) {
				echo '<option value="' . $data['id'] . '">' . $data['name'] . '</option>';
			}
			exit;
		}
		break;

	case 'kecamatan':
		$id_regencies = $_POST['id_regencies'];
		if ($id_regencies == '') {
			exit;
		} else {
			$getcity = mysqli_query($con, "SELECT  * FROM kecamatan WHERE regency_id ='$id_regencies' ORDER BY name ASC") or die('Query Gagal');
			while ($data = mysqli_fetch_array($getcity)) {
				echo '<option value="' . $data['id'] . '">' . $data['name'] . '</option>';
			}
			exit;
		}
		break;
}
