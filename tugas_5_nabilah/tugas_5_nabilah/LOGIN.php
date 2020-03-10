<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	<header>
		<h1 class="judul">LOGIN</h1>
		<p class="deskripsi"> Masukkan Nama dan Email anda</p>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="home.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Nama</b></label>
							<input type="text" placeholder="Masukkan Nama" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>					
						<label><b>Email</b></label>
					<input type="text" placeholder="Masukkan Email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
					
						<button type="submit" name="submit">LOGIN</button>
   						 
  					</div>
				</form>

			
</body>
</html>