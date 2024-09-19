<!--//Nama File 				: koneksi.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 16 November 2022
	//Tanggal Update Ngoding	: 16 November 2022 -->
<?php
	class koneksi{
		public function get_koneksi(){
			$conn=mysqli_connect("localhost","root","","db_latihan15");
			if(mysqli_connect_error()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
			}
			return $conn;
			}
	}
	$konek=new koneksi();
	$koneksi=$konek->get_koneksi();
?>