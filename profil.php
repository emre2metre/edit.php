<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/profil.css?cache=<?= time() ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css?cache=<?= time() ?>">

</head>


<?php
session_start();
include 'ayar.php';
include 'ukas.php';
include 'func.php';
?>


<body id="body">
	<div class="ot1">
		<p><strong>LÜTFEN ÖNCE GİRİŞ YAPIN</strong></p>
	</div>
	<div class="container">
		<div class="main-body">

			<!-- Breadcrumb
		<nav aria-label="breadcrumb" class="main-breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
				<li class="breadcrumb-item active" aria-current="page">User Profile</li>
			</ol>
		</nav>
	-->

			<div class="row gutters-sm">
				<div class="col-md-4 mb-3">
					<div class="card gen">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
								<div class="mt-3">
									<h4><?php echo $_SESSION["uye_adsoyad"] . "<br />"; ?></h4>
									<p class="text-secondary mb-1"><strong>Kullanıcı Adı:</strong>&nbsp;<?php echo $_SESSION["uye_kadi"] . "<br />"; ?></p>
									<p class="text-muted font-size-sm"><strong>Üye İd:</strong>&nbsp;<?php echo $_SESSION["uye_id"] . "<br />"; ?></p>

									<button class="btn btn-outline-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card prof mb-3">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Ad Soyad</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $_SESSION["uye_adsoyad"] . "<br />"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">E-mail</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $_SESSION["uye_eposta"] . "<br />"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Telefon Numarası</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php
									if (empty($_SESSION["uye_telno"])) {
										echo '<a href="#">Telefon numarası ekleyin</a>';
									} else {
										echo $_SESSION["uye_telno"];
									}
									?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Ev Adresi</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php
									if (empty($_SESSION["uye_evadres"])) {
										echo '<a href="#">Ev adresi ekleyin</a>';
									} else {
										echo $_SESSION["uye_evadres"];;
									}
									?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<h6 class="mb-0">Hesap Türü</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?php echo $_SESSION["uye_onay"] . "<br />"; ?>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<a class="btn btn-info " target="__blank" href="edit.php">Bilgileri Düzenle</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mt-5 mb-5">
				<h1><strong>Paylaşımlar</strong></h1>
			</div>
		</div>
		<div class="row">
			<?php
			$veri = $db->prepare("SELECT * FROM yazilar ORDER BY yazi_id DESC");
			$veri->execute();
			$islem = $veri->fetchALL(PDO::FETCH_ASSOC);

			foreach ($islem as $row) {
				echo '<div class="col-lg-4">
                        <div class="card kart">
                            <img src="' . $row["yazi_resim"] . '" class="card-img-top kartresim" alt="...">
                            <div class="card-body kartbody">
                            <h5 class="card-title kartbaslık">' . $row["yazi_baslik"] . '</h5>
                            <p class="card-text kartacıklama">' . kisalt($row["yazi_aciklama"], 140) . '</p>
                            <a href="yazi.php?link=' . $row["yazi_link"] . '" class="btn btn-dark">Devamını Oku</a>
                            </div>
                        </div>
                    </div>';
			}
			?>
		</div>
	</div>
	<?php
	if (empty($_SESSION["uye_adsoyad"])) {
		echo '<style>body{overflow:hidden} .ot1{display:table!important}</style>  <script>setTimeout(()=>{window. location = "login.php"},3000);</script>';
	} else {
	}
	?>
</body>
