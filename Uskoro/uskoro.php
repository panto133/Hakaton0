<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
		<script>
			$(document).ready(function()
			{
				//set initial state.
				//$("#checkbox1").val(this.checked);

				$("#checkbox1").change(function() {
					if(this.checked) {
						$("body").css("background-image","url(../img/background.jpg)");
					}
					else{
						$("body").css("background-image","url(../img/background2.jpg)");
					}
				});
			});
		</script>
		<link rel = "stylesheet" href="uredjivanjeUskoro.css">
	</head>
	<body>
		<header>
			<div class="row no-gutters">
				<div class="col-xl-5">
					<h1 class="pl-5 pt-2">Uskoro</h1>
				</div>
				<div class="col-xl-7">
					<nav class="navbar navbar-dark bg-transparent navbar-expand-xl">
					
						<div class="centerMenuButton">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
							</button>
						</div>
						
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav ml-auto pt-5 pr-5">
									<li class="nav-item active font">
										<label class="switch">
											<input type="checkbox" id="checkbox1">
											<span class="slider round"></span>
										</label>
									</li>
								<li class="nav-item active font">
									<div class="flexboxRow">
										<div class="navbarBorder notVisible"></div>
										<a class="nav-link px-2 navbarLink" href="../index.php">Pocetna</a>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../Gde/gde.php">Gde</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../Dogadjaj/dogadjaj.php">Dogadjaj</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../KoSamJa/kosamja.php">Ko sam ja</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../QnA/qna.php">Q&A</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../Diskusija/diskusija.php">Diskusija</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="../Pregled/pregled.php">Pregled</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<form action="uskoro.php" method="POST" enctype="multipart/form-data">
			<h2>Nova lokacija</h2>
			<div class="qnaAnswer">Dodata je nova ekstravagantna lokacija na našoj stranici koja se nalazi na prostoriji Beograda! Uz samo par klikova moći ćete da prisustvujete raznim događajima. Na našem sajtu takođe možete da organizujete javne događaje!</div>
			<h2>Festival nauke</h2>
			<div class="qnaAnswer">Festival nauke je u potrazi za volonterima koji će pomoći u realizaciji, kao i organizaciji ove fantastične bine za mlade. Ako si zainteresovan, prijave će se uskoro otvoriti, a mi te očekujemo!</div>
			<h2>Maturski ples</h2>
			<div class="qnaAnswer">Uskoro će početi maturski ples koji će biti održan u Kraljevu 19.5.2020. u 12:00h. Učenici su već počeli da spremaju svoje pokrete koje će na jedinstven način da pokažu u svoje vreme. Očekuje se veliki broj učesnika koji je veoma blizu obaranja svetskog rekorda.</div>
			<footer class="pt-5">
					<div class="row no-gutters">
						<div class="col-md-3">
							
							<p class="footerHeader">Drustvene mreze</p>
							<ul class="footerUl">
							
								<li class="footerLi">
									<a href="https://www.facebook.com/Hakaton/" class="footerLink" target="_blank">
										<p class="footerList">Facebook</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://twitter.com/hakatonrs" class="footerLink" target="_blank">
										<p class="footerList">Twitter</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.instagram.com/hakaton_za_srednjoskolce/" class="footerLink" target="_blank">
										<p class="footerList">Instagram</p>
									</a>
								</li>
								
							</ul>
							
						</div>
						<div class="col-md-3">
						
							<p class="footerHeader">Kontakt</p>
							<ul class="footerUl">
								<li class="footerLi">
									<a href="https://www.instagram.com/andrija.slovic/?hl=sr" class="footerLink" target="_blank">
										<p class="footerList">Andrija Slović</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.instagram.com/panto133/?hl=sr" class="footerLink" target="_blank">
										<p class="footerList">Strahinja Pantić</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.instagram.com/weks01/?hl=sr" class="footerLink" target="_blank">
										<p class="footerList">Veljko Jovanović</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.instagram.com/neplacena_kirija/?hl=sr" class="footerLink" target="_blank">
										<p class="footerList">Nevena Gligorov</p>
									</a>
								</li>
							</ul>
							
						</div>
						<div class="col-md-3">
						
							<p class="footerHeader">Saradnici</p>
							<ul class="footerUl">
								<li class="footerLi">
									<a href="http://hakaton.fonis.rs/" class="footerLink" target="_blank">
										<p class="footerList">Hakaton</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="http://www.fon.bg.ac.rs/" class="footerLink" target="_blank">
										<p class="footerList">Fon</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.interventure.info/" class="footerLink" target="_blank">
										<p class="footerList">Interventure</p>
									</a>
								</li>
								<li class="footerLi">
									<a href="https://www.catenamedia.com/" class="footerLink" target="_blank">
										<p class="footerList">Catenamedia</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
						
							<p class="footerHeader">Pratite obavestenja</p>
							<ul class="footerUl">
								<li class="footerLi">
									<input type="email" placeholder = " E-mail" name="emailText">
									
								</li>
								<li class="footerLi">
									<input type="submit" name="dugmePrimaj" value = "PRIMAJTE OBAVEŠTENJA">
										<?php 

										if((isset($_POST["emailText"])))
											$text = $_POST["emailText"];		
										else exit();

						
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "hakaton";

										$conn = new mysqli($servername, $username, $password, $dbname);

										if ($conn->connect_error) {
										exit('Could not connect');
										}

										$sql = "INSERT INTO hakaton.pretplatnici (email) VALUE ('$text')";
										$conn->query($sql);
										$conn->close();

										?>
								</li>
							</ul>
						</div>
					</div>				
				</footer>
		</form>
	</body>
</html>