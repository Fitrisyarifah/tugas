<!DOCTYPE html>
<html>
<head>
	<title>Trisyaa website</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Portfo<span>lio</span></h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="#">Hobby</a></li>
				<li><a href="#">Contact Me</a></li>
			</ul>
			<a href="#" class="btn">Follow!!</a>
		</nav>

		<div class="content">
			<h2>Hello, I'm</h2>
			<h1>Fitri Syarifah <span>N.H.</span></h1>
			<h3>Mahasiswi UIN Maulana Malik Ibrahim Malang.</h3>
			<div class="newslatter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="Fitri Syarifah NH.jpeg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Trisyaa <span> or Fitri</span></h5>
				<p>Haloo, sekilas tentang diriku. Namaku Fitri Syarifah Noer Hidayah, biasa dipanggil Fitri. Aku anak pertama dari dua bersaudara. Aku berasal dari Pandaan, kabupaten Pasuruan. Aku punya satu adik, namanya Muhammad Zaim Masrur Rizqi. Aku sangat menyayanginya. Aku ingin bercerita sedikit tentang bagaimana aku bisa berkuliah di UIN Malang. Jadi, awalnya aku berencana kuliah di Jember bersama temanku, tetapi orangtuaku membujuk untuk masuk ke UIN Malang karena lebih dekat dengan tempat dimana aku tinggal. Dan aku juga punya saudara di Malang juga, sehingga aku tidak sendirian saat berada di malang dan juga ada yang menjagaku. Untuk masuk jurusan matematika, memang itu sudah pilihanku. Karena aku suka menghitung, tetapi semakin tinggi pendidikan yang aku tempuh rasanya matematika tidak menyenangkan lagi. Tetapi aku tetap menjalani proses perkuliahan demi mendapatkan gelar sarjana dan membahagiakan keluargaku. Sekian dulu cerita tentangku. Sampai jumpa lain waktu yaaa!!</p>
				<button type="button">Let's Talk</button>
			</div>
		</div>
	</section>

	<!-----hobby section start----------->
	<div class="service">
		<div class="title">
			<h2>My Hobby's</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Travelling</h5>
				<div class="pra">
					<p>Saya menyukai hobi ini meskipun sudah jarang melakukannya. Hanya saja jika ada waktu luang, dan ada teman yang bisa diajak travel bersama, maka sudah pasti saya tidak akan melewatkan kesempatan untuk hal ini.</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Jogging</h5>
				<div class="pra">
					<p>Saya lebih sering melakukan jogging bersama saudara maupun sepupu perempuan saya. Saat sedang di rumah, hampir setiap hari minggu saya melakukannya. Saya biasa jogging di Taman Dayu Pandaan.</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Reading</h5>
				<div class="pra">
					<p>Saya suka membaca buku, komik, ataupun novel. Meskipun lebih sering membaca novel atau cerita, saya juga menyempatkan waktu untuk membaca buku tentang pembelajaran.</p>
				</div>
			</div>
		</div>
	</div>

	<!------Contact Me------>
	<div class="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<h3>contact-me : </h3>
		<a href="#">0895325747040</a>
		<a href="#">syarifah.fitri0407@gmail.com</a> <br>
		<a class="button-two" href="#">Hire Me</a>
	</div>
	<div class="contact-form">
        <h3 class="section-title">Hubungi Kami</h3>
        <p>Email (Wajib diisi)</p>
        <form action="welcome.php" method="post">
          First Name: <input type="text" name="firstname"><br>
          Last Name: <input type="text" name="lastname"><br>
          E-mail: <input type="text" name="email"><br>
          <input type="submit">
        </form>
      </div>

	<!------footer start--------->
	<footer>
		<p>Fitri Syarifah Noer Hidayah</p>
		<p>For my social media:</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		</div>
		<p class="end">By Trisyaa NH</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
