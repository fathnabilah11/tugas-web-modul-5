<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<header>
		<h1 class="judul">Selamat Datang,</h1>
	</header>

	<div class="wrap"></div>
		<nav class="menu">
			<ul>
				<li>
					<a href="hasil.php">Home</a>
				</li>
				<li>
					<a href="biodata.php">Biodata Admin</a>
				</li>
			</ul>
		</nav>

		<aside class="sidebar">
			<div class="widget">
				<h2>BRANI CLOTH</h2>
				<p>Brani Cloth adalah usaha bergerak di rana konveksi,keunggulan kita adalah di kualitas dan cerita yang kami berikan di setiap bajunya untuk lebih lengkapnya silahkan berkunjung di instagram @brani.cloth</p>
			</div>
			<div class="widget">
				<h2>BRANI SHOP</h2>
				<p>Brani Shop adalah salah satu online shop yang menyediakan berbagai macam makeup, jam tangan daniel wallington, serta skincare untuk wanita. untuk lebih lengkapnya silahkan berkunjung di instagram @brani.shop</p>
			</div>
		</aside>

		<div class="blog">
			<div class="conteudo">
				<h1>Hasil Input</h1>
				<hr>
				<?php
					if (isset($_POST['submit'])) {
						echo '<ul>';
						echo '<li>Nama: ' . $_POST['nama'] . '</li>';
						echo '<li>Email: ' . $_POST['email'] . '</li>';
						echo '<h3>Anda Login Pada : </h3>';
						$day = date('D');
						$dayList = array(
					    'Sun' => 'Minggu',
					    'Mon' => 'Senin',
					    'Tue' => 'Selasa',
					    'Wed' => 'Rabu',
					    'Thu' => 'Kamis',
					    'Fri' => 'Jumat',
					    'Sat' => 'Sabtu'
						);
						echo '<li>Tanggal ' . date("d-m-Y") . "<br>";
						echo '<li>Hari ' . $dayList[$day] . "<br>";
						echo '<li>Jam ' . date("h:i:sa");
					} else {
						die("Maaf, anda harus mengisi nama dan email");
					}
					
				?>
			
</body>
</html>