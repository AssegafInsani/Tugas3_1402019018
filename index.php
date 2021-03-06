<!DOCTYPE html>
<html>
<head>
	<title>3D Calculator 1402019018</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>3D Calculator</h1>
	</header>

	<div class="main">
		<div class="content">
			<div class="title">
				<br>
				<h1 class="sapa">Selamat <span id="time"></span>, <span id="user"></span></h1>
				<br>
				<p>Menghitung volume dan luas permukaan dari silinder, kerucut dan bola. Mengembalikan hasil dalam pembulatan dua angka decimal</p>
				<br>
			</div>

			<div class="silinder">
				<h1>Silinder</h1>
				<br>
				<p>Masukkan jari-jari silinder (dalam meter)</p>
				<input id="inputJariSilin" type="text">
				<p>Masukkan tinggi silinder (dalam meter)</p>
				<input id="inputTinggiSilin" type="text">
				<br>
				<button id="hitungSilin" type="button" onclick="hitungSilinder()">Hitung!</button>
				<br>
				<br>
				<h2>Hasil perhitungan</h2>
				<p>Luas Permukaan: <span id="luasSilin"></span>m<sup>2</sup></p>
				<br>
				<p>Volume: <span id="volSilin"></span>m<sup>3</sup></p>
			</div>

			<div class="kerucut">
				<br>
				<h1>Kerucut</h1>
				<br>
				<p>Masukkan jari-jari kerucut (dalam meter)</p>
				<input id="inputJariKerut" type="text">
				<p>Masukkan garis pelukis kerucut (dalam meter)</p>
				<input id="inputgarisKerut" type="text">
				<p>Masukkan tinggi kerucut (dalam meter)</p>
				<input id="inputTinggiKerut" type="text">
				<br>
				<button id="hitungKerut" type="button" onclick="hitungKerucut()">Hitung!</button>
				<br>
				<br>
				<h2>Hasil perhitungan</h2>
				<p>Luas Permukaan: <span id="luasKerut"></span>m<sup>2</sup></p>
				<br>
				<p>Volume: <span id="volKerut"></span>m<sup>3</sup></p>
			</div>

			<div class="bola">
				<br>
				<h1>Bola</h1>
				<br>
				<p>Masukkan jari-jari Bola (dalam meter)</p>
				<input id="inputJariBola" type="text">
				<br>
				<button id="hitungBola" type="button" onclick="hitungBola()">Hitung!</button>
				<br>
				<br>
				<h2>Hasil perhitungan</h2>
				<p>Luas Permukaan: <span id="luasBola"></span>m<sup>2</sup></p>
				<br>
				<p>Volume: <span id="volBola"></span>m<sup>3</sup></p>
			</div>
		</div>
	</div>
		
	<footer>
		<img src="facebook.png"><a href="https://id-id.facebook.com/">Facebook</a>
		<img src="instagram.png"><a href="https://www.instagram.com/">Instagram</a>
		<img src="github.png"><a href="https://github.com/AssegafInsani/Tugas3_1402019018">Github</a>
	</footer>
	<script src="script.js"></script>
</body>
</html>
