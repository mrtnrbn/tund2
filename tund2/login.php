<?php 
	
	//var_dump($_GET);
	
	//echo "<br>";
	
	//var_dump($_POST);
	
	//MUUTUJAD
	$signupEmailError = "*";
	$signupEmail = "";
	
	//kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["signupEmail"])) {
		
		//on olemas
		// kas epost on tühi
		if (empty ($_POST["signupEmail"])) {
			
			// on tühi
			$signupEmailError = "* V2li on kohustuslik!";
			
		} else {
			// email on olemas ja 6ige
			$signupEmail = $_POST["signupEmail"];
			
		}
		
	} 
	
	$signupPasswordError = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
		if (empty ($_POST["signupPassword"])) {
			
			$signupPasswordError = "* Väli on kohustuslik!";
			
		} else {
			
			// parool ei olnud tühi
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "* Parool peab olema vähemalt 8 tähemärkki pikk!";
				
			}
			
		}
		
	}
	//vaikimisi v22rtus
	$gender="";
	
	
	if (isset ($_POST["signupEmail"])) {
		if (empty ($_POST["signupEmail"])) {
			$signupEmailError = "* Väli on kohustuslik!";
		} else {
			$signupEmail = $_POST["signupEmail"];
		}
		
	} 
	
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>sisselogimise leht</title>
	</head>
	<body>

		<h1>logi sisse</h1>
		
		<form method="POST" >
			
			<label>e-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>

			<input name="loginPassword" placeholder="parool" type="password">
			
			<br><br>
			
			<input type="submit" value="logi sisse">
		
		</form>
		
		<h1>loo kasutaja</h1>
		
		<form method="POST" >
			
			<label>e-post</label><br>
			<input name="signupEmail" type="email" value="<?=$signupEmail;?>"> <?php echo $signupEmailError; ?>
			
			<br><br>

			<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<?php if ($_POST["gender"] == "male") { ?>
				<input type="radio" name="gender" value="male" checked> male<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="male" > male<br>
			<?php } ?>
			
			<?php if ($_POST["gender"] == "female") { ?>
				<input type="radio" name="gender" value="female" checked> female<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="female" > female<br>
			<?php } ?>
			
			<?php if ($_POST["gender"] == "other") { ?>
				<input type="radio" name="gender" value="other" checked> other<br>
			<?php } else { ?>
				<input type="radio" name="gender" value="other" > other<br>
			<?php } ?>
			
			<input type="submit" value="Loo kasutaja">
		
		</form>

	</body>
</html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		<form method="POST">
			<input name="loginEmail" placeholder="email" type="email">
			<br><br>
			<input name="loginPassword" placeholder="parool" type="password">
			<br><br>
			<input type="submit" value="logi sisse">
		</form>
		<h1>Registeeri</h1>
		<form method="POST">
			<input name="signupEmail" placeholder="email" type="email" value="<?=$signupEmail;?>"> <?php echo $signupEmailerror?>
			<br><br>
			<input name="signupPassword" placeholder="parool" type="password">
			<br><br>
			<input type="submit" value="registeeri">
		</form>
			

	</body>
</html>