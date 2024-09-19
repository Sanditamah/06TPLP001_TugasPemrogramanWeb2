<?php 
	
	include '06TPLP001_uas_sanditamaliaherman1.php';

	if( isset($_GET['idp']) ){
		$delete = mysqli_query($conn, "DELETE FROM siswa_sanditamaliaherman_uas WHERE nisn_sanditamaliaherman = '".$_GET['idp']."' ");
		echo '<script>window.location="06TPLP001_uas_sanditamaliaherman2.php"</script>';
	}
?>