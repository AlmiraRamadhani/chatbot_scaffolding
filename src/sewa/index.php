<!DOCTYPE html>
<html>
<title>Penyewaan Scaffolding</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/chat.css">
<script src="assets/js/chat.js"></script>

<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">
		<div class="w3-bar w3-white w3-wide w3-padding w3-card">
			<a href="#home" class="w3-bar-item w3-button">Penyewaan Scaffolding Samarinda</a>
			<!-- Float links to the right. Hide them on small screens -->
			<div class="w3-right w3-hide-small">
				<a href="#home" class="w3-bar-item w3-button">Home</a>
				<a href="#about" class="w3-bar-item w3-button">About</a>
				<a href="#contact" class="w3-bar-item w3-button">Contact</a>
				<a href="chat.php" class="w3-bar-item w3-button">Chatbot</a>
				<a href="login.php" class="w3-bar-item w3-button">Login</a>
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="w3-content w3-padding" style="max-width:100%">

		<!-- Project Section -->
		<div class="w3-container w3-padding-32" id="home">
			<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Barang Yang Tersedia</h3>
		</div>

		<div class="w3-row-padding">
			<table>
				<tr>
					<td width="20%">1 set Main Frame ukuran 1,9 Meter</td>
					<td width="20%">1 set Main Frame ukuran 1,7 Meter</td>
					<td width="20%">Leader 0,9 Meter <b>dengan</b> Join Pin</td>
				</tr>
				<tr>
					<td width="20%">Leader 0,9 Meter <b>tanpa</b> Join Pin</td>
					<td width="20%">Jack Base 60 Centimeter</td>
					<td width="20%">U head Jack 60 Centimeters</td>
				</tr>
				<tr>
					<td width="20%">Cat Walk</td>
					<td width="20%">Roda 1 set (4pcs)</td>
					<td width="20%">Tangga</td>
				</tr>
				<tr>
					<td width="20%">Pipa Support</td>
				</tr>
			</table>

			<div class="row">
				<div class="col-lg-6">
					<div class="w3-container w3-padding-32" id="about">
						<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
						<p>Penyewaan Scaffolding Samarinda Terletak di Samarinda Kalimantan Timur. <br>
							Penyewaan kami buka pada hari Senin,Selasa,Rabu,Sabtu pukul 08.00-14.00 WITA, <br>Kamis pukul 08.00-12.00 WITA, <br>dan libur pada hari Jum'at dan Minggu.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="w3-row-padding w3-grayscale">
						<div class="w3-col l3 m6 w3-margin-bottom">
							<h3>Sumeru Syahdaini</h3>
							<p class="w3-opacity">CEO & Founder</p>
							<p>Pemilik Usaha Penyewaan Scaffolding Samarinda</p>
							<p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
						</div>
					</div>
				</div>
			</div>
			<!-- Contact Section -->
			<div class="w3-container w3-padding-32" id="contact">
				<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
				<p>Lets get in touch and talk about your next project.</p>
				<form method="post" action="komentar_aksi.php">
					<input class="w3-input w3-section w3-border" type="text" id="comment_name" class="form-control" name="comment_name" placeholder="Masukkan Nama">
					<input class="w3-input w3-section w3-border" type="email" id="comment_email" class="form-control" name="comment_email" placeholder="Masukkan Email">
					<input class="w3-input w3-section w3-border" type="text" id="comment_subject" class="form-control" name="comment_subject" placeholder="Masukkan Subyek">
					<input class="w3-input w3-section w3-border" type="text" id="comment" class="form-control" name="comment" placeholder="Masukkan Komentar">
					<button class="w3-button w3-black w3-section" type="submit">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
					</button>
				</form>
			</div>
			<!-- End page content -->
		</div>
		<!-- Footer -->


</body>

</html>