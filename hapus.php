<?php				
			include 'koneksi.php'; 

			
			$datas = mysqli_query($koneksi, "delete from course where id ='$id'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
	?>