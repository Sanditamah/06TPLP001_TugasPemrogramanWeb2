<!--//Nama File 				: 06TPLP001_uas_sanditamaliaherman2.php
	//Nama Programmer 			: Sandi Tamalia Herman
	//Tanggal Ngoding 			: 19 Desember 2022-->
			
			<h3>DATA SISWA</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th width="60px">NISN</th>
							<th width="80px">NAMA</th>
							<th width="80px">TANGGAL LAHIR</th>
							<th width="80px">TEMPAT LAHIR</th>
							<th width="80px">JENIS KELAMIN</th>
							<th width="80px">ALAMAT</th>
							<th width="100px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include '06TPLP001_uas_sanditamaliaherman1.php';
						$no = 1;
						$siswa = mysqli_query($conn, "SELECT * FROM siswa_sanditamaliaherman_uas ORDER BY nisn_sanditamaliaherman");
						while ($row = mysqli_fetch_array($siswa)) {
						?>
							<tr align="center">
								<td><?php echo $no++ ?></td>
								<td><?php echo $row['nisn_sanditamaliaherman'] ?></td>
								<td><?php echo $row['namasiswa_sanditamaliaherman'] ?></td>
								<td><?php echo $row['tgllahir_sanditamaliaherman'] ?></td>
								<td><?php echo $row['tempatlahir_sanditamaliaherman'] ?></td>
								<td><?php echo $row['jeniskelamin_sanditamaliaherman'] ?></td>
								<td><?php echo $row['alamat_sanditamaliaherman'] ?></td>
								<td>
									<a href="06TPLP001_uas_sanditamaliaherman4.php?id=<?php echo $row['nisn_sanditamaliaherman'] ?>">Edit</a> ||
									<a href="06TPLP001_uas_sanditamaliaherman5.php?idp=<?php echo $row['nisn_sanditamaliaherman']?>" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>